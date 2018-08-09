<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vanguard\Designation;
class DesignationsController extends Controller
{
    public function index()
    {
    	   	return Designation::select('id', 'name')->get();
    }
}
