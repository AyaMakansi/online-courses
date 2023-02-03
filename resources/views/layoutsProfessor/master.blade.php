<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">    
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('libraries/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('styles/leaflet.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('styles/leaflet.markercluster.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('styles/leaflet.markercluster.default.css')}}" rel="stylesheet" type="text/css">        
    <link href="{{asset('styles/materialist.css')}}" rel="stylesheet" type="text/css" id="css-primary">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
       <link rel="stylesheet" type="text/css" href="{{asset('styles/admin_dashboard.css')}}"> 
       <link rel="stylesheet" type="text/css" href="{{asset('styles/search_style.css')}}"> 
@yield('css')
</head>
<body>

@include('layoutsProfessor.header')


@yield('content')




   
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/leaflet.js')}}"></script>
<script type="text/javascript" src="{{asset('js/leaflet.markercluster.js')}}"></script>
<script type="text/javascript" src="{{asset('libraries/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialist.js')}}"></script>
@yield('scripts')
</body>
</html>