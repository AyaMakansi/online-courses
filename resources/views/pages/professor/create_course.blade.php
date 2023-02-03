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
		<form method="POST" action="{{ route('course.add') }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.add course') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.course name')}}</label>
					<input id="name" type="text" class="form-control" name="name" placeholder="{{ __('messeges.enter course name') }}">
				</div><!-- /.form-group -->
                
                
				<div class="form-group">
					<label>{{__('messeges.course image')}}</label>
					<input id="image" type="file" class="form-control" name="image" >
				</div><!-- /.form-group -->

				<div class="form-group">
				<label for="item_id" class="form-label">{{__('messeges.item name')}}</label>
                        <select class="form-control" name="item_id" id="item_id">
                            <option hidden>{{__('messeges.Choose Category')}}</option>
                            @foreach ($item as $items)
                            <option value="{{ $items->id }}">
							@if(app()->getLocale() == 'en')
                                  {{ $items->name_en }}
                              @else
                                {{ $items->name_ar }}
                             @endif
					             </option>
                            @endforeach
                        </select>

				</div>
				<div class="form-group">
					<label>{{__('messeges.course number')}}</label>
					<input id="number" type="integer" class="form-control" name="number" placeholder="{{ __('messeges.enter number course') }}">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('messeges.course time')}}</label>
					<input id="time" type="time" class="form-control" name="time" placeholder="{{ __('messeges.enter time course') }}">
				</div><!-- /.form-group -->
               
             
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.add course') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection