@extends('layouts.app')

@section('page-title', trans('app.dashboard'))
@section('page-heading', trans('app.dashboard'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('app.dashboard')
    </li>
@stop

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('profile') }}" class="text-center no-decoration">
                    <div class="icon my-3">
                        <i class="fas fa-user fa-2x"></i>
                    </div>
                    <p class="lead mb-0">@lang('app.update_profile')</p>
                </a>
            </div>
        </div>
    </div>

    @if (config('session.driver') == 'database')
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('profile.sessions') }}" class="text-center  no-decoration">
                        <div class="icon my-3">
                            <i class="fa fa-list fa-2x"></i>
                        </div>
                        <p class="lead mb-0">@lang('app.my_sessions')</p>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('profile.activity') }}" class="text-center no-decoration">
                    <div class="icon my-3">
                        <i class="fas fa-server fa-2x"></i>
                    </div>
                    <p class="lead mb-0">@lang('app.activity_log')</p>
                </a>
            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('auth.logout') }}" class="text-center no-decoration">
                    <div class="icon my-3">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                    </div>
                    <p class="lead mb-0">@lang('app.logout')</p>
                </a>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="panel-heading"></div>
            <div class="card-body">
                <h5 class="card-title">
                    @lang('app.activity') (@lang('app.last_two_weeks'))
                </h5>

                <div class="pt-4 px-3">
                    <canvas id="myChart" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


					<div class="container clearfix">

						<div class="row">

							<div class="col-md-12" style="text-align: left">
						<h3>Form Project and Team Roles</h3>
							
							</div>

						</div>

						<div class="row">

							<div class="col-md-12   steps" style="text-align: left">
								
								<div id="processTabs">
									<ul class="process-steps bottommargin clearfix">
										<li>
											<a href="#ptab1" class="i-circled i-bordered i-alt divcenter"></a>
											<h5>Forming</h5>
										</li>
										<li>
											<a href="#ptab2" class="i-circled i-bordered i-alt divcenter"></a>
											<h5>Team Roles</h5>
										</li>
										<li>
											<a href="#ptab3" class="i-circled i-bordered i-alt divcenter"></a>
											<h5>Preview</h5>
										</li>
									</ul>
									<div>
							
							</div>

						</div>
						<div id="ptab1" class="row">
							<div class="col-md-12" style="padding: 0 80px; padding-bottom: 20px;">
									<h3 class="center">POST IDEA TO FORM A TEAM</h3>
											<form action="">
												<div class="form-group">
													<label for="fullname">Select Category</label>
													<select name="" id="" class="form-control">	
														<option value="">Web Developement</option>
													</select>
												</div>
												<div class="form-group">
													<label for="fullname">Tell us about your idea?</label>
													<textarea class="form-control bordered" name="" id="" cols="30" rows="10" placeholder="Write about your idea here..."></textarea>
												</div>
												<hr>
												<button class="button button-circle primary right">Next</button>
												<div style="float: right;text-align: right; margin-top: 15px !important;"   >
													
													<a style="margin-right: 30px; color:#666;" href="#"><u>Cancel</u></a>
											
												</div>
											</form>
								
							</div>


					<div class="clear"></div>

					</div>

				</div>

		

			</div>

@stop

@section('scripts')
    <script>
        var labels = {!! json_encode(array_keys($activities)) !!};
        var activities = {!! json_encode(array_values($activities)) !!};
        var trans = {
            chartLabel: "{{ trans('app.registration_history')  }}",
            action: "{{ trans('app.action_sm')  }}",
            actions: "{{ trans('app.actions_sm')  }}"
        };
    </script>
    {!! HTML::script('assets/js/chart.min.js') !!}
    {!! HTML::script('assets/js/as/dashboard-default.js') !!}
@stop