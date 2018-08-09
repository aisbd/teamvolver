<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;
use Vanguard\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
    	return Category::select('id', 'name')->get();
    }
}
