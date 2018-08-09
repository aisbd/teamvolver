<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;
use Vanguard\Project;
use Illuminate\Http\Request;

class GanttController extends Controller
{
    public function index()
    {
    	return view('gantt');
    }

    public function data()
    {
        $tasks = new \Vanguard\Task();
        $links = new \Vanguard\Link();
 
        return response()->json([
            "data" => $tasks->all(),
            "links" => $links->all()
        ]);
    }
}
