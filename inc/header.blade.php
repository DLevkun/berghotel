<header>
        <div class="header">
            <div class="logo">
                <a href="{{ route('home') }}"> <img src="{{asset('/public/img/logo.svg')}}" alt="Berg.hotel logo"> </a>
            </div>
            <div class="burger">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
                <span class="fourth"></span>
            </div>
            <div class="menu">
                <div class="navbar">
                    <div class="main">
                        <a href="{{ route('home') }}">Головна</a>
                    </div>
                    <span>|</span>
                    <div class="rooms">
                        <a href="{{ route('rooms-container') }}">Номери</a>
                    </div>
                    <span>|</span>
                    <div class="tours">
                        <a href="{{ route('tours-container') }}">Тури</a>
                    </div>
                </div>
                <div class="btn-book-room">
                    <a href="{{ route('rooms-container') }}"> Забронювати <span> номер </span> </a>
                </div>
            </div>
        </div>
    </header>