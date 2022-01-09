@extends('layouts.app')
@section('content')
<div id="academy" class="section pb-5 bg-white shadow-sm academy-class-page">
	<form action="" class="filter-category mb-4 pt-4 pt-lg-0">
	  <div class="container">
		<div class="row justify-content-center">
		  <div class="col-md-10">
			<div class="row">
			  <div class="col-lg-3 col-sm-6">
				<div class="form-group">
				  <select class="form-control rounded-pill" id="select-module">
					<option select hidden>Cari Class</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
			  </div>
			  <div class="col-lg-3 col-sm-6">
				<button class="rounded-pill font-weight-bold btn-search text-white w-100"><i class="fa fa-search mr-2" aria-hidden="true"></i> Cari Sekarang</button>
			  </div>
			</div>
		  </div>              
		</div>
	  </div>
	</form>          
	<div class="detail-class-page-wrapper border-top pt-4">
	  <div class="container">
		<h1 class="title-page">{{$course->course_name}}</h1>
		{{-- <p class="details-info mb-4">Widya safitri, CEO Mothers in Mission</p> --}}
		<div class="row">
		  <div class="col-md-9">
			<div class="video-wrapper mb-4">
			  <video class="video-player video-js vjs-default-skin vjs-16-9 vjs-big-play-centered" data-setup='{"fluid": true}' poster="https://vjs.zencdn.net/v/oceans.png" controls>
				<source src="//vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
				<source src="//vjs.zencdn.net/v/oceans.webm" type='video/webm'>
			  </video>
			</div>                
			<div class="shortdesc">
			  <p>{!!$course->description !!}</p>
			</div>
		  </div>
		  <div class="col-md-3">
			<div class="sidebar-menus p-4">
			  <ul>
				<li><a href="#">3 Lessons ( 1 Jam 20 Menit )</a></li>
				<li><a href="#">Lesson 1  Lorem ipsum dollet</a></li>
				<li><a href="#">Lesson 2  Lorem ipsum dollet</a></li>
				<li><a href="#">Lesson 3  Lorem ipsum dollet</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
@stop