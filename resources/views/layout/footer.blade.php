
<footer class="footer">
		<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
					<span class="company__logo"><h2>
					<span class="fa fa-graduation-cap fa-2x"></span>
					</h2></span>
					</div>
					<div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
						<div class="footer_title"></div>
					</div>
				</div>
				<div class="row">
					<!--<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_about_text"></div>
						</div>
					</div>-->
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img src="{{asset('images/youtube (1).png')}}" alt=""></div></div>
							<div class="footer_latest_content">
								<!--<div class="footer_latest_location">Miami</div>-->
								<div class="footer_latest_name"><a href="#"><br>{{__('messeges.watch on youtube')}}</a></div>
								<!--<div class="footer_latest_price">FOLLOW ON TWITTER</div>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img src="{{asset('images/facebook (1).png')}}" alt=""></div></div>
							<div class="footer_latest_content">
								<!--<div class="footer_latest_location">Miami</div>-->
								<div class="footer_latest_name"><a href="#"><br>{{__('messeges.Like On Facebook')}}</a></div>
								<!--<div class="footer_latest_price">LIKE ON FACEBOOK</div>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img src="{{asset('images/twitter (1).png')}}" alt=""></div></div>
							<div class="footer_latest_content">
								<!--<div class="footer_latest_location">Miami</div>-->
								<div class="footer_latest_name"><a href="#"><br>{{__('messeges.Follow On Twitter')}}</a></div>
								<!--<div class="footer_latest_price">FOLLOW ON TWITTER</div>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img src="{{asset('images/question.png')}}" alt=""></div></div>
							<div class="footer_latest_content">
								<!--<div class="footer_latest_location">Miami</div>-->
								<div class="footer_latest_name"><a href="#"><br>{{__('messeges.Ask Questions')}}</a></div>
							<!--	<div class="footer_latest_price">ASK QUESTIONS</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
							<div class="footer_nav">
								<ul>
								<li><a href="{{route('Home')}}">{{__('messeges.home')}}</a></li>
								<li><a href="{{route('About')}}">{{__('messeges.about us')}}</a></li>
								<li><a href="{{route('allitems')}}">{{__('messeges.category items')}}</a></li>
								<li><a href="{{route('allcourses')}}">{{__('messeges.courses')}}</a></li>
                               <li><a href="{{route('Quizes')}}">{{__('messeges.quizes')}}</a></li>
								<li><a href="{{route('Contact')}}">{{__('messeges.contact us')}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        
	</footer>