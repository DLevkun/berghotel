@extends('layouts.app')

@section('title')Our tours @endsection

@section('css')
    <link rel="stylesheet" href="{{asset('/public/css/tourcontainercss.css')}}">
@endsection

@section('content')
	<section class="first_screen">
		<h1 class="name">
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon">
			Тури
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon" class="transform">
		</h1>
		<div class="date">
			<p class="first_text">Дата початку</p>
			<div class="input">
				<input type="date" name="date">
				<div class="search">
					<p>Пошук</p>
					<img src="{{asset('/public/img/Arrow_white.svg')}}" alt="arrow">
				</div>
			</div>
		</div>
	</section>
	<section class="main_frame">
		<h1 id="start" class="zagolovok1">
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon">
			Доступні пропозиції
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon" class="transform">
		</h1>
		@foreach($tours as $tour)
			<div class="tour_image back{{$tour->id}}">
				<div class="plan">
					<p>Заплановано</p>
					<div class="inliner">
						<img src="{{asset('/public/img/Calendar.svg')}}" alt="Calendar">
						<div class="dates">  {{ $tour->date }}  </div>
					</div>
				</div>
				<div class="length">
					<p>Тривалість</p>
					<p>
						@if($tour->duration%10 == 1)
							{{ $tour->duration }} день
						@else
							{{ $tour->duration }} дні
						@endif
					</p>
				</div>
			</div>
			<div class="tour_text">
				<p class="zagolovok2"> {{ $tour->title }} </p>
				<p class="text">{{ $tour->descrip }}</p>
			</div>
			<div class="buttons">
				<div class="more">
					<p> <a href="{{route('tour-info', $tour->id)}}"> Детальніше </a> </p>
					<img src="{{asset('/public/img/Arrow_container.svg')}}" alt="arrow">
				</div>
				<div class="price">
					<p>Ціна {{$tour->price}}$</p>
				</div>
			</div>
		@endforeach	

		<div class="container">
			<div class="arrow-up">
				<a href="#start" class="up">
					<img src="{{asset('/public/img/Arrow_up.svg')}}" alt="Up" width="76">
				</a>
			</div>
		</div>
	</section>
@endsection