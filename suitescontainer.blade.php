@extends('layouts.app')

@section('title')Our rooms @endsection

@section('css')
    <link rel="stylesheet" href="{{asset('/public/css/rooms-container.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/rooms-container-adaptive.css')}}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="main-screen">
                <h1>
                    <img id="left" src="{{asset('/public/img/white_left.png')}}" width="42">
                    Бронювання номерів
                    <img id="right" src="{{asset('/public/img/white_right.png')}}" width="42">
                </h1>
                <form class="book-form" action="{{ route('search-room')}}">
                    <!-- <div class="dates">
                        <div>
                            <label for="arrival-date">Дата заїзду</label>
                            <input type="date" name="arrival-date" class="input">
                        </div>
                        <div>
                            <label for="departure-date">Дата виїзду</label>
                            <input type="date" name="departure-date" class="input">
                        </div>
                    </div> -->
                    <div class="search-guests">
                        <div>
                            <label for="guest-quantity">Кількість гостей</label>
                            <input type="text" name="guest_quantity" class="input">
                        </div>
                        <button class="submit"> Пошук </button>
                    </div>    
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="rooms">
                @include('inc.messages')
                <h1 id="start">
                    <img id="left" src="{{asset('/public/img/white_left.png')}}">
                    Номери
                    <img id="right" src="{{asset('/public/img/white_right.png')}}">
                </h1>
                <div class="rooms-grid">
                    @foreach($rooms as $room)
                        <div class="room">
                            <div class="room-img">
                                @php
                                    echo '<img src="/public/img/rooms/'.$room->image.'.png" alt="image" class="image">';
                                @endphp
                            </div>
                            <h3 class="room-title">
                                <a href="{{ route('room-info', $room->id) }}"> {{ $room->title }} </a>
                            </h3>
                            <div class="room-params">
                                <div class="room-person">
                                    <img src="{{asset('/public/img/room-person.png')}}" alt="people">
                                    <p> {{ $room->guests }} </p>
                                </div>
                                <div class="room-area">
                                    <img src="{{asset('/public/img/room-area.png')}}" alt="area">
                                    <p> {{$room->area}} м<sup>2</sup> </p>
                                </div>
                            </div>
                            <div class="room-price">
                                <h3> <a href="{{ route('room-info', $room->id) }}"> {{$room->price}}$ </a> </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="arrow-up">
            <a href="#start" class="up">
                <img src="{{asset('/public/img/Arrow_up.svg')}}" alt="Up" >
            </a>
        </div>
    </div>
@endsection