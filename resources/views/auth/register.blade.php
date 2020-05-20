@extends('layouts.app')

@section('content')
    <div class="container-fluid contact_us_bg_img">
        <div class="container">
            <div class="row">
                <a href="#" class="fh5co_con_123"><i class="fa fa-sign-in"></i></a>
                <a href="#" class="fh5co_con pt-2">{{ __('Register') }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3">
        <div class="container" data-animate-effect="fadeIn">
            <div class="row pb-4">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-12 pt-2">
                            <h1 class="h3 mb-3 font-weight-normal">{{ __('Register') }}</h1>
                        </div>
                        <div class="col-12 py-3">
                            <input id="name" type="text" placeholder="{{ __('Name') }}"
                                   class="form-control fh5co_contact_text_box @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                            <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}"
                                   class="form-control fh5co_contact_text_box @error('password') is-invalid @enderror"
                                   name="password_confirmation" required autocomplete="new-password">

                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-12 py-3 text-center">
                            <button type="submit" class="btn btn-lg contact_btn">
                                {{ __('Register') }}
                            </button>
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
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
