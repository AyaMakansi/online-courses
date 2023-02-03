@extends('layoutsProfessor.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.courses management')}}</h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
		

		
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
<div class="sidebar_top_search">
							<form action="{{route('search_course')}}" class="sidebar_top_search_form" method="POST">
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
				<th class="min-width">#</th>
				<th>{{ __('messeges.course name') }}</th>
                <th class="min-width">{{ __('messeges.item name') }}</th>
				<th class="min-width">{{ __('messeges.course image') }}</th>
				<th class="min-width">{{ __('messeges.course number') }}</th>
				<th class="min-width">{{ __('messeges.course time') }}</th>
				<th>{{__('messeges.operation')}}</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($allcourses as $course)
				<tr>
					<td class="min-width">{{$course->id}}</td>
					<td>{{$course->name}}</td>
                    @if(app()->getLocale() == 'en')
                    <td>{{$course->item->name_en}}</td>
                      @else
                      <td>{{$course->item->name_ar}}</td>
                     @endif
                    
					<td class="min-width"><img src="{{asset('images/courses/'.$course->image)}}"></td>
                   <td>{{$course->number}}</td>
                    <td>{{$course->time}}</td>
					<td>
						<!--<a href="#" class="btn btn-primary"><i class="md-icon">remove_red_eye</i> {{__('messeges.category items')}}</a>
-->                  <a href="{{route('course.edit',$course->id)}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
						<a href="{{route('course.deleted',$course->id)}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
						<a href="{{route('video.show',$course->id)}}" class="btn btn-primary"><i class="md-icon">visibility</i> {{__('messeges.show lessons')}}</a>
					
					</td>
				</tr>
			@endforeach
				</tbody>
	</table>
</div><!-- /.admin-box -->
</div>
</div>
@endsection