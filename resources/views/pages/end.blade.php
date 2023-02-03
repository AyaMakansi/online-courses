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

    <div class="row">
    <div class="additional_details">
		<div class="details_container">
        <div class="col-md-4">
            <label>Correct: <small>{{Session::get('correctans')}}</small></label>
            <label>Incorrect: <small>{{Session::get('wrongans')}}</small></label>
           <label>Result: <small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small></label>

            <a href="{{route('Home')}}"><button class="btn btn-primary" style="margin-left: 10%;">finish Quiz</button></a> 
        </div>
                            </div>
    </div>
</div>
</div>
        </div>
  @endsection
