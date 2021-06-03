@extends('layouts.app')

@section('title')Checking @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/public/css/after-booking.css')}}">
@endsection

@section('content')
<div class="container">
    <h1>Вітаємо! Ви успішно забронювали тур!</h1>
    <h3>Деталі:</h3>
        <p> <b>Ім'я та прізвище: </b> {{ $tour->name }} {{ $tour->surname }}</p>
        <p> <b>Ваш контактний телефон: </b> {{ $tour->phone }}</p>
        <p> <b>Назва туру: </b> {{ $info->title }}</p>
         <div class="image">
            @php
                echo '<img src="/public/img/'.$info->image.'.png" alt="tour" class="tour-img">';
            @endphp
        </div>
        <p> <b>Тривалість: </b> {{ $tour->days }} днів</p>
        <p> <b>Дата початку туру: </b> {{ $tour->date }}</p>
        @if ($tour->child == 1) 
            <p> <i>З Вами буде дитина до 6 років</i> </p>
        @endif
        <a class="btn" href="{{ route('tour-info', $info->id) }}"> Повернутись до туру </a>
</div>
@endsection