@extends("app.app")

@section('content')
    @vite("resources/js/user/client/personal.js")
    <section class="personal">
        <h2 class="personal__title">
            {{$title ?? "Личный кабинет"}}
        </h2>

        <ul class="personal__insurances">
            <li class="personal__insurance">
                <div class="insurance__type">

                </div>
                <h3 class="insurace__name">
                    Страховка автомобиля
                </h3>
                <ul class="insurance__info">
                    <li class="info__item">Владелец: Гаркавый Алексей</li>
                    <li class="info__item">Номер владельца: +375333416878</li>
                    <li class="info__item"></li>
                    <li class="info__item"></li>
                </ul>
            </li>
        </ul>
    </section>
@endsection