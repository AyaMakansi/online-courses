@extends('layoutsProfessor.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.lessons management')}}</h1>

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
				
                <td>{{ __('messeges.video name') }}</td>
				<td>{{ __('messeges.course name') }}</td>
				<td>{{__('messeges.operation')}}</td>
				
				<td><a href="{{route('video.create',$course->id)}}" class="btn btn-primary"><i class="md-icon">add</i> {{__('messeges.add video')}}</a>
				
				
			</tr>
		</thead>
		
		<tbody>
			@foreach($videos as $video)
				<tr>
					<td class="min-width">{{$video->id}}</td>
					@if(app()->getLocale() == 'en')
                    <td>{{$video->name_en}}</td>
                      @else
                      <td>{{$video->name_ar}}</td>
                     @endif
                     
					<td>{{$video->course->name}}</td>
								 
					</td>
                    <td>
                    @if($video->course_id)
					<a href="{{route('video.edit',['course_id'=>$video->course_id,$video->id])}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
					<a href="{{route('video.deleted',['course_id'=>$video->course_id,$video->id])}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
					
					@endif
                    </td>
				</tr>
			@endforeach
				</tbody>
	</table>
	
</div><!-- /.admin-box -->
</div>
</div>
@endsection