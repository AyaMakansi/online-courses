@extends('layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties_responsive.css')}}">
@endsection
@section('content')


<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/course.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">{{__('messeges.the courses')}}</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">{{__('messeges.home')}}</a></li>
									<li>{{__('messeges.the courses')}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search 
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select">
											<option disabled selected>For rent</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>All types</option>
											<option>Type 1</option>
											<option>Type 2</option>
											<option>Type 3</option>
											<option>Type 4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>City</option>
											<option>New York</option>
											<option>Paris</option>
											<option>Amsterdam</option>
											<option>Rome</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	<!-- Properties -->

	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">{{__('messeges.the courses')}}</div>
					<!--<div class="section_subtitle">Search your dream home</div> -->
				</div>
			</div>
			<div class="row properties_row">
			@foreach($courses as $courses)
				<!-- Property -->
				
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
						
							<img src="{{asset('images'.$courses->image)}}" alt="">
							
						</div>
						<div class="property_body text-center">
						<div class="property_location"></div>
							<div class="property_title"><a href="{{route('getlessons',$courses->id)}}">{{$courses->name}}</a></div>
							
							<div class="property_price">{{$courses->item->name}}</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{asset('images/graduation-cap.png')}}" alt=""></div><span>{{$courses->professor->name}}</span></div>
							<div><div class="property_icon"><img src="{{asset('images/play.png')}}" alt=""></div><span>{{$courses->number}} {{__('messeges.courses')}}</span></div>
							<div><div class="property_icon"><img src="{{asset('images/clock.png')}}" alt=""></div><span>{{$courses->time}}</span></div>
						</div>
					</div>
				</div>
            @endforeach
</div>
</div>
</div>
    @endsection
	@section('scripts')
	<script src="{{asset('js/properties.js')}}"></script>
	<script src="{{asset('js/about.js')}}"></script>
	@endsection