	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
				    <span class="company__logo"><h2>
					<span class="fa fa-graduation-cap fa-2x"></span>
					</h2></span>
                    
                    <ul>@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item">
                    <a class="nav-item text-white" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }} <span class="sr-only">(current)</span></a>
                          </li>
                           @endforeach</ul>
                        

						<nav class="main_nav">
        
							<ul>
								<li class="nav-link {{ request()->routeIs('Home') ? 'active' : '' }}"><a href="{{route('Home')}}" >{{__('messeges.home')}}</a></li>
								<li class="nav-link {{ request()->routeIs('About') ? 'active' : '' }}"><a href="{{route('About')}}">{{__('messeges.about us')}}</a></li>
								<li class="nav-link {{ request()->routeIs('allitems') ? 'active' : '' }}"><a href="{{route('allitems')}}" >{{__('messeges.category items')}}</a></li>
								<li class="nav-link {{ request()->routeIs('allcourses') ? 'active' : '' }}"><a href="{{route('allcourses')}}" >{{__('messeges.the courses')}}</a></li>
                               <li class="nav-link {{ request()->routeIs('Quizes') ? 'active' : '' }}"><a href="{{route('Quizes')}}">{{__('messeges.quizes')}}</a></li>
								<li class="nav-link {{ request()->routeIs('Contact') ? 'active' : '' }}"><a href="{{route('Contact')}}">{{__('messeges.contact us')}}</a></li>
             
                 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{asset('images/users/'.$user->image)}}" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        		
          <a class="dropdown-item"  href="{{route('dashboard',$user->id)}}">{{__('messeges.dashboard')}}</a>
          @guest
           @if (Route::has('login'))
         <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('messeges.login') }}</a>
			     @endif
            @else
            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      {{__('messeges.logout')}}</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endguest
         </div>
      </li>
      
                            </ul>
                            
						</nav>
													
</div>
</div>
</div>
        </div>
</header>