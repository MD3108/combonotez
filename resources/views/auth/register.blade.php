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
                    <a href="{{ url('/') }}" class="btn-close --close " aria-label="Close" >
                        <svg class="icon icon-close --light">
                            <use xlink:href="#icon-close"></use>
                        </svg>
                    </a>
                </div>
                <h1 class="title --h3">
                    {{ __('Register') }}
                </h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="form-group">
                            <label for="name"  class="fg__label ">{{ __('Username') }}</label>
                    
                            <div class="fg__input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="email"  class="fg__label ">{{ __('E-Mail Address') }}</label>
                    
                            <div class="fg__input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="password"  class="fg__label ">{{ __('Password') }}</label>
                    
                            <div class="fg__input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="password-confirm"  class="fg__label ">{{ __('Confirm Password') }}</label>
                    
                            <div class="fg__input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    
                        <div class="form-group ">
                            <div class="fg__btns">
                                <small>You have an account? <a class="link" href="{{ route('login') }}">Login here</a> </small>
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
</div>
@endsection

