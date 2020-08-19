<?php

namespace App\Http\Controllers;

use App\Project;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    public function index(){

        $project = Project::limit(3)->get();
        $team = Team::all();
        return view('frontend.index',compact('project','team'));

    }//end of index

    public function  about(){

        $team = Team::all();
        return view('frontend.about',compact('team'));

    }//end of about

    public function project(){

        $project = Project::all();



        return view('frontend.project',compact('project'));
    }//end of project

    public function detail(Project $Project){



        $viewed = Session::get('viewed_project', []);
        if (!in_array($Project->id, $viewed)) {
            $Project->increment('view');
            Session::push('viewed_project', $Project->id);
        }

        return view('frontend.detail',compact('Project'));

    }//end of detail

    public function contact(){

        return view('frontend.contact');

    }//end of contact

    public function team(){

    $team = Team::all();
    return view('frontend.team',compact('team'));
    }//end of team

    public function teamProject(Team $team){

        $project  = Project::all();

        $viewed = Session::get('viewed_project', []);
        if (!in_array($team->id, $viewed)) {
            $team->increment('views');
            Session::push('viewed_project', $team->id);
        }

        return view('frontend.teamproject',compact('team','project'));
    }


}
