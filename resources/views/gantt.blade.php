@extends('layouts.app')

@section('page-title', "Gantt")
@section('page-heading', "Gantt")

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('app.dashboard')
    </li>
@stop

@section('content')
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
 <br>
<h3>Manage Project Schedule / Gantt</h3> <br>
 
<!-- <div class="row justify-content-between mt-3 mb-4"  >
                <div class="col-lg-3 col-md-4">
                    <div class="form-group ">
                    	<label for="project" class="label-control">Select Project: </label>
                    	<select name="" id="project" class="form-control">
                    		<option value=""></option>
                    	</select>
                    </div>
                </div>
</div> -->

@if(\Auth::user()->projects()->first() == null)
No project found.
@else


<div id="gantt_here" style='width:100%;min-height: 500px'></div>
<script type="text/javascript">
gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";
gantt.init("gantt_here");
gantt.load("/gantt/data");
var dp = new gantt.dataProcessor("/gantt");
dp.init(gantt);
dp.setTransactionMode("REST");
</script>


@endif

@stop

@section('scripts')

    {{-- {!! HTML::script('assets/js/chart.min.js') !!} --}}
    {{-- {!! HTML::script('assets/js/as/dashboard-default.js') !!} --}}
@stop