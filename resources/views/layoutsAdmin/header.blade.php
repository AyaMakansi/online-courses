
<div class="admin-wrapper">
	<div class="admin-sidebar">
	<div class="hidden-md-down">
			 <span><h2>
					<span class="fa fa-graduation-cap fa-3x">Edu</span>
					</h2></span>
		</div>
		<a href="{{route('categories.create')}}" class="btn btn-primary btn-block hidden-md-down"><i class="md-icon">add</i>{{__('messeges.add category')}}</a>

		<div class="dashboard-nav-primary collapse navbar-toggleable-md">
			<ul class="nav nav-pills nav-stacked">
				<li class="nav-item">
					<a href="{{route('dashboard',$user->id)}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="md-icon">dashboard</i> {{__('messeges.dashboard')}}</a>
				</li> 

				<li class="nav-item">
					<a href="{{route('admin.all')}}" class="nav-link {{ request()->routeIs('admin.all') ? 'active' : '' }}"><i class="md-icon">view_list</i> {{__('messeges.categories')}}</a>
				</li>

				<li class="nav-item">
					<a href="{{route('admin.allitems')}}" class="nav-link {{ request()->routeIs('admin.allitems') ? 'active' : '' }}"><i class="md-icon">rate_review</i> {{__('messeges.category items')}}</a>
				</li>

				<li class="nav-item">
					<a href="{{route('admin.allusers')}}" class="nav-link {{ request()->routeIs('admin.allusers') ? 'active' : '' }}"><i class="md-icon">people</i> {{__('messeges.users')}} </a>
				</li>
				
				
				<li class="nav-item">
					<a href="{{route('setting')}}" class="nav-link {{ request()->routeIs('setting') ? 'active' : '' }}"><i class="md-icon">settings</i> {{__('messeges.settings')}}</a>
				</li>

				<li class="nav-item">
				@guest
				@if (Route::has('login'))
						   
						   <a href="{{ route('login') }}" class="nav-link"><i class="fa fa-sign-in"></i> {{ __('messeges.login') }}
						</a>
							@endif
				   
					@else
					<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="md-icon">power_settings_new</i>{{__('messeges.logout')}}</a>
									   @endguest
				</li>
						
			</ul>
		</div>

		<hr class="hidden-md-down">

	</div><!-- /.admin-sidebar -->

	<div class="admin-main">		
		<div class="admin-header">
			<div class="admin-header-navigation">
				<div class="container-fluid">
					<ul class="nav nav-pills">
						<li class="nav-item"><a href="{{route('Home')}}" class="nav-link">Home</a></li>
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li class="nav-item active">
                        <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
			            {{ $properties['native'] }}
			            <span class="sr-only">(current)</span></a>
                         </li>
                        @endforeach
					</ul> 

					<ul class="nav nav-pills secondary">
						<li class="nav-item user-avatar-wrapper hidden-sm-down">
							<a href="#" class="nav-link circle user-avatar-image">
							<img src="{{asset('images/users/'.$user->image)}}" width="45" height="45"></a>
							<span class="user-avatar-status"></span>

							<ul class="header-more-menu">
								<li><a href="{{route('dashboard',$user->id)}}">{{__('messeges.Profile')}}</a></li>
								<li><a href="{{route('setting')}}">Password</a></li>
								
								   @guest
                        
						            @if (Route::has('login'))
						   
						        <li>   <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('messeges.login') }}</a></li>
							        @endif
				   
					                @else
					            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{__('messeges.logout')}}</a></li>
								    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					 
					                 @endguest
									
							</ul>	
						</li>
					</ul>		

					<button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target=".dashboard-nav-primary">
                        <i class="md-icon">menu</i>
                    </button>
												
				</div><!-- /.container -->
			</div><!-- /.admin-header-navigation -->

			
		</div><!-- /admin-header -->
	
	        
	


		