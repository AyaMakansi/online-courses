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
		<form method="POST" action="{{ route('quiz.update',['item_id'=>$quiz->item_id,$quiz->id]) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update quiz') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.quiz name')}}</label>
					<input id="name" type="text" class="form-control" name="name" value="{{$quiz->name}}">
				</div><!-- /.form-group -->
                 <!--  <div class="form-group">
					<label for="item_id" class="form-label">{{__('messeges.item name')}}</label>
					
                        <select class="form-control" name="item_id" id="item_id">
                            <option hidden>@if(app()->getLocale() == 'en')
							{{$quiz->item->name_en}}
                              @else
							  {{$quiz->item->name_ar}}
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
</div> /.form-group -->

				<div class="form-group">
					<label>{{__('messeges.quiz icon')}}</label>
					<input id="icon" type="file" class="form-control" name="icon" >
				</div><!-- /.form-group -->
				
                
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update quiz') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection