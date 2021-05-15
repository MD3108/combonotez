@extends('layouts.no-head-foot-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card --login">
                <div class="card__header">
                    <div class="header__logo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name') }}
                        </a>
                        <a class="logo-letters  {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="d-block logo-letters__part --combo">
                                        Combo
                                    </span>
                                    <span class="d-block logo-letters__part --note">
                                        Note
                                    </span>
                                </div>
                                <span class=" logo-letters__part --Z">
                                    Z
                                </span>
                            </div>
                        </a>
                    </div>
                    <a href="{{ url()->previous() }}" class="btn-close --close " aria-label="Close" >
                        <svg class="icon icon-close --light">
                            <use xlink:href="#icon-close"></use>
                        </svg>
                    </a>
                </div>
                <h1 class="title --h3">
                    {{ __('Sign in') }}
                </h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="fg__label ">{{ __('E-Mail Address') }}</label>

                            <div class="fg__input">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="fg__label ">{{ __('Password') }}</label>

                            <div class="fg__input">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="fg__plus">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="fg__btns">
                                <button type="submit" class="btn btn-primary">
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
