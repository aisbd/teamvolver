<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vanguard\Project;
use Vanguard\Designation;

class ProjectController extends Controller
{
     public function index(){

        // if(request()->has('random')){
        //    return Designation::take(6)->select('id', 'name')->get();
        // }
        //   return Project::with('designations')->get();
          
        //   // return $this->memberProjectPage();


          if(\Auth::guest()){
               return Designation::take(7)->select('id', 'name')->get();
          }
          if( !\Auth::guest() && request()->user()->type == 'member' && !request()->ajax()){
               return $this->memberProjectPage();
          }


     	// $designations = request()->user()->projects()->first()->designations()->select('id', 'name')->get();
      //     if( count($designations) < 1){
      //            return Designation::take(7)->select('id', 'name')->get();
      //     }

     	// return $designations;
     }
	
     public function store(Request $request)
     {
     		$project = $request->user()->projects()->create(['category_id' => $request->category, 'description' => $request->description, 'title' => $request->description ]);
     		$project->designations()->attach($request->designations);
     		return ['status' => 'ok'];
     }

     public function memberProjectPage()
     {
          return view('member_project');
     }
}

