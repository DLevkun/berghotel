@extends('layouts.app')

@section('title')Checking @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/public/css/after-booking.css')}}">
@endsection

@section('content')
<div class="container">
    <h1>Вітаємо! Ви успішно забронювали номер!</h1>
    <h3>Деталі:</h3>
        <p> <b>Ім'я та прізвище: </b> {{ $suite->name }} {{ $suite->surname }}</p>
        <p> <b>Ваш контактний телефон: </b> {{ $suite->phone }}</p>
        <p> <b>Назва туру: </b> {{ $roominfo->title }}</p>
         <div class="image">
            @php
                echo '<img src="/public/img/rooms/'.$roominfo->image.'.png" alt="tour" class="room-img">';
            @endphp
        </div>
        <p> <b>Дати бронювання: </b> з {{ $suite->date1 }} по {{$suite->date2}}</p>
        @if ($suite->sport == 1) 
            <p> Ви обрали, як додаткову послугу <i>спортзал</i> </p>       
        @endif
        @if ($suite->food == 1) 
            <p> Ви обрали, як додаткову послугу <i> сніданки</i> </p>       
        @endif
        @if ($suite->spa == 1) 
            <p> Ви обрали, як додаткову послугу <i>сауна та СПА</i> </p>       
        @endif
        @if ($suite->pool == 1) 
            <p> Ви обрали, як додаткову послугу <i>басейни</i> </p>       
        @endif
        <a class="btn" href="{{ route('room-info', $roominfo->id) }}"> Повернутись до номера </a>
</div>
@endsection