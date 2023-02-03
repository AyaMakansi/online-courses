@extends('layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
@endsection
@section('content')
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about1.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">About</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>About us</li>
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
										<option disabled selected>level</option>
											<option>Beginner level </option>
											<option>Average level</option>
											<option>advanced level</option>
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
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
           
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">{{__('messeges.What Is E-Learning?')}}</div>
						<div class="section_subtitle">{{__('messeges.Learn from anywhere and anytime')}}</div>
						<div class="about_text">
							<p>{{__('messeges.E-learning specification')}}</p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="images/about2.jpg" alt=""></div>
				</div>
			</div>
			<div class="row milestones_row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/play.png')}}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="100">0</div>
							<div class="milestone_text">{{__('messeges.courses')}}</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/teacher.png')}}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="20">0</div>
							<div class="milestone_text">{{__('messeges.professor')}}</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/clock.png')}}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="30">0</div>
							<div class="milestone_text">{{__('messeges.hour')}}</div>
						</div>
						
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/graduation-cap.png')}}" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="25">0</div>
							<div class="milestone_text">{{__('messeges.students')}}</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Realtors -->
    
	<div class="realtors">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">{{__('messeges.professors')}}</div>
					<div class="section_subtitle"></div>
				</div>
			</div>
			<div class="row realtors_row">
			
				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="#" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title"></div>
								<div class="realtor_subtitle"></div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
           
				<!-- Realtor 
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_2.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Christian Smith</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				 Realtor
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_3.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Steve G. Brown</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				Realtor
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_4.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Jessica Walsh</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
-->
			</div>
		</div>
	</div>
    @endsection
	@section('scripts')
	<script src="{{asset('js/about.js')}}"></script>
	@endsection