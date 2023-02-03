@extends('layoutsProfessor.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.questions management')}}</h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
		

		
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->

<div class="admin-box no-padding">
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
			<tr>
				<td class="min-width">#</td>
				
                <td>{{ __('messeges.question') }}</td>
				<td>{{ __('messeges.quiz name') }}</td>
				<td>{{__('messeges.operation')}}</td>
				
				<td><a href="{{route('question.create',$quiz->id)}}" class="btn btn-primary"><i class="md-icon">add</i> {{__('messeges.add question')}}</a>
				
				
			</tr>
		</thead>
		
		<tbody>
			@foreach($questions as $question)
				<tr>
					<td class="min-width">{{$question->id}}</td>
					<td>{{$question->question}}</td>
					<td>{{$question->quiz->name}}</td>
					
					<td>
					@if($question->quiz_id)
					<a href="{{route('question.edit',['quiz_id'=>$question->quiz_id,$question->id])}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
					<a href="{{route('question.deleted',['quiz_id'=>$question->quiz_id,$question->id])}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
					
					@endif
						<!--<a href="#" class="btn btn-primary"><i class="md-icon">remove_red_eye</i> {{__('messeges.category items')}}</a>
-->                 
					</td>
				</tr>
			@endforeach
				</tbody>
	</table>
</div><!-- /.admin-box -->
</div>
</div>
@endsection