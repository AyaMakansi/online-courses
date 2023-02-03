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
		<form method="POST" action="{{ route('categories.update',$category->id) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update category') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.category english name')}}</label>
					<input id="name_en" type="text" class="form-control" name="name_en" value="{{$category->name_en}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.category arabic name')}}</label>
					<input id="name_ar" type="text" class="form-control" name="name_ar" value="{{$category->name_ar}}">
				</div><!-- /.form-group -->
                
				<div class="form-group">
					<label>{{__('messeges.category image')}}</label>
					<input id="image" type="file" class="form-control" name="image" >
				</div><!-- /.form-group -->

                <div class="form-group">
					<label>{{__('messeges.category icon')}}</label>
					<input id="icon" type="file" class="form-control" name="icon" >
				</div><!-- /.form-group -->
             
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update category') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection