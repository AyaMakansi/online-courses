@extends('layouts.app')
@section('content')

<div class="container-login100">
		<div class="row wrap-login100 main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-graduation-cap fa-2x"></span></h2></span>
				<h4 class="company_title">Online Courses</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h3>Log In</h3>
					</div>
					<div class="row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-0">
                          <!--  <label for="email"  class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

                            <div class="col-md-12">
                                <input id="email" class="form__input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

                            <div class="col-md-12" >
                                <input id="password" class="form__input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" class="form__input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br>
                                @if (Route::has('register'))
                                <p class="text-center">Don't have an account?
                                <a class="btn-link" href="{{route('register')}}">signup</a>
                                 </p> 
                                @endif
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
