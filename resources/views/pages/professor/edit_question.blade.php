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
		<form method="POST" action="{{ route('question.update',['quiz_id'=>$question->quiz_id,$question->id]) }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.update question') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.question')}}</label>
					<input id="question" type="text" class="form-control" name="question" value="{{$question->question}}">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('a')}}</label>
					<input id="a" type="text" class="form-control" name="a" value="{{$question->a}}">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('b')}}</label>
					<input id="b" type="text" class="form-control" name="b" value="{{$question->b}}">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('c')}}</label>
					<input id="c" type="text" class="form-control" name="c" value="{{$question->c}}">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>{{__('d')}}</label>
					<input id="d" type="text" class="form-control" name="d" value="{{$question->d}}">
				</div><!-- /.form-group -->
				<div class="form-group">
					
					<label for="ans" class="form-label">{{__('messeges.answer')}}</label>
				<select name="ans" id="ans" class="form-control">
				<option hidden>{{$question->ans}}</option>
                  <option name="ans" value="a">a</option>
                  <option name="ans" value="b">b</option>
				  <option name="ans" value="c">c</option>
				  <option name="ans" value="d">d</option>
                   </select>
						</div><!-- /.form-group -->

						
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.update question') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection