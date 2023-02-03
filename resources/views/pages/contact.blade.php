@extends('layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('styles/properties1.css')}}">@endsection
@section('content')

<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/elarning1.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">{{__('messeges.contact us')}}</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">{{__('messeges.home')}}</a></li>
									<li>{{__('messeges.contact us')}}</li>
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
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">{{__('messeges.Get in touch with us')}}</div>
						<div class="section_subtitle">{{__('messeges.Say hello')}}</div>
						<div class="contact_info_text"><p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget.</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
								<li>
									<div>{{__('messeges.address')}}</div>
									<div>1481 Creekside Lane Avila Beach, CA 93424</div>
								</li>
								<li>
									<div>{{__('messeges.phone')}}</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>{{__('messeges.email')}}</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
						<form action="{{route('store')}}" method="POST" class="contact_form" id="contact_form">
						@csrf	
						<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<input name="name" type="text" class="contact_input" placeholder="{{__('messeges.name')}}" required="required">
									<span style="color: red">@error('name'){{$message}} @enderror</span>
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input name="email" type="email" class="contact_input" placeholder="{{__('messeges.E-mail')}}" required="required">
									<span style="color: red">@error('email'){{$message}} @enderror</span>		
								</div>
							</div>
							<div><input name="subject" type="text" class="contact_input" placeholder="{{__('messeges.subject')}}"></div>
							<div><textarea name="message" type="text"  class="contact_textarea contact_input" placeholder="{{__('messeges.message')}}" required="required"></textarea></div>
							<button type="submit" class="contact_button button">{{__('messeges.send')}}</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>

    @endsection
	@section('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/contact.js')}}"></script>
@endsection