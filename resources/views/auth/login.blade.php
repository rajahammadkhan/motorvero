@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow rounded-3 p-4 mt-5">

                <div class="card-header bg-white border-0">
{{--                    <div class="text-center">--}}
{{--                        <img width="150px" src="{{asset('management/images/logo.webp')}}" alt="">--}}

{{--                    </div>--}}

                <h3>
                    {{ __('Login') }}
                </h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
{{--                            <label for="email" class="col-md-12 ">{{ __('Email Address') }}</label>--}}

                            <div class="col-md-12">
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
{{--                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>--}}

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-check p-0">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn bg-dark text-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
