<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Project;
use App\Team;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $project = Project::all();
        $team = Team::all();
        $user = User::whereRoleIs('admin');

            return view('dashboard.index',compact('project','team','user'));

    }//end of index


}//end of controller
