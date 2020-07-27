@extends('layouts.app')
@section('style')
    @parent
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet" />
@stop

@section('content')
    <div class="container-fluid contact_us_bg_img">
        <div class="container">
            <div class="row">
                <a href="#" class="fh5co_con_123"><i class="fa fa-sign-in"></i></a>
                <a href="#" class="fh5co_con pt-2">{{ __('Create profile') }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" id="app">
        <div class="container" data-animate-effect="fadeIn">
            <div class="row pb-4">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('profile.store') }}">
                        @csrf
                        <div class="col-12 pt-2">
                            <h1 class="h3 mb-3 font-weight-normal">{{ __('ADD MY PROFILE') }}</h1>
                        </div>
                        <div class="col-md-6 py-3">
                            <input id="name" type="text" placeholder="{{ __('Model name') }}"
                                   class="form-control fh5co_contact_text_box @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-8 py-3">
                            <textarea class="fh5co_contacts_message form-control @error('description') is-invalid @enderror"
                                      name="description" placeholder="{{ __('Description')}}"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row row-without-margin">
                            <div class="col-sm-4 py-3">
                                <select id="country" type="text"
                                       class="custom-select fh5co_contact_text_box js-example-basic-single
                                        @error('country') is-invalid @enderror"
                                       name="country" required autofocus>
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4 py-3">
                                <select id="state" type="text"
                                        class="custom-select fh5co_contact_text_box js-example-basic-single
                                        @error('state') is-invalid @enderror"
                                        name="state" required autofocus>
                                </select>
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-sm-4 py-3">
                                <select id="city" type="text"
                                        class="custom-select fh5co_contact_text_box js-example-basic-single
                                        @error('city') is-invalid @enderror"
                                        name="city" required autofocus>
                                </select>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row row-without-margin">
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Weight') }}</label>
                                <x-personal-detail-select select-type="weight"></x-personal-detail-select>
                            </div>
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Height') }}</label>
                                <x-personal-detail-select select-type="height"></x-personal-detail-select>
                            </div>
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Ethnicity') }}</label>
                                <x-personal-detail-select select-type="ethnicity"></x-personal-detail-select>
                            </div>
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Hair color') }}</label>
                                <x-personal-detail-select select-type="hair_color"></x-personal-detail-select>
                            </div>
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Hair length') }}</label>
                                <x-personal-detail-select select-type="hair_length"></x-personal-detail-select>
                            </div>
                            <div class="col-sm-4 py-3">
                                <label for="weight">{{ __('Breast size') }}</label>
                                <x-personal-detail-select select-type="breast_size"></x-personal-detail-select>
                            </div>

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
            </div>
        </div>
    </div>

@endsection
@section('script')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script src="{{ asset('js/location.js') }}"></script>
@endsection