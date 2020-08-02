<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TypeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:project_read'])->only('index');
        $this->middleware(['permission:project_create'])->only('create');
        $this->middleware(['permission:project_update'])->only('edit');
        $this->middleware(['permission:project_delete'])->only('destroy');
    }
    public function index(Request $request)
    {

        $types = Type::when($request->search,function ($q) use($request){

            return $q->where('name','like','%'.$request->search.'%');

        })->latest()->paginate(5);

       return view('dashboard.type.index',compact('types'));


    }//end of index


    public function create()
    {
        return view('dashboard.type.create');
    }//end of create


    public function store(Request $request)
    {


        $request->validate([
            'name'=>'required|unique:types'
        ]);

        $request_data = $request->all();

        Type::create($request_data);


        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.types.index');

    }//end of store



    public function edit(Type $type)
    {
        return view('dashboard.type.edit',compact('type'));
    }//end of edit


    public function update(Request $request, Type $type)
    {

        $request->validate([
            'name'=>['required',Rule::unique('types')->ignore($type->id),
            ],
        ]);

        $request_data = $request->all();

        $type->update($request_data);

        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.types.index');




    }//end of update


    public function destroy(Type $type)
    {
        $type->delete();

        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.types.index');
    }//end of destroy


}//end of controller
