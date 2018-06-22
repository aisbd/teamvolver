 <div class="row login">
     
 <div class="col-md-12 login-head" >
            <h5 class="card-title text-center mt-4 text-uppercase">
                @lang('app.login')
            </h5>
    </div>
<div class="col-md-12" id="login">

    <div class="text-center">
        <img src="{{ url('assets/img/logo.png') }}" alt="{{ settings('app_name') }}" height="100">
    </div>  

    <div class="card mt-5">
        <div class="card-body">


            <div class="p-4">
                {{-- @include('auth.social.buttons') --}}

                @include('partials.messages')

                <form role="form" action="<?= url('login') ?>" method="POST" id="login-form" autocomplete="off" class="mt-3">

                    <input type="hidden" value="<?= csrf_token() ?>" name="_token">

                    @if (Input::has('to'))
                        <input type="hidden" value="{{ Input::get('to') }}" name="to">
                    @endif

                    <div class="form-group">
                        <label for="username" class="sr-only">@lang('app.email_or_username')</label>
                        <input type="text"
                                name="username"
                                id="username"
                                class="form-control"
                                placeholder="@lang('app.email_or_username')">
                    </div>

                    <div class="form-group password-field">
                        <label for="password" class="sr-only">@lang('app.password')</label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control"
                               placeholder="@lang('app.password')">
                    </div>


                    @if (settings('remember_me'))
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" value="1"/>
                            <label class="custom-control-label font-weight-normal" for="remember">
                                @lang('app.remember_me')
                            </label>
                        </div>
                    @endif


                    <div class="form-group mt-4" style="text-align:center">
                        <button type="submit" style="max-width:300px; margin:auto" class="btn btn-primary btn-lg btn-block" id="btn-login">
                            @lang('app.log_in')
                        </button>
                    </div>
                </form>

                @if (settings('forgot_password'))
                    <a href="<?= url('password/remind') ?>" class="forgot">@lang('app.i_forgot_my_password')</a>
                @endif

            </div>
        </div>
    </div>

    <div class="text-center text-muted">
        @if (settings('reg_enabled'))
            @lang('app.dont_have_an_account') <a class="font-weight-bold" href="<?= url("register") ?>">Sign Up</a>
        @endif
    </div>

</div>

 </div>
@section('scripts')
    {!! HTML::script('assets/js/as/login.js') !!}
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop 
