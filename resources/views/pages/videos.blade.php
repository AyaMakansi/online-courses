@extends('layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/news.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('styles/news_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/news1.css')}}">
@endsection
@section('content')
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/course.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Search results</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>Search Results</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Lessons</div>
					<!--<div class="section_subtitle">Search your dream home</div> -->
				</div>
			</div>
			<div class="row properties_row">
			@foreach($allvideos as $videos)
				<!-- Property -->
				
				<div class="news_post">
							<div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
								<div><div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
									
								@if(app()->getLocale() == 'en')
								<div class="news_post_day">{{$videos->name_en}}</div>
                            @else
					        <div class="news_post_day">{{$videos->name_ar}}</div>
                            @endif
									<!--<div class="news_post_month">Apr '18</div>-->
								</div></div>
								<div class="news_post_title_content">
									<div class="news_post_title"><a href="#">{{$videos->course->name}}</a></div>
									<div class="news_post_info">
										<ul>
										@if(app()->getLocale() == 'en')
											<li><a href="#">{{$videos->course->item->name_en}}</a></li>
											<li><div class="property_icon"><img src="{{asset('images/categories'.$videos->course->item->category->icon)}}" ></div> <a href="#">{{$videos->course->item->category->name_en}}</a></li>
										 @else
										<li><a href="#">{{$videos->course->item->name_ar}}</a></li>
											<li><div class="property_icon"><img src="{{asset('images/categories'.$videos->course->item->category->icon)}}" ></div> <a href="#">{{$videos->course->item->category->name_ar}}</a></li>
											
                                        @endif 
										<li> <a href="#">{{$videos->viewer}}</a></li>
										 
										</ul>
									</div>
								</div>
							</div>
							<div class="news_post_video"><video width="620" height="380" controls>
                             <source src="{{asset('videos/'.$videos->video)}}" type="video/mp4">
                            </video></div>
							<div class="news_post_text">
							@if(app()->getLocale() == 'en')	
								<p>{{$videos->description_en}}</p>
								@else
								<p>{{$videos->description_ar}}</p>
								@endif
							</div>
						</div>
            @endforeach
			
		</div>
	</div>
</div>
</div>

    @endsection
	@section('scripts')
	<script src="{{asset('js/properties.js')}}"></script>
	<script src="{{asset('js/news.js')}}"></script>
	<script src="{{asset('js/plyr.polyfilled.js')}}"></script>
	@endsection