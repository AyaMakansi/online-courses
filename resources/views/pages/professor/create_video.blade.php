@extends('layoutsProfessor.master')
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
		
	      
		<form method="POST" action="{{ route('video.add',$course->id) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.add video') }}</legend>		
               <input id="course_id" type="text" class="form-control" name="course_id"value="{{$course->id}}" style="visibility: hidden;">
				<div class="form-group">
					<label>{{__('messeges.lesson english name')}}</label>
					<input id="name_en" type="text" class="form-control" name="name_en" placeholder="{{ __('messeges.enter lesson english name') }}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson arabic name')}}</label>
					<input id="name_ar" type="text" class="form-control" name="name_ar" placeholder="{{ __('messeges.enter lesson arabic name') }}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson video')}}</label>
                    <input id="video" type="file" class="form-control" name="video" placeholder="{{ __('messeges.video') }}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson english description')}}</label>
					<input id="description_en" type="text" class="form-control" name="description_en" placeholder="{{ __('messeges.enter lesson english description') }}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson arabic description')}}</label>
					<input id="description_ar" type="text" class="form-control" name="description_ar" placeholder="{{ __('messeges.enter lesson arabic description') }}">
				</div><!-- /.form-group -->
				
                 	<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.add video') }}</button>
			</div><!-- /.center -->
		</form>
	
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection