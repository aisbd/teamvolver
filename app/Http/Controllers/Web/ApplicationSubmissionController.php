<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Http\Request;
use Vanguard\Http\Controllers\Controller;
use Vanguard\ApplicationSubmission;
use Vanguard\Project;
class ApplicationSubmissionController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = ApplicationSubmission::whereIn('project_id', Project::where('user_id', request()->user()->id )->pluck('id'))->whereNull('status')->get();
        // dd($applications);
        return view('application-submissions')->with(compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new ApplicationSubmission($request->all());
        $application->user_id = \Auth::user()->id;
        $application->save();
        return $application;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $status= request()->status;
        $app = ApplicationSubmission::find($id);
        if($app->authorize()){
            $app->status = $status;
            $app->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
