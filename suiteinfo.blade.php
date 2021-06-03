@extends('layouts.app')

@section('title')RoomInfo @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/public/css/roominfocss.css')}}">
	<link rel="stylesheet" href="{{ asset('/public/css/slider.css')}}">
@endsection

@section('content')
    <section class="first_screen">
		<div class="name">
			<p>{{ $room->title }}</p>
		</div>
		<div class="date">
			<p class="first_text">
				{{ $room->descrip }}
			</p>
			<div class="input_1st_screen">
				<div class="detail">
					<a href="#detail"><p>Детальніше</p></a>
					<img src="{{ asset('/public/img/Arrow_white.svg')}}" alt="arrow">
				</div>
				<div class="book">
					<a href="#form"><p>Замовити</p></a>
					<img src="{{ asset('/public/img/Arrow_container.svg')}}" alt="arrow">
				</div>
			</div>
		</div>
	</section>
	<section class="main_frame">
		<h1 class="zagolovok1" id="detail">
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Основні характеристики
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>
		<div class="characteristics">
			<div class="square1">
				<div class="content_square">
			    	<p class="square1_text">КІЛЬКІСТЬ ОСІБ</p>
			    	<img src="{{ asset('/public/img/Person.png')}}" alt="person">
			    	<p class="square1_numbers">{{$room->guests}}</p>
			  	</div>
			</div>
			<div class="square2">
				<div class="content_square">
			    	<p class="square2_text">РОЗМІРИ ЛІЖКА</p>
			    	<img src="{{ asset('/public/img/Bed.png')}}" alt="person">
			    	<p class="square2_numbers">{{$room->bed_size}}</p>
			  	</div>
			</div>
			<div class="square1">
				<div class="content_square">
			    	<p class="square1_text">ПЛОЩА НОМЕРА</p>
			    	<img src="{{ asset('/public/img/Area.png')}}" alt="person">
			    	<p class="square1_numbers">{{$room->area}} м<sup>2</sup></p>
			  	</div>
			</div>
		</div>
		<h1 class="zagolovok1">
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Комплектація номера
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>
		<div class="complectation">
			<ul">
			   <li>Кондиціонер</li>
			   <li>Два сучаних санвузла</li>
			   <li>Повна комплектація засобів особистої гігієни</li>
			   <li>Безкоштовний Wi-Fi</li>
			   <li>Телевізор з плоским екраном</li>
			   <li>Кабельне телебачення</li>
			   <li>Домашній кінотеатр з колекцією фільмів</li>
			   <li>Гардеробна кімната</li>
			   <li>Обладнане робоче місце</li>
			   <li>Міні-бар</li>
			   <li>Фен, набір міні-парфумерії</li>
			   <li>Комплект халатів</li>
			   <li>Жіноча і чоловіча косметика</li>
			   <li>Одноразові капці</li>
			</ul>
		</div>
		<div class="back"></div>
		<h1 class="zagolovok1">
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Галерея
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>
		<div class="flex-wrap">
			<div class="slider-wrap">
				<div id="first-slide" class="slide active">
				</div>
				<div id="second-slide" class="slide">
				</div>
				<div id="third-slide" class="slide">
				</div>
				<div id="fourth-slide" class="slide">
				</div>
				<div id="fifth-slide" class="slide">
				</div>
				<div id="btn-prev">
					<img src="{{ asset('/public/img/slide-arrow-prev.png')}}" alt="arrow" width="72">
					<img id="hover" src="{{ asset('/public/img/slider-arrow-hover-prev.png')}}" alt="">
				</div>
				<div id="btn-next">
					<img src="{{ asset('/public/img/slide-arrow.png')}}" alt="arrow" width="72">
					<img id="hover" src="{{ asset('/public/img/slider-arrow-hover.png')}}" alt="">
				</div>
			</div>
		</div>
		<div class="dots-wrapper">
			<span class="dot active"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
		<h1 class="zagolovok1">
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Додаткові послуги
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>
		<div class="simple_text">
			<p>У нас гості мають можливість скористуватись деякими спеціальними послугами від нашого готелю. Ви можете лишити заявку на користування ними зараз або зробити це під час відпочинку. </p>
		</div>
		<div class="line">
			<div class="image_line">
				<img src="{{ asset('/public/img/sport_img.png')}}" alt="sport">
			</div>
			<div class="name_line">
				<img src="{{ asset('/public/img/Sport.png')}}" alt="sport">
				<p class="text_line">Спортивна зала</p>
			</div>
		</div>
		<div class="line">
			<div class="name_line">
				<img src="{{ asset('/public/img/Flower.png')}}" alt="spa">
				<p class="text_line">СПА та сауна</p>
			</div>
			<div class="image_line">
				<img src="{{ asset('/public/img/spa_img.png')}}" alt="spa">
			</div>
		</div>
		<div class="line">
			<div class="image_line">
				<img src="{{ asset('/public/img/pool_img.png')}}" alt="pool">
			</div>
			<div class="name_line">
				<img src="{{ asset('/public/img/Pool.png')}}" alt="pool">
				<p class="text_line">Басейни</p>
			</div>
		</div>
		<div class="line">
			<div class="name_line">
				<img src="{{ asset('/public/img/Food.png')}}" alt="food">
				<p class="text_line">Сніданки</p>
			</div>
			<div class="image_line">
				<img src="{{ asset('/public/img/food_img.png')}}" alt="food">
			</div>
		</div>
		<div class="price">
			<p>Ціна</p>
			<p class="cost">{{$room->price}}$</p>
		</div>
		<h1 class="zagolovok1" id="form">
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon">
			Форма замовлення
			<img src="{{ asset('/public/img/Polygon_blue.svg')}}" alt="poligon" class="transform">
		</h1>
		<form action="{{ route('room-form', $room->id) }}" method="post">
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
					<p>Телефон</p>
					<input type="text" name="phone" placeholder="Введіть телефон" class="input">
				</div>
				<div class="single_input">
					<p>Електронна адреса</p>
					<input type="text" name="mail" placeholder="Введіть e-mail" class="input">
				</div>
			</div>
			<p class="period">Період</p>
			<div class="special_row">
				<div class="single_input_inline">
					<p>з</p>
					<input type="date" name="date1" class="input_inline">
				</div>
				<div class="single_input_inline">
					<p>по</p>
					<input type="date" name="date2" class="input_inline">
				</div>
			</div>
			<div class="special_row">
				<div class="check_line">
					<p>Спортзал</p>
					<input type="checkbox" name="sport" class="checkbox">
				</div>
				<div class="check_line">
					<p>Сніданки</p>
					<input type="checkbox" name="food" class="checkbox">
				</div>
			</div>
			<div class="special_row">
				<div class="check_line">
					<p>Сауна та СПА</p>
					<input type="checkbox" name="spa" class="checkbox">
				</div>
				<div class="check_line">
					<p>Басейн</p>
					<input type="checkbox" name="pool" class="checkbox">
				</div>
			</div>

			<input type="submit" name="submit" value="Забронювати номер" class="button"> 
		</form>
	</section>
@endsection