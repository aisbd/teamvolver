@extends('layouts.auth')

@section('page-title', trans('app.sign_up'))

@if (settings('registration.captcha.enabled'))
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endif

@section('content')

    <div class="col-md-8 col-lg-6 col-xl-5 mx-auto my-10p">
        <div class="text-center">
            <img src="{{ url('assets/img/vanguard-logo.png') }}" alt="{{ settings('app_name') }}" height="50">
        </div>

        @include('partials/messages')

        <div class="card mt-5">
            <div class="card-body">
                <h5 class="card-title text-center mt-4 text-uppercase">
                    @lang('app.register')
                </h5>

                <div class="p-4">
                    @include('auth.social.buttons')

                    <form role="form" action="<?= url('register') ?>" method="post" id="registration-form" autocomplete="off" class="mt-3">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="@lang('app.email')" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="@lang('app.username')"  value="{{ old('username') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="@lang('app.password')">
                        </div>
                         <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="@lang('app.confirm_password')">
                        </div>

                        @if (settings('tos'))
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="tos" id="tos" value="1"/>
                                <label class="custom-control-label font-weight-normal" for="tos">
                                    @lang('app.i_accept')
                                    <a href="#tos-modal" data-toggle="modal">@lang('app.terms_of_service')</a>
                                </label>
                            </div>
                        @endif

                        {{-- Only display captcha if it is enabled --}}
                        @if (settings('registration.captcha.enabled'))
                            <div class="form-group my-4">
                                {!! app('captcha')->display() !!}
                            </div>
                        @endif
                        {{-- end captcha --}}

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-login">
                                @lang('app.register')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="text-center text-muted">
            @if (settings('reg_enabled'))
                @lang('app.already_have_an_account')
                <a class="font-weight-bold" href="<?= url("login") ?>">@lang('app.login')</a>
            @endif
        </div>

    </div>

    @if (settings('tos'))
        <div class="modal fade" id="tos-modal" tabindex="-1" role="dialog" aria-labelledby="tos-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tos-label">@lang('app.terms_of_service')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>1. Terms</h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec quis lacus porttitor, dignissim nibh sit amet, fermentum felis.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; In ultricies consectetur viverra. Nullam velit neque,
                            placerat condimentum tempus tincidunt, placerat eu lectus. Nam molestie
                            porta purus, et pretium risus vehicula in. Cras sem ipsum, varius sagittis
                            rhoncus nec, dictum maximus diam. Duis ac laoreet est. In turpis velit, placerat
                            eget nisi vitae, dignissim tristique nisl. Curabitur sollicitudin, nunc ut
                            viverra interdum, lacus...
                        </p>

                        <h4>2. Use License</h4>

                        <ol type="a">
                            <li>
                                Aenean vehicula erat eu nisi scelerisque, a mattis purus blandit. Curabitur congue
                                ollis nisl malesuada egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit:
                            </li>
                        </ol>

                        <p>...</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('app.close')</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop

@section('scripts')
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Auth\RegisterRequest', '#registration-form') !!}
@stop