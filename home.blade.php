@extends('layouts.app')

@section('title')BergHotel @endsection

@section('css')
    <link rel="stylesheet" href="{{asset('/public/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/main-adaptive.css')}}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="main-section">
                <div class='logo'>
                    <img src="{{ asset('/public/img/logo.svg')}}" alt="Logo" width="750">
                </div>
                <p class="main-text"> Ваш найкращий відпочинок у Давосі </p>
                <div class="arrow">
                    <a class="down" href="#start"> 
                        <img src="{{ asset('/public/img/Arrow.png')}}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="intro">
                <div class="header-text">
                    <h2 id="start">
                        <img id="left" src="{{ asset('/public/img/triangle_left.png')}}">
                        ЕКОЛОГІЧНИЙ 
                        <img id="right" src="{{ asset('/public/img/triangle_right.png')}}">
                    </h2>
                    <h3> <span class="string"> готель з неймовірними </span> <span> пейзажами </span> </h3>
                </div>
                <div class="intro-block">
                    <div id="grid">
                        <img class="hotel-img" src="{{ asset('/public/img/block1_hotel.png')}}" alt="hotel" width="700">
                        <p id="first-par"> 
                            Якщо ви плануєте провести найкращу відпустку, насичену красою, релаксом і насолодою, то гірськолижний курорт
                            швейцарського Давосу - чудовий варіант, що підійде кожному. Європейський комфорт, зручне місце розташування, сучасні
                            умови проживання та витончений дизайн. 
                        </p>
                        <br>
                        <div id="second-par">
                            <p>
                                Усе це можна описати одним словом - "Berg.hotel". Ми зробимо все, щоб змусити Вас згадувати про цей відпочинок з
                                усмішкою і теплом на серці.
                            </p>
                            <br>
                            <p>
                                "Berg.hotel" - це синонім незабутнього відпочинку, що запам’ятається Вам назавжди.
                            </p>
                        </div>
                    </div>
                    <div class="intro-row">
                        <img class="eco-standard" src="{{ asset('/public/img/Eco standard.png')}}" alt="Eco standard">
                        <img class="mountain" src="{{ asset('/public/img/block1_mountain.png')}}" alt="Mountain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="main-feature">
                <div id="first-img" class="img-contain">
                    <img src="{{ asset('/public/img/feature-img1.png')}}" alt="Nature">
                </div>
                <div class="feature">
                    <h3>Наша родзинка</h3>
                    <p>
                        Ми, як сучасна і розвинута команда, дуже цінуємо екологію. Наш готель має сертифікат <span class="green-bold"> Greenkey Gold</span>. Це означає, що ми
                        шукаємо найбільш <span class="green-bold"> екологічні рішення </span> - не лише економія ресурсів, а й їх вторинне використання. У номерах встановлено
                        водозберігаючі крани, на даху - сонячні панелі. Усі матеріали є <span class="green-bold"> натуральними </span> і піддаються подальшій обробці, а сніданки
                        готуються лише з <span class="green-bold"> органічних </span> продуктів.
                    </p>
                </div>
                <div id="second-img" class="img-contain">
                    <img src="{{ asset('/public/img/feature-img2.png')}}" alt="Switzerland">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="why-berghotel">
                <div class="why-header">
                    <img class='question' src="{{asset('/public/img/question.png')}}" alt="question">
                    <h1>
                        <img src="{{ asset('/public/img/triangle_left.png')}}">
                        Чому саме Berg.hotel
                        <img src="{{ asset('/public/img/triangle_right.png')}}">
                    </h1>
                </div>
                <div class="reasons">
                    <div class="reason">
                        <div id="reason1" class="reason-number">
                            <h1>1</h1>
                        </div>
                        <div class="reason-text">
                            <h2>Екологія</h2>
                            <p>
                                Ми турбуємося не лише про Ваш комфорт, 
                                а й не забуваємо про навколишнє середовище. 
                                Тому з нами Ви теж долучитесь до
                                благої справи, допомога планеті - вірний 
                                шлях до її спасіння.
                            </p>
                        </div>
                    </div>
                    <div class="reason">
                        <div id="reason2" class="reason-number">
                            <h1>2</h1>
                        </div>
                        <div class="reason-text">
                            <h2>Широкий вибір</h2>
                            <p>
                                У нас Ваш відпочинок буде не лише приємним,
                                а й корисним для здоров’я. Тут Ви маєте можливість 
                                спробувати ектримальні зимові види спорту, а після 
                                цього насолодитися релаксом у спа, дати відпочити 
                                собі тілом і душею.
                            </p>
                        </div>
                    </div>
                    <div class="reason">
                        <div id="reason3" class="reason-number">
                            <h1>3</h1>
                        </div>
                        <div class="reason-text">
                            <h2>Гарантія якості</h2>
                            <p>
                                Обираючи нас, Ви обираєте комфорт і безпеку. 
                                Ви можете ознайомитися з усіма нормативними 
                                документами і відзнаками перед заїздом в готель. 
                                Ваш спокій - наша радість.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="proposal-main">
                <div class="proposal-header">
                    <h1>
                        <img src="{{ asset('/public/img/triangle_left.png')}}">
                        Наш готель пропонує
                        <img src="{{ asset('/public/img/triangle_right.png')}}">
                    </h1>
                </div>
                <div class="proposals">
                    <div class="proposal" id="rooms">
                        <div id='rooms' class="proposal-image">
                            <img src="{{ asset('/public/img/proposal1-part1.png')}}" alt="rooms">
                        </div>
                        <div id="rooms-text" class="rooms-text">
                            <h3>Комфортабельні <br> номери</h3>
                            <p>
                                Стильні та просторі кімнати оснащені усім 
                                необхідним для Вашого відпочинку. Кожен номер 
                                порадує Вас чудовим видом на
                                могутні безкраї гори.
                            </p>
                            <a href="{{route('rooms-container')}}">Переглянути номери</a>
                        </div>
                        <div id='rooms' class="proposal-image rooms-next">
                            <img src="{{ asset('/public/img/proposal1-part2.png')}}" alt="rooms">
                        </div>
                    </div>
                    
                    <div class="proposal" id="tours">
                        <div id='tours-left' class="proposal-image">
                            <img src="{{ asset('/public/img/proposal2-part1.png')}}" alt="rooms">
                        </div>
                        <div id="tours-text" class="rooms-text">
                            <h3>Спеціальні тури</h3>
                            <p>
                                Велика кількість різноманітних видів активного відпочинку на 
                                будь-який смак. Ви зможете отримати незабутню прогулянку в
                                горах або ж навіть провести там ніч в екстримальних умовах.
                            </p>
                            <a href="{{route('tours-container')}}">Переглянути тури</a>
                        </div>
                        <div id='tours-right' class="proposal-image">
                            <img src="{{ asset('/public/img/proposal2-part2.png')}}" alt="rooms">
                        </div>
                    </div>

                    <div class="proposal" id="celebrate">
                        <div id='celeb-left' class="proposal-image">
                            <img src="{{ asset('/public/img/proposal3-part1.png')}}" alt="rooms">
                        </div>
                        <div id="celeb-text" class="rooms-text">
                            <h3>Організація свят</h3>
                            <p>
                                Допомога у проведенні найкращого свята у Вашому житті. 
                                Наш персонал зробить усе можливе, щоб цей день став 
                                незабутнім для Вас і Вашої родини.
                            </p>
                            <a href="#">Дізнатись детальніше</a>
                        </div>
                        <div id='celeb-right' class="proposal-image">
                            <img src="{{ asset('/public/img/proposal3-part2.png')}}" alt="rooms">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="special">
                <h1>
                    <img id="left" src="{{asset('/public/img/triangle_left.png')}}">
                    Особливі пропозиції
                    <img id="right" src="{{asset('/public/img/triangle_right.png')}}">
                </h1>
                <div class="collage">
                    <img src="{{ asset('/public/img/skiing.png')}}" alt="Skiing">
                    <img src="{{ asset('/public/img/sauna.png')}}" alt="Sauna">
                    <img src="{{ asset('/public/img/pool_img.png')}}" alt="Pool">
                </div>
                <div class="special-btn">
                    <a href="#" class="proposal-btn">
                        Спортзал з видом на гори
                        <img src="{{ asset('/public/img/circle_arrow.png')}}" alt="arrow">
                    </a>
                    <a href="#" class="proposal-btn">
                        Лижі та сноуборд
                        <img src="{{ asset('/public/img/circle_arrow.png')}}" alt="arrow">
                    </a>
                    <a href="#" class="proposal-btn">
                        Спа, джакузі, басейни
                        <img src="{{ asset('/public/img/circle_arrow.png')}}" alt="arrow">
                    </a>
                    <a href="#" class="proposal-btn">
                        Новаторська кухня
                        <img src="{{ asset('/public/img/circle_arrow.png')}}" alt="arrow">
                    </a>
                </div>
                <div class="collage">
                    <img src="{{ asset('/public/img/sportsal.png')}}" alt="Sportsal">
                    <img src="{{ asset('/public/img/spa.png')}}" alt="Spa">
                    <img src="{{ asset('/public/img/food_img.png')}}" alt="Food">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="staff">
                <h3>
                    <img src="{{ asset('/public/img/white_tr_big.png')}}">
                    Висококваліфікований <br> персонал
                </h3>
                <p>
                    Наше найбільше бажання - <br> змусити Вас 
                    згадувати про цей <br> відпочинок з теплом 
                    і посмішкою
                    <img src="{{ asset('/public/img/white_tr_small.png')}}">
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="awards">
                <div class="stars">
                    <img src="{{ asset('/public/img/Рейтинг.png')}}" alt="Rating">
                </div>
                <h1>
                    <img id="left" src="{{ asset('/public/img/triangle_left.png')}}">
                    Berg.hotel - готель №1 у Швейцарії
                    <img id="right" src="{{ asset('/public/img/triangle_right.png')}}">
                </h1>
                <div class="awards-list">
                    <div class="award">
                        <div>
                            <img src="{{ asset('/public/img/award1.png')}}" alt="Hospitality">
                        </div>
                        <p>
                            П’ятизірковий готель №1 по версії 
                            International Hospitality Awards в 2019 
                        </p>
                    </div>
                    <div class="award">
                        <div>
                            <img src="{{ asset('/public/img/award2.png')}}" alt="Michelin" width="120">
                        </div>
                        <p>
                            Згідно з червоним путівником Michelin 
                            ресторан має 3 зірки
                        </p>
                    </div>
                    <div class="award">
                        <div>
                            <img src="{{ asset('/public/img/award3.png')}}" alt="GreenKey">
                        </div>
                        <p>
                            У 2020 році Berg.hotel отримав 
                            сертифікат Greenkey Gold
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="book-section">
                <h1>
                    <img id="left" src="{{ asset('/public/img/triangle_left.png')}}">
                    Ми чекаємо на вас
                    <img id="right" src="{{ asset('/public/img/triangle_right.png')}}">
                </h1>
                <a href="{{route('rooms-container')}}">
                    Забронювати номер
                    <img src="{{ asset('/public/img/circle_arrow.png')}}" alt="arrow" width="72">
                </a>
            </div>
        </div>
    </section>
@endsection