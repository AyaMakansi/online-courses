@extends('layout.master')
@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('styles/elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/properties1.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/property.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/property_responsive.css')}}">

@endsection
@section('content')
<div class="elements">
		<div class="container">
      <form method="post" action="{{route('submitans',$quiz_id)}}">
        @csrf
			<div class="row">
               <div class="col">
                 
                 <div class="additional_details">
							<div class="details_container">
								<ul>
                  
							      <h4>{{Session::get('nextq')}}. {{$questions->question}}</h4><br>             
                                  <div id="altcontainer" class="notranslate">
                                   <label class="radiocontainer" id="label3">
                                   <input name="ans"  type="radio" value="a"> <small>{{$questions->a}}</small><br> 
                                   <input name="ans"  type="radio" value="b"> <small>{{$questions->b}}</small><br> 
                                   <input name="ans" type="radio" value="c"> <small>{{$questions->c}}</small><br> 
                                   <input name="ans"  type="radio" value="d"> <small>{{$questions->d}}</small><br> 
                                   <input name="dbans" value="{{$questions->ans}}" style="visibility: hidden;"> <small></small><br>
                                  
                                 </div>
                                  
                                </ul>
							              </div>                
                       </div>
                      </div>
                    
                         
                    </div> 
                    <button type="submit" class="btn btn-primary">Next »</button>
                  </form>
                      </div>
                  </div>
                                 
    @endsection
	@section('scripts')
   <script src="{{asset('js/elements.js')}}"></script>
	@endsection