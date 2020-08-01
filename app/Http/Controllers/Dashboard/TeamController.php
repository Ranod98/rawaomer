<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{

    public function index(Request $request)
    {
        $team = Team::when($request->search,function ($q) use ($request){


            return $q->where('full_name','like','%'.$request->search.'%');


        })->latest()->paginate(5);

        return view('dashboard.team.index',compact('team'));

    }//end of index


    public function create()
    {
        return view('dashboard.team.create');
    }//end of create


    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'degree'=>'required',
            'email'=>'required|unique:teams',
            'skill'=>'required',
            'image'=>'image',

        ]);

        $request_data = $request->except(['image']);

        if ($request->image){

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/team_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }// end of if from

        $teams= Team::create($request_data);


        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.teams.index');




    }//end of store

    public function show(Team $team)
    {
        //
    }//end of show

    public function edit(Team $team)
    {
        return view('dashboard.team.edit',compact('team'));
    }//end of edit

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'full_name'=>'required',
            'degree'=>'required',
            'email'=>['required',Rule::unique('teams')->ignore($team->id),
            ],
            'skill'=>'required',
            'image'=>'image',

        ]);

        $request_data = $request->except(['image']);

        if ($request->image){

            if ($team->image != 'default.png'){

                Storage::disk('public_uploads')->delete('/team_image/' . $team->image);


            }//end inner if

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/team_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }// end of if from



        $team->update($request_data);

        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.teams.index');

    }//end of update

    public function destroy(Team $team)
    {
        if ($team->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/team_image/' . $team->image);

        }//end of if

        $team->delete();

        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.teams.index');
    }//end of destroy


}//end of controller
