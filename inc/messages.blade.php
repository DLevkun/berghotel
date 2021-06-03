@if($errors->any())
    <ul>
        <div class="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @if($checkDates)
                <li>Неправильне введення дати. Перевірте, щоб дата заїзду була перед датою виїзду</li>
            @endif
        </div>
    </ul>
@endif

<!-- @if(session('success')) 
    <script>
        alert("Бронювання успішне! Чекайте на телефонний дзвінок для підтвердження.");
    </script>
@endif -->