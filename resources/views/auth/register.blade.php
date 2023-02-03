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
						<h3>Register</h3>
					</div>
					<div class="row">
						
                    <form method="POST" action="{{ route('register') }}" class="form-group">
                        @csrf

                        <div class="row mb-0">
                         <!--   <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>-->
                         
                         <div class="col-sm-4">
                            <input id="first_name" type="text" class="form__inpuname" name="first_name" placeholder="First name">			
                            @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                        </div>
                         <div class="col-sm-4 offset-md-1">
                            <input id="last_name" type="text" class="form__inpuname" name="last_name" class="form-control @error('last_name') is-invalid @enderror" required placeholder="Last name">			
                         
                            @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                           <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

                            <div class="col-md-12">
                                <input id="email" class="form__input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

                            <div class="col-md-12">
                                <input id="password" class="form__input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                           <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>-->

                            <div class="col-md-12">
                                <input id="password-confirm" class="form__input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row mb-0">
                        <div class="form-check col-md-12">
                        
                    <input type="radio" class="form-check-input @error('type') is-invalid @enderror"
                         name="type" id="typeS" value="Student">
                         <label for="typeS" class="form-check-lable">Student</label>
                       <span class="offset-md-2"></span>
                        <input type="radio" class="form-check-input @error('type') is-invalid @enderror"
                         name="type" id="typeP" value="Professor">
                         <label for="typeP" class="form-check-lable">Professor</label>
                        </div>
                    
                        </div>
                     <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                @if (Route::has('login'))
                                <p class="text-center">Have already an account?
                                <a class="btn-link" href="{{route('login')}}">Login here</a>
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
