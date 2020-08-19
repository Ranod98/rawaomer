<?php

namespace App\Http\Controllers\Dashboard;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:clint_side_read'])->only('index');

        $this->middleware(['permission:clint_side_update'])->only('edit');
        $this->middleware(['permission:clint_side_delete'])->only('destroy');
    }// end of construct

    public function index(Request $request)
    {
        $feedback =Feedback::when($request->search,function ($q) use ($request){
            $q->where('message','like','%'.$request->search.'%')->orWhere('subject','like','%'.$request->search.'%');
        })->latest()->paginate(5);;

        return view('dashboard.feedback.index',compact('feedback'));
    }//end of index


    public function create()
    {
        return view('frontend.contact');

    }//end of create




    public function store(Request $request)
    {

         $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $request_data = $request->all();
        $feedback = Feedback::create($request_data);

        return  redirect(route('frontend.index'));


    }//end of store




    public function show(Feedback $feedback)
    {
        return view('dashboard.feedback.show',compact('feedback'));
    }//end of show


    public function edit(Feedback $feedback)
    {
        //
    }//end of edit


    public function update(Request $request, Feedback $feedback)
    {
        //
    }//end of update


    public function destroy(Feedback $feedback)
    {
        //
    }//end of destroy

}//end of controller
