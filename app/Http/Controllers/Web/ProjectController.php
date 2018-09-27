<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vanguard\Project;
use Vanguard\Designation;

class ProjectController extends Controller
{
     public function index(){
          if(\Auth::guest()){
               return Designation::take(7)->select('id', 'name')->get();
          }
          if( !\Auth::guest() && request()->user()->type == 'member'){
               return $this->memberProjectPage();
          }

     	$designations = request()->user()->projects()->first()->designations()->select('id', 'name')->get();
     	return $designations;
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

