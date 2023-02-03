@extends('layoutsAdmin.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.categories management')}}</h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
		

		
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
                   <div class="sidebar_top_search">
							<form action="{{route('search_category')}}" class="sidebar_top_search_form" method="POST">
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
				<th>{{ __('messeges.category name') }}</th>
				<th class="min-width">{{ __('messeges.category image') }}</th>
				<th class="min-width">{{ __('messeges.category icon') }}</th>
				
				<th>{{__('messeges.operation')}}</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($allcategories as $category)
				<tr>
					<td class="min-width">{{$category->id}}</td>
					@if(app()->getLocale() == 'en')
					<td class="min-width">{{$category->name_en}}</td>
                            @else
					        <td class="min-width">{{$category->name_ar}}</td>
                            @endif
					<td class="min-width"><img src="{{asset('images/categories/'.$category->image)}}" alt="Cozzy Coffee Shop"></td>
					<td class="min-width"><img src="{{asset('images/categories/'.$category->icon)}}" alt="Cozzy Coffee Shop"></td>
					<td>
						<a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary"><i class="md-icon">edit</i> {{__('messeges.update')}}</a>
						<a href="{{route('categories.delete',$category->id)}}" class="btn btn-secondary"><i class="md-icon">delete</i> {{__('messeges.delete')}}</a>
					</td>
				</tr>
			@endforeach
				</tbody>
	</table>
</div><!-- /.admin-box -->
</div>
</div>
@endsection