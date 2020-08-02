<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:users_read'])->only('index');
        $this->middleware(['permission:users_create'])->only('create');
        $this->middleware(['permission:users_update'])->only('edit');
        $this->middleware(['permission:users_delete'])->only('destroy');
    }

    public function index(Request $request)
    {

        $users = User::whereRoleIs('admin')->where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%');

            });

        })->latest()->paginate(5);
        

        return view('dashboard.user.index',compact('users'));
    }


    public function create()
    {
        return view('dashboard.user.create');

    }//end of create


    public function store(Request $request)
    {

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed',
            'image'=>'image',
            'permissions' => 'required|min:1'
        ]);

        $request_data = $request->except(['password','password_confirmation','permissions','image']);
        $request_data['password']= bcrypt($request->password);

        if ($request->image){

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/users_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }// end of if from

        $user = User::create($request_data);

        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);

        session()->flash('success',__('site.added_successfully'));

        return redirect()->route('dashboard.users.index');




    }//end of store




    public function edit(User $user)
    {
        return view('dashboard.user.edit' , compact('user'));
    }//end of edit


    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>['required',Rule::unique('users')->ignore($user->id),
            ],
            'image'=>'image',
            'permissions' => 'required|min:1'

        ]);



        $request_data = $request->except(['permissions','image']);

        if ($request->image){

            if ($user->image != 'default.png'){

                Storage::disk('public_uploads')->delete('/users_image/' . $user->image);


            }//end inner if

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/users_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }// end of if from

        $user->update($request_data);

        $user->syncPermissions($request->permissions);

        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.users.index');



    }//end of update


    public function destroy(User $user)
    {

        if ($user->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/users_image/' . $user->image);

        }//end of if

        $user->delete();

        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');

    }//end of destroy
}//end of controller