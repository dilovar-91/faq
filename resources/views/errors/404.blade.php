@extends('layouts.main')

@section('content')
<div class="col-md-12 padding-20 text-center">
	<img src="{{ asset('images/404.png') }}" alt="404" width="200px" height="200px">
	<h1>К сожалению, мы не смогли найти запрошенную вами страницу</h1>
	<br>
	<a href="{{ route('home') }}" class="btn btn-info btn-wide">
		<i class="fa fa-arrow-circle-left"></i> На главную</a>
</div>
@endsection