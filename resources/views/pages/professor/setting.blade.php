@extends('layoutsProfessor.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.settings')}} </h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
<table class="table small-header">
		<thead>
		@if(Session::has('success'))
     <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
     </div>
     
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
      {{Session::get('error')}}
     </div>
    @endif
<div class="admin-box">
	<fieldset>
		<legend>{{__('messeges.personal information')}}</legend>
		<form action="{{ route('setting.update',$user->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
				    <label>{{__('messeges.first name')}}</label>
				    <input id="first_name" type="text" class="form-control" name="first_name" value="{{$user->first_name}}">			
				</div><!-- /.form-group -->
			</div><!-- /.col-* -->


			<div class="col-sm-4">
				<div class="form-group">
				    <label>{{__('messeges.last name')}}</label>
				    <input id="last_name" type="text" class="form-control" name="last_name" value="{{$user->last_name}}">			
				</div><!-- /.form-group -->	
			</div><!-- /.col-* -->
		
		<div class="col-sm-4">
				<div class="form-group">
				    <label>{{__('messeges.E-mail')}}</label>
				    <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">			
				</div><!-- /.form-group -->	
			</div><!-- /.col-* -->
			<button type="submit" class="btn btn-primary text-center">{{__('messeges.saving changes')}}</button>

		</div><!-- /.row -->
		</form>
	</fieldset>

	<fieldset>
	<legend>{{__('messeges.change password')}}</legend>

	<form class="form" action="{{ route('postChangePassword') }}" method="post">
                @csrf
		
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
				    <label for="current_password">{{__('messeges.current password')}}</label>
				    <input type="password" id="current_password" name="current_password" class="form-control">			
				</div><!-- /.form-group -->
			</div><!-- /.col-* -->

			<div class="col-sm-4">
				<div class="form-group">
				    <label for="new_password">{{__('messeges.new password')}}</label>
				    <input type="password" class="form-control" id="new_password" name="new_password">			
				</div><!-- /.form-group -->	
			</div><!-- /.col-* -->

			<div class="col-sm-4">
				<div class="form-group">
				<label for="new_password_confirmation" class="form-label">{{__('messeges.confirm new password')}}</label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">			
				</div><!-- /.form-group -->	
			</div><!-- /.col-* -->
		</div><!-- /.row -->
		<button type="submit" class="btn btn-primary text-center">{{__('messeges.saving changes')}}</button>
	</form>		
	</fieldset>
			
	<div class="form-group">
		<div class="checkbox">	
			<label><input type="checkbox"> Enable admin approval before publishing</label>	
		</div><!-- /.checkbox -->
	</div><!-- /.form-group -->

	<div class="form-group">
		<div class="checkbox">		
			<label><input type="checkbox" checked="checked"> Enable strong password</label>	
		</div><!-- /.checkbox -->
	</div><!-- /.form-group -->

	<div class="form-group">
		<div class="checkbox">	
			<label><input type="checkbox"> Everyone can registers</label>	
		</div><!-- /.checkbox -->
	</div><!-- /.form-group -->

	<div class="form-group">
		<div class="checkbox">		
			<label><input type="checkbox" checked="checked"> Enable user reviews &amp; ratings </label>	
		</div><!-- /.checkbox -->
	</div><!-- /.form-group -->

	<hr>

	<div class="form-group">
		<div class="radio">
			<label>
				<input type="radio" name="gridRadios" checked="checked">
				Option one is this and that—be sure to include why it's great
			</label>
		</div>

		<div class="radio">
			<label>
				<input type="radio" name="gridRadios">
				Option two can be something else and selecting it will deselect option one
			</label>
		</div>

		<div class="radio	">
			<label>
				<input type="radio" name="gridRadios">
				Option three is disabled
			</label>
		</div>
	</div><!-- /.form-group -->
</div><!-- /.admin-box -->
</div>
</div>
@endsection