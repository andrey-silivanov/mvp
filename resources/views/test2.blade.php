@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        {{ Breadcrumbs::render('login') }}
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Login Section Start -->
    <div class="section section-margin section-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">{{ __('auth.login.title') }}</h2>
                            <p class="desc-content">{{ __('auth.login.form_subtitle') }}</p>
                        </div>
                        <!-- Login Title & Content End -->

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Form Action Start -->
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <!-- Input Email Start -->
                            <div class="single-input-item mb-3 @if($errors->has('username')) form-error @endif">
                                <input type="text" id="username" name="username" value="{{ old('username') }}" onkeyup="validationUserName()"
                                       placeholder="{{ __('auth.phone_or_email') }}">
                                <span class="error-message" id="message"></span>
                                @if($errors->has('username'))
                                    <span class="error-message">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3 @if($errors->has('password')) form-error @endif">
                                <input type="password" name="password" placeholder="{{ __('auth.password') }}">
                                @if($errors->has('password'))
                                    <span class="error-message">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">{{ __('auth.remember_me') }}</label>
                                        </div>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="forget-pwd mb-3">{{ __('auth.forget_password') }}</a>
                                </div>
                            </div>
                            <!-- Checkbox/Forget Password End -->

                            <!-- Login Button Start -->
                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">{{ __('auth.login.form_button') }}</button>
                            </div>
                            <!-- Login Button End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="{{ route('register') }}">{{ __('auth.register.form_button') }}</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
@endsection
@section('scripts')

    <script type="text/javascript">

        function ValidMail(value) {
            let re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;

            return re.test(value);

        }

        function ValidPhone(value) {
            let re = /^\+380\d{3}\d{2}\d{2}\d{2}$|^80\d{3}\d{2}\d{2}\d{2}$|^0\d{3}\d{2}\d{2}\d{2}$/;

            return re.test(value);

        }

        function validationUserName()
        {
            let value = document.getElementById('username').value;

            let message = document.getElementById('message')
            let output = '';
            message.parentElement.classList.remove('form-error');

            if (!ValidMail(value) && !ValidPhone(value)) {
                output = 'Адрес эл. почты или телефон введен неправильно!';
                message.parentElement.classList.add('form-error');
            }

            message.innerHTML = output;
        }

    </script>
@endsection
