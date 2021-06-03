@extends('layouts.app')

@section('title')TourInfo @endsection

@section('css')
    <link rel="stylesheet" href="{{asset('/public/css/tourinfocss.css')}}">
@endsection

@section('content')

	<section class="first_screen">
		<h1 class="name">
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon">
			{{$tour->title}}
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon" class="transform">
		</h1>		
		<div class="input_1st_screen">
			<div class="detail">
				<a href="#special"><p>Детальніше</p></a>
				<img src="{{asset('/public/img/Arrow_white.svg')}}" alt="arrow">
			</div>
			<div class="book">
				<a href="#form"><p>Замовити</p></a>
				<img src="{{asset('/public/img/Arrow_container.svg')}}" alt="arrow">
			</div>
		</div>
	</section>
	<section class="main_frame">
		<h1 class="zagolovok1" id="special">
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon">
			Трошки про тур
			<img src="{{asset('/public/img/Polygon_white.svg')}}" alt="poligon" class="transform">
		</h1>		
		<div class="shortinfo">
			<div class="text">
				<p class="simple_text">
					{{$tour->descrip2}}
				</p>
				<div class="mark">
					<p>Гід:</p>
					<img src="{{asset('/public/img/Stars.png')}}" alt="Mark" class="stars">
				</div>
				<div class="mark">
					<p>Тур:</p>
					<img src="{{asset('/public/img/Stars.png')}}" alt="Mark" class="stars">
				</div>
			</div>
			<img src="{{asset('/public/img/short_info.png')}}" alt="Mountains" class="first_image">
		</div>
		<div class="mark_adapt">
			<p>Гід:</p>
			<img src="{{asset('/public/img/Stars.png')}}" alt="Mark" class="stars">
		</div>
		<div class="mark_adapt">
			<p>Тур:</p>
			<img src="{{asset('/public/img/Stars.png')}}" alt="Mark" class="stars">
		</div>

		<div class="inline-top">
			<p>ГРАУБЮНДЕН</p><p>ЗАЙС</p>
		</div>
		<img src="{{asset('/public/img/Vector.png')}}" alt="Arrow" class="arrow">
		<div class="inline-bottom">
			<p>УНТЕРВАЦ</p><p>ГОРА ХОХВАНГ</p>
		</div>

		<div class="characteristics">
			<div class="rect1">
				<div class="content_rect">
			    	<p class="rect_zag">ТРАНСПОРТ</p>
			    	<img src="{{asset('/public/img/Bus.svg')}}" alt="person" class="img1">
			    	<p class="rect_text">Пересування групи до комуни Зайс здійснюється автобусом. До гори Хохванг дістаємося поїздом. У ціну туру вже включено вартість дороги. Мінімальна необхідна кількість людей - 8.</p>
			  	</div>
			</div>
			<div class="rect2">
				<div class="content_rect">
			    	<p class="rect_zag">МОВА</p>
			    	<img src="{{asset('/public/img/Language.svg')}}" alt="person" class="img2">
			    	<p class="rect_text verticalstep">Екскурсії доступні українською, англійською та німецькою мовами</p>
			  	</div>
			</div>
			<div class="rect1">
				<div class="content_rect">
			    	<p class="rect_zag">ТРИВАЛІСТЬ</p>
			    	<img src="{{asset('/public/img/Calendar.svg')}}" alt="person" class="calendar">
			    	<p class="rect_text">Тривалість туру - {{$tour->duration}} дні. Наявні спеціальні пропозиції, що передбачають довше перебування на деяких локаціях. У цьому випадку до туру додаються функції, які Ви можете уточнити при замовленні туру. </p>
			  	</div>
			</div>
		</div>
		<h1 class="zagolovok1" id="special">
			<img src="{{asset('/public/img/Dollar.svg')}}" alt="Dollar" class="dollar" id="top">
			Вартість туру
		</h1>
		<div class="blue_line">
			<p>{{$tour->duration}} денна поїздка - {{$tour->price}}$</p>
			<img src="{{asset('/public/img/Arrow_white.svg')}}" alt="Arrow">
		</div>
		<div class="white_line">
			<p>Спеціальна пропозиція - {{($tour->price)*2}}$</p>
			<img src="{{asset('/public/img/Arrow_container.svg')}}" alt="Arrow">
		</div>
		<h1 class="zagolovok1" id="form">
			<img src="{{asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Форма замовлення
			<img src="{{asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>	 
		<form action="{{ route('tour-form', $tour->id) }}" method="post">
			@csrf
			<div class="row">
				<div class="single_input">
					<p>Ім’я</p>
					<input type="text" name="name" placeholder="Введіть ім'я" class="input">
				</div>
				<div class="single_input">
					<p>Прізвище</p>
					<input type="text" name="surname" placeholder="Введіть прізвище" class="input">
				</div>
			</div>
			<div class="row">
				<div class="single_input">
					<p>Електронна адреса</p>
					<input type="text" name="mail" placeholder="Введіть e-mail" class="input">
				</div>
				<div class="single_input">
					<p>Телефон</p>
					<input type="text" name="phone" placeholder="Введіть телефон" class="input">
				</div>
			</div>
			<div class="row">
				<div class="single_input">
					<p>Кількість днів</p>
					<!-- <select class="input" name="days" id="problem-field">
						<option value="{{ $tour->duration }}">{{$tour->duration}} днів</option>
						<option value="{{ $tour->spec_duration }}">{{$tour->spec_duration}} днів</option>
					</select> -->
					<select class="input" name="days" id="problem-field">
            			<option value="{{ $tour->duration }}">{{$tour->duration}}</option>
            			<option value="{{ $tour->spec_duration }}">{{$tour->spec_duration}}</option>
          			</select>
				</div>
				<div class="single_input">
					<p>Період</p>
					<input type="date" name="date" id="problem-field" class="outline input">
				</div>
			</div>
			<div class="check_line">
				<p>Дитина до 6 років</p>
				<input type="checkbox" name="child" class="checkbox" value="1">
			</div>
			<input type="submit" name="submit" value="Замовити тур" class="button"> 
		</form>
	</section>
@endsection