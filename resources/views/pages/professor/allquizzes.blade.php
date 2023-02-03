@extends('layoutsProfessor.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.quizzes management')}}</h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
		

		
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
<div class="sidebar_top_search">
							<form action="{{route('search_quiz')}}" class="sidebar_top_search_form" method="POST">
								@csrf
								<input type="text" class="sidebar_top_search_input" placeholder="Search" name="q" id="q">
								<button type="submit" class="sidebar_top_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
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
				<th>{{ __('messeges.quiz name') }}</td>
                <td class="min-width">{{ __('messeges.item name') }}</td>
				<td class="min-width">{{ __('messeges.quiz icon') }}</td>
				<td>{{__('messeges.operation')}}</td>
				<td><a href="{{route('quiz.create')}}" class="btn btn-primary"><i class="md-icon">add</i> {{__('messeges.add quiz')}}</a>
				
			</tr>
		</thead>
		
		<tbody>
			@foreach($allquizzes as $quiz)
				<tr>
					<td class="min-width">{{$quiz->id}}</td>
					<td>{{$quiz->name}}</td>
                    @if(app()->getLocale() == 'en')
                    <td>{{$quiz->item->name_en}}</td>
                      @else
                      <td>{{$quiz->item->name_ar}}</td>
                     @endif
                    
					<td class="min-width"><img src="{{asset('images/quizzes/'.$quiz->icon)}}"></td>
            
					<td>
						<!--<a href="#" class="btn btn-primary"><i class="md-icon">remove_red_eye</i> {{__('messeges.category items')}}</a>
-->                  <a href="{{route('quiz.edit',['item_id'=>$quiz->item_id,$quiz->id])}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
						<a href="{{route('quiz.deleted',['item_id'=>$quiz->item_id,$quiz->id])}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
						<a href="{{route('question.show',['item_id'=>$quiz->item_id,$quiz->id])}}" class="btn btn-primary"><i class="md-icon">visibility</i> {{__('messeges.show questions')}}</a>
						
					</td>
				</tr>
			@endforeach
				</tbody>
	</table>
</div><!-- /.admin-box -->
</div>
</div>
@endsection