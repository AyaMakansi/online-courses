@extends('layout.master')
@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('styles/elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties1.css')}}">

@endsection
@section('content')
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/course.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">{{__('messeges.quizzes')}}</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">{{__('messeges.home')}}</a></li>
									<li>{{__('messeges.quizzes')}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
                <div class="icon_boxes">
						<div class="elements_title">Quizes</div>
						<div class="row icon_boxes_row">
                  @foreach($allquizes as $quizes)
							<!-- Icon Box -->
							<div class="col-lg-4 icon_box_col">
								<div class="icon_box">
									<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="icon_box_icon d-flex flex-column justify-content-center"><img src="{{asset('images/quizzes/'.$quizes->icon)}}" alt=""></div>
										
										<div class="icon_box_title">{{$quizes->item->name}}</div>
									</div>
									<div class="icon_box_text">
										<p>{{$quizes->name}}</p>
									</div>
                           <div class="button button_3"><div><a href="{{route('getquestions',$quizes->id)}}">Start Quiz</a></div></div>
								</div>
							</div>
                  @endforeach
				  <div class="pagination">
				  {{$allquizes->links()}}
			       </div>
						</div>
					</div>
               </div>
				</div>
			</div>
		</div>
@endsection
	@section('scripts')
   <script src="{{asset('js/elements.js')}}"></script>
	@endsection