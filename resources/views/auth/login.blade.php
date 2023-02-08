@extends('layouts.app')

@section('content')
<div class="main">
    <div class="container2">
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus>

                                    @error('email')
                                    <span class="invalid-feedback"
                                        role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password"
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        required
                                        autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback"
                                        role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            name="remember"
                                            id="remember"
                                            {{
                                            old('remember')
                                            ? 'checked'
                                            : ''
                                            }}>

                                        <label class="form-check-label"
                                            for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit"
                                        class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="cont-login">
            <div class="login100-pic js-tilt"
                data-tilt>
                <img src="{{ asset('img/img-01.png') }}"
                    alt="IMG">
            </div>

            <form class="login100-form validate-form"
                method="POST"
                action="{{ route('login') }}">
                @csrf
                <span class="form-title">
                    Administrator Login
                </span>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                        type="text"
                        name="email"
                        placeholder="{{ __('Email Address') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus>
                    @error('email')
                    <span class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope"
                            aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                        type="password"
                        name="password"
                        placeholder="{{ __('Password') }}"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"
                            aria-hidden="true"></i>
                    </span>
                </div>


                <div class="text-center p-t-12">
                    <input class="form-check-input check"
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{
                        old('remember')
                        ? 'checked'
                        : ''
                        }}>

                    <label class="form-check-label"
                        for="remember"
                        id="txt-remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>



                {{-- <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit"
                            class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div> --}}
                <div class="text-center p-t-12">
                    {{-- <span class="txt1">
                        Forgot
                    </span> --}}
                    @if (Route::has('password.request'))
                    <a class="txt2"
                        href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                    @endif
                </div>

                {{-- <div class="container-login100-form-btn">
                    <input type="submit"
                        value="LOGIN"
                        class="login100-form-btn">
                </div>

                @if (Route::has('password.request'))
                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2"
                        href="{{ route('password.request') }}">
                        Password?
                    </a>
                </div>
                @endif --}}


            </form>
        </div>
    </div>
</div>
@endsection