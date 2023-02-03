@extends('layoutsAdmin.master')
@section('content')

<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.users management')}}</h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
		

		
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
                   <div class="sidebar_top_search">
							<form action="{{route('search')}}" class="sidebar_top_search_form" method="POST">
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
		<thead>
			<tr>
				<th>#</th>
				<th>{{ __('messeges.user image') }}</th>
				<th>{{ __('messeges.user name') }}</th>
				<th>{{ __('messeges.user email') }}</th>
				<th>{{ __('messeges.user role') }}</th>
				<th>{{ __('messeges.date signup')}}</th>
				<th></th>
			</tr>
		</thead>
		@foreach($allusers as $user)
		<tbody>
       
				<tr>
					<td class="min-width">{{$user->id}}</td>
					
					<td class="min-width">
						
					<div class="user-avatar">
							<img src="{{asset('images/users/'.$user->image)}}">
							<span class="user-avatar-status"></span>
						</div>
						</td>
					<td>{{$user->first_name}} {{$user->last_name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->type}}</td>
					<td>{{$user->created_at}}</td>	
					<td class="min-width">
						<a href="{{route('user.edit',$user->id)}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
						<a href="{{route('user.deleted',$user->id)}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
					</td>			
				</tr>
			
				
		</tbody>
		@endforeach
	</table><!-- /.table -->
</div><!-- /.admin-box -->

</div>
</div>

@endsection