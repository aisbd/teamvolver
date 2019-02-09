@extends('layouts.app')

@section('page-title', trans('app.dashboard'))
@section('page-heading', trans('app.dashboard'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('app.dashboard')
    </li>
@stop

@section('content')

<div id="app">
    <h3>Application Submissions</h3>
    <hr>
    <table class="table table-hover">
        <th>Applicant Name</th>
        <th>Project</th>
        <th>Role</th>
        <th>Message</th>
        <th>Action</th>
        @foreach($applications as $application)
        <tr>
            <td>
               {{$application->applicant->name}}
            </td>
            <td>
               {{$application->project->title}}
            </td>
            <td>
               {{$application->designation->name}}
            </td>
            <td>
               {{$application->message}}
            </td>
            <td>

                <form style="display: none;" id="approve_{{$application->id}}" method="POST" action="{{url('application-submissions/'.$application->id)}}">
                   
                     @method('PUT')
                    <input type="hidden" name="status" value="{{\Vanguard\ApplicationSubmission::APPROVED}}">
                </form>
                <form style="display: none;" id="reject_{{$application->id}}" method="POST" action="{{url('application-submissions/'.$application->id)}}">
                     @method('PUT')
                    <input type="hidden" name="status" value="{{\Vanguard\ApplicationSubmission::REJECTED}}">
                </form>
                <a onclick="document.getElementById('approve_{{$application->id}}').submit()"  class="btn btn-success">Approve</a>
                <a onclick="document.getElementById('reject_{{$application->id}}').submit()"  class="btn btn-danger">Reject</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@stop

@section('scripts')

    {{-- {!! HTML::script('assets/js/chart.min.js') !!} --}}
    {{-- {!! HTML::script('assets/js/as/dashboard-default.js') !!} --}}
@stop