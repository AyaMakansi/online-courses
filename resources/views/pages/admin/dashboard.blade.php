@extends('layoutsAdmin.master')
@section('content')
<div class="admin-content">
			<div class="container-fluid">
				<div class="admin-title">
	<h1>{{__('messeges.welcome in')}} {{__('messeges.dashboard')}} {{ Auth::user()->name }} </h1>

	<ul class="breadcrumb">
		<li><a href="index.html">Materialist</a> <i class="md-icon">keyboard_arrow_right</i></li>
		
			<li class="active">{{__('messeges.dashboard')}}</li>
	</ul><!-- /.breadcrumb -->	
</div><!-- /.admin-title -->
			</div>
</div>
@endsection
