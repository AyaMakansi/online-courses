@extends('layoutsAdmin.master')
@section('content')
<div class="container push-top-bottom">
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
	<div class="box">
		<form method="POST" action="{{ route('setting.update',$user->id) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update user') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.user name')}}</label>
					<input id="first_name" type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label>{{__('messeges.user name')}}</label>
					<input id="last_name" type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
				</div><!-- /.form-group -->

                <div class="form-group">
				<label>{{__('messeges.user role')}}</label>
				<select name="type" id="type" class="form-control" value="{{$user->type}}">
				<option hidden>{{$user->type}}</option>
                  <option name="type" value="Professor">Professor</option>
                  <option name="type" value="Student">Student</option>
    
                   </select>
					</div><!-- /.form-group -->
                
				<div class="form-group">
					<label>{{__('messeges.user image')}}</label>
					<input id="image" type="file" class="form-control" name="image" >
				</div><!-- /.form-group -->

				<div class="form-group">
					<label>{{__('messeges.user name')}}</label>
					<input id="email" type="text" class="form-control" name="email" value="{{$user->email}}">
				</div><!-- /.form-group -->

                
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update user') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection