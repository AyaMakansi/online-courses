@extends('layoutsAdmin.master')
@section('content')
<div class="container push-top-bottom">
<table class="table small-header">
		<thead>
		@if(Session::has('success'))
     <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
     </div>
     
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
      {{Session::get('error')}}
     </div>
    @endif
	<div class="box">
		<form method="POST" action="{{ route('item.add') }}" enctype="multipart/form-data">	
            @csrf	
			
				<legend> {{ __('messeges.add item') }}</legend>		
                
                       
				<div class="form-group">
					<label>{{__('messeges.item english name')}}</label>
					<input id="name_en" type="text" class="form-control" name="name_en" placeholder="{{ __('messeges.enter item english name') }}">
				</div><!-- /.form-group -->
                <div class="form-group">
					<label>{{__('messeges.item arabic name')}}</label>
					<input id="name_ar" type="text" class="form-control" name="name_ar" placeholder="{{ __('messeges.enter item arabic name') }}">
				</div><!-- /.form-group -->
				<div class="form-group">
				<label for="category_id" class="form-label">{{__('messeges.category name')}}</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option hidden>{{__('messeges.Choose Category')}}</option>
                            @foreach ($category as $categories)
                            <option value="{{ $categories->id }}">
							@if(app()->getLocale() == 'en')
                                  {{ $categories->name_en }}
                              @else
                                {{ $categories->name_ar }}
                             @endif
					             </option>
                            @endforeach
                        </select>

				</div>
                
				<div class="form-group">
					<label>{{__('messeges.item image')}}</label>
					<input id="image" type="file" class="form-control" name="image" >
				</div><!-- /.form-group -->

                
			<div class="center">
				<button type="submit" class="btn btn-primary btn-large"> {{ __('messeges.add item') }}</button>
			</div><!-- /.center -->
		</form>
	</div><!-- /.box -->
</div><!-- /.container -->
@endsection