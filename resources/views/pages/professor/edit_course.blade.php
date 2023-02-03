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
		<form method="POST" action="{{ route('course.update',$course->id) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update course') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.course name')}}</label>
					<input id="name" type="text" class="form-control" name="name" value="{{$course->name}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label for="item_id" class="form-label">{{__('messeges.item name')}}</label>
					
                        <select class="form-control" name="item_id" id="item_id">
                            <option hidden>@if(app()->getLocale() == 'en')
							{{$course->item->name_en}}
                              @else
							  {{$course->item->name_ar}}
                             @endif</option>
                            @foreach ($items as $item)
                            <option value="{{ $item->id }}">
							@if(app()->getLocale() == 'en')
                                  {{ $item->name_en }}
                              @else
                                {{ $item->name_ar }}
                             @endif
					             </option>
                            @endforeach
                        </select>
</div><!-- /.form-group -->

				<div class="form-group">
					<label>{{__('messeges.course image')}}</label>
					<input id="image" type="file" class="form-control" name="image" >
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('messeges.course number')}}</label>
					<input id="number" type="integer" class="form-control" name="number" value="{{$course->number}}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.course time')}}</label>
					<input id="time" type="time" class="form-control" name="time" value="{{$course->time}}">
				</div><!-- /.form-group -->
                
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update course') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection