@extends('layouts.app')

@section('page-title', "Projects")
@section('page-heading', "Projects")

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('app.dashboard')
    </li>
@stop

@section('content')

 <br>
<h3>Available Projects</h3> <br>



@stop

@section('scripts')

    {{-- {!! HTML::script('assets/js/chart.min.js') !!} --}}
    {{-- {!! HTML::script('assets/js/as/dashboard-default.js') !!} --}}
@stop