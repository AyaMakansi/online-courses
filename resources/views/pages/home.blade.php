@extends('layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties1.css')}}">
@endsection
@section('content')
  
<!-- Home -->
<div class="home">
<!-- Home Slider -->
<div class="home_slider_container">
    <div class="owl-carousel owl-theme home_slider">
        
        <!-- Slide -->
        <div class="owl-item">
            <div class="home_slider_background" style="background-image:url(images/onl.jpg)"></div>
            <div class="slide_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slide_content">
                                <!--<div class="home_subtitle">super offer</div>-->
                                <div class="home_title"><h1>{{__('messeges.online courses')}}</h1></div>
                                <div class="home_details">
                                    <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                        <li>
                                        <div class="home_details_image"><img src="{{asset('images/play.png')}}" alt=""></div>
                                            <span> 100 {{__('messeges.courses')}}</span>
                                           
                                        </li>
                                        <li>
                                        <div class="home_details_image"><img src="{{asset('images/graduation-cap.png')}}" alt=""></div>
                                            <span> 20 {{__('messeges.professor')}}</span>
                                        </li>
                                        <li>
                                            <div class="home_details_image"><img src="{{asset('images/clock.png')}}" alt=""></div>
                                            <span> 30 {{__('messeges.hour')}}</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- <div class="home_price">$ 1. 245 999</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 
        <div class="owl-item">
            <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
            <div class="slide_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slide_content">
                                <div class="home_subtitle">super offer</div>
                                <div class="home_title">Villa with sea view</div>
                                <div class="home_details">
                                    <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_1.png" alt=""></div>
                                            <span> 650 Ftsq</span>
                                        </li>
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_2.png" alt=""></div>
                                            <span> 3 Bedrooms</span>
                                        </li>
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_3.png" alt=""></div>
                                            <span> 2 Bathrooms</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="home_price">$ 1. 245 999</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Slide 
        <div class="owl-item">
            <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
            <div class="slide_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slide_content">
                                <div class="home_subtitle">super offer</div>
                                <div class="home_title">Villa with sea view</div>
                                <div class="home_details">
                                    <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_1.png" alt=""></div>
                                            <span> 650 Ftsq</span>
                                        </li>
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_2.png" alt=""></div>
                                            <span> 3 Bedrooms</span>
                                        </li>
                                        <li>
                                            <div class="home_details_image"><img src="images/icon_3.png" alt=""></div>
                                            <span> 2 Bathrooms</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="home_price">$ 1. 245 999</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
</div>
</div>



<!-- Recent 

<div class="recent">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="section_title">Recent Properties</div>
            <div class="section_subtitle">Search your dream home</div>
        </div>
    </div>
    <div class="row recent_row">
        <div class="col">
            <div class="recent_slider_container">
                <div class="owl-carousel owl-theme recent_slider">
                    
                     Slide 
                    <div class="owl-item">
                        <div class="recent_item">
                            <div class="recent_item_inner">
                                <div class="recent_item_image">
                                    <img src="images/property_1.jpg" alt="">
                                    <div class="tag_featured property_tag"><a href="#">Featured</a></div>
                                </div>
                                <div class="recent_item_body text-center">
                                    <div class="recent_item_location">Miami</div>
                                    <div class="recent_item_title"><a href="property.html">Sea view property</a></div>
                                    <div class="recent_item_price">$ 1. 234 981</div>
                                </div>
                                <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="recent_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    Slide 
                    <div class="owl-item">
                        <div class="recent_item">
                            <div class="recent_item_inner">
                                <div class="recent_item_image">
                                    <img src="images/property_2.jpg" alt="">
                                    <div class="tag_offer property_tag"><a href="#">Offer</a></div>
                                </div>
                                <div class="recent_item_body text-center">
                                    <div class="recent_item_location">Los Angeles</div>
                                    <div class="recent_item_title"><a href="property.html">2 Floor Town House</a></div>
                                    <div class="recent_item_price">$ 1. 234 981</div>
                                </div>
                                <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="recent_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    Slide 
                    <div class="owl-item">
                        <div class="recent_item">
                            <div class="recent_item_inner">
                                <div class="recent_item_image">
                                    <img src="images/property_3.jpg" alt="">
                                    <div class="tag_featured property_tag"><a href="#">Featured</a></div>
                                </div>
                                <div class="recent_item_body text-center">
                                    <div class="recent_item_location">Florida</div>
                                    <div class="recent_item_title"><a href="property.html">Vacation Home</a></div>
                                    <div class="recent_item_price">$ 1. 234 981</div>
                                </div>
                                <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="recent_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
                                    <div><div class="recent_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
                    <div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                    <div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="button recent_button"><a href="#">see more</a></div>
        </div>
    </div>
