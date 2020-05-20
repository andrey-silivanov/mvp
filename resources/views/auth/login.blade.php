@extends('layouts.app')

@section('content')
    <div class="container-fluid contact_us_bg_img">
        <div class="container">
            <div class="row">
                <a href="#" class="fh5co_con_123"><i class="fa fa-sign-in"></i></a>
                <a href="#" class="fh5co_con pt-2">{{ __('Login') }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3">
        <div class="container" data-animate-effect="fadeIn">
            <div class="row pb-4">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col-12 pt-2">
                            <h1 class="h3 mb-3 font-weight-normal">{{ __('Please sign in') }}</h1>
                        </div>
                        <div class="col-12 py-3">
                            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}"
                                   class="form-control fh5co_contact_text_box @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-12 py-3">
                            <input id="password" type="password" placeholder="{{ __('Password') }}"
                                   class="form-control fh5co_contact_text_box @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-12 py-3">
                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 py-3 text-center">
                                <button type="submit" class="btn btn-lg contact_btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-6 py-3 text-center my-auto">
                                @if (Route::has('password.request'))
                                    <a class="fh5co_magna py-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 animate-box">
                    <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="single.html" class="fh5co_mini_time py-3">
                        Thomson Smith -
                        April 18,2016 </a>
                    <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
