<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Project;
use App\Team;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:project_read'])->only('index');
        $this->middleware(['permission:project_create'])->only('create');
        $this->middleware(['permission:project_update'])->only('edit');
        $this->middleware(['permission:project_delete'])->only('destroy');
    }//end of construct

    public function index(Request $request)
    {

        $projects = Project::when($request->search,function ($q) use ($request){
            return  $q->where('name','like','%'.$request->search.'%');

        })->when($request->type_id,function ($q) use ($request){

            return $q->where('type_id',$request->type_id);

        })->when($request->team_id,function ($q) use ($request){

            return $q->where('team_id',$request->team_id);


        })->latest()->paginate(5);
        return  view('dashboard.project.index',compact('projects'));

    }//end of index


    public function create()
    {
        $teams = Team::all();
        $types = Type::all();

        return view('dashboard.project.create',compact('teams','types'));

    }//end of create


    public function store(Request $request)
    {

        $request->validate([
            'name'  => 'required|unique:projects',
            'type'  => 'required',
            'team'  => 'required',
            'lang'  => 'required',
            'image' => 'image',
            'description' =>'required',
            'link' => 'required',
        ]);

        $request_data = $request->except(['image','team','type']);


        if ($request->image){

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/project_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }// end of if from

        $request_data['type_id'] = $request->type;
        $request_data['team_id'] = $request->team;

        $project = Project::create($request_data);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.projects.index');



    }//end of store



    public function show(Project $project)
    {

    }//end of show


    public function edit(Project $project)
    {

        $types = Type::all();
        $teams = Team::all();

        return view('dashboard.project.edit',compact('teams','types','project'));


    }//end of edit


    public function update(Request $request, Project $project)
    {


        $request->validate([
            'name'=>['required',Rule::unique('projects')->ignore($project->id),
            ],
            'type'  => 'required',
            'team'  => 'required',
            'lang'  => 'required',
            'image' => 'image',
            'description' =>'required',
            'link' => 'required',
        ]);

        $request_data = $request->except(['image','team','type']);

        if ($request->image){

            if ($project->image != 'default.png'){

                Storage::disk('public_uploads')->delete('/project_image/' . $project->image);


            }//end inner if

            $img =  Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('dashboard/uploads/project_image/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }


        $request_data['type_id'] = $request->type;
        $request_data['team_id'] = $request->team;

        $project->update($request_data);

        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.projects.index');




    }//end of update


    public function destroy(Project $project)
    {

        if ($project->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/project_image/' . $project->image);

        }//end of if

        $project->delete();

        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.projects.index');

    }//end of destroy
}