</div>
</div>

Cities -->

<div class="cities">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="section_title">{{__('messeges.categories')}}</div>
            <div class="section_subtitle">{{__('messeges.Search of the course you want')}}</div>
        </div>
    </div>
</div>

<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
@foreach($allcategories as $cat)
   
    <!-- City -->
    <div class="city">
        <img src="{{asset('images/categories/'.$cat->image)}}">
        <div class="city_overlay">
            <a href="{{route('getitems',$cat->id)}}" class="d-flex flex-column align-items-center justify-content-center">
            <div class="property_icon"><img src="{{asset('images/categories/'.$cat->icon)}}" alt=""></div>
            <div class="city_title">{{$cat->name}}</div></a>
				
        </div>
    </div>
@endforeach
</div>
</div>
    <!-- City -->
   <!-- <div class="city">
        <img src="images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey">
        <div class="city_overlay">
            
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
          
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
-->
    <!-- City -->
  <!--  <div class="city">
        <img src="images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
        <div class="city_overlay">
        
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
-->
    <!-- City -->
  <!--  <div class="city">
        <img src="images/city_4.jpg" alt="https://unsplash.com/@justinbissonbeck">
        <div class="city_overlay">
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
--> 
    <!-- City 
    <div class="city">
        <img src="images/city_5.jpg" alt="https://unsplash.com/@claudiotrigueros">
        <div class="city_overlay">
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
-->
    <!-- City
    <div class="city">
        <img src="images/city_6.jpg" alt="https://unsplash.com/@andersjilden">
        <div class="city_overlay">
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
 -->
    <!-- City 
    <div class="city">
        <img src="images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
        <div class="city_overlay">
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
-->
    <!-- City
    <div class="city">
        <img src="images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
        <div class="city_overlay">
            <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                <div class="city_title">Ibiza Town</div>
                <div class="city_subtitle">Rentals from $450/month</div>
            </a>	
        </div>
    </div>
</div>
</div> 
 -->
<!-- Testimonials -->

<div class="testimonials">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="section_title">{{__('messeges.What our students say')}}</div>
          <!-- <div class="section_subtitle">Search of the course you want</div>-->
        </div>
    </div>
    <div class="row testimonials_row">
        
        <!-- Testimonial Item -->
        <div class="col-lg-4 testimonial_col">
            <div class="testimonial">
                <div class="testimonial_title">Amazing course for me</div>
                <div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
                <div class="testimonial_author_image"><img src="images/testimonial_1.jpg" alt=""></div>
                <div class="testimonial_author"><a href="#">Diane Smith</a><span>, {{__('messeges.student')}}</span></div>
                <div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
            </div>
        </div>

        <!-- Testimonial Item -->
        <div class="col-lg-4 testimonial_col">
            <div class="testimonial">
                <div class="testimonial_title">Very good professors</div>
                <div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
                <div class="testimonial_author_image"><img src="images/testimonial_2.jpg" alt=""></div>
                <div class="testimonial_author"><a href="#">Michael Duncan</a><span>, {{__('messeges.student')}}</span></div>
                <div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
            </div>
        </div>

        <!-- Testimonial Item -->
        <div class="col-lg-4 testimonial_col">
            <div class="testimonial">
                <div class="testimonial_title">Very good communication</div>
                <div class="testimonial_text">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
                <div class="testimonial_author_image"><img src="images/testimonial_3.jpg" alt=""></div>
                <div class="testimonial_author"><a href="#">Shawn Gaines</a><span>, {{__('messeges.student')}}</span></div>
                <div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
            </div>
        </div>

    </div>
</div>
</div>
	

    @endsection
    @section('scripts')
<script src="{{asset('js/custom.js')}}"></script>
	@endsection
  