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
		<form method="POST" action="{{ route('video.update',['course_id'=>$videos->course_id,$videos->id]) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update lesson') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.lesson english name')}}</label>
					<input id="name_en" type="text" class="form-control" name="name_en" value="{{$videos->name_en}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson arabic name')}}</label>
					<input id="name_ar" type="text" class="form-control" name="name_ar"  value="{{$videos->name_ar}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson video')}}</label>
                    <input id="video" type="file" class="form-control" name="video">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson english description')}}</label>
					<input id="description_en" type="text" class="form-control" name="description_en"  value="{{$videos->description_en}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.lesson arabic description')}}</label>
					<input id="description_ar" type="text" class="form-control" name="description_ar" value="{{$videos->description_ar}}">
				</div><!-- /.form-group -->
				
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update lesson') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection