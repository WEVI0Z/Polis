@extends("app.app")

@section('content')
    @vite("resources/js/user/client/personal.js")
    <section class="personal">
        <nav class="personal__nav nav">
            <h2 class="personal__title">
                {{$title ?? "Личный кабинет"}}
            </h2>
            <a href="{{route("new-order")}}" class="button">
                Новая заявка
            </a>
        </nav>

        <ul class="personal__insurances">
            @foreach ($orders as $order)
                <li class="personal__insurance">
                    @if ($order->type === "car")
                        <div class="insurance__type car">
                            <svg fill="#326789" width="100px" height="100px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <title>car</title>
                                <path d="M27 22h-23c-1.104 0-2-0.896-2-2v-5c0-1.104 0.896-2 2-2h1c0 0 1.479-4.5 1.916-6s0.896-2 2.001-2h13.166c1.104 0 1.438 0.312 2 2s1.917 6 1.917 6h1c1.104 0 2 0.896 2 2v5c0 1.104-0.896 2-2 2zM9 20h13v-1h-13v1zM22 13c0-1.104-0.896-2.125-2-2.125s-2 1.021-2 2.125c0 0.026 4 0.026 4 0zM9 18h13v-1h-13v1zM9 16h13v-1h-13v1zM4.062 17c0 1.104 0.896 2 2 2s2-0.896 2-2-0.896-2-2-2-2 0.896-2 2zM23.083 7c-0.25-0.688-0.447-1-1-1h-6.083v1h0.5c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5h-2c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h0.5v-1h-6.083c-0.553 0-0.751 0.125-1 1-0.251 0.875-1.917 6-1.917 6h11.46c0.023-1.364 1.13-2.643 2.495-2.643s2.472 1.278 2.496 2.643h2.549c0 0-1.667-5.312-1.917-6zM24.938 15.062c-1.104 0-2 0.896-2 2s0.896 2 2 2 2-0.896 2-2-0.896-2-2-2zM7 25.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5v-2.5h3v2.5zM27 25.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5v-2.5h3v2.5z"></path>
                            </svg>
                            <h3 class="insurace__name">
                                Страховка автомобиля
                            </h3>
                        </div>
                    @endif
                    @if ($order->type === "health")
                        <div class="insurance__type health">
                            <svg fill="#326789" width="100px" height="100px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M26 0C25.449219 0 25 0.449219 25 1L25 3C25 3.550781 25.449219 4 26 4C26.554688 4 27 3.550781 27 3L27 1C27 0.449219 26.554688 0 26 0 Z M 18.9375 2.9375C18.683594 2.9375 18.414063 3.023438 18.21875 3.21875C17.828125 3.609375 17.828125 4.234375 18.21875 4.625L19.625 6.0625C19.820313 6.257813 20.085938 6.34375 20.34375 6.34375C20.601563 6.34375 20.867188 6.257813 21.0625 6.0625C21.453125 5.671875 21.453125 5.015625 21.0625 4.625L19.625 3.21875C19.429688 3.023438 19.191406 2.9375 18.9375 2.9375 Z M 33.0625 2.9375C32.808594 2.9375 32.570313 3.023438 32.375 3.21875L30.9375 4.625C30.546875 5.015625 30.546875 5.671875 30.9375 6.0625C31.132813 6.257813 31.398438 6.34375 31.65625 6.34375C31.914063 6.34375 32.179688 6.257813 32.375 6.0625L33.78125 4.625C34.171875 4.234375 34.171875 3.609375 33.78125 3.21875C33.585938 3.023438 33.316406 2.9375 33.0625 2.9375 Z M 26 6C23.792969 6 22 7.792969 22 10L22 11L30 11L30 10C30 7.792969 28.207031 6 26 6 Z M 16 9C15.449219 9 15 9.449219 15 10C15 10.550781 15.449219 11 16 11L18 11C18.550781 11 19 10.550781 19 10C19 9.449219 18.550781 9 18 9 Z M 34 9C33.445313 9 33 9.449219 33 10C33 10.550781 33.445313 11 34 11L36 11C36.554688 11 37 10.550781 37 10C37 9.449219 36.554688 9 36 9 Z M 2.78125 13C1.253906 13 0 14.234375 0 15.75L0 40.25C0 41.765625 1.253906 43 2.78125 43L7 43C7 46.308594 9.691406 49 13 49C16.308594 49 19 46.308594 19 43L33 43C33 46.308594 35.691406 49 39 49C42.308594 49 45 46.308594 45 43L47.21875 43C48.746094 43 50 41.765625 50 40.25L50 33.25C50 31.324219 48.628906 29.363281 48.5 29.1875L39.46875 15.21875C39.445313 15.183594 39.402344 15.125 39.375 15.09375L39.1875 14.90625C38.414063 13.976563 37.640625 13 35.96875 13 Z M 32 18L38.84375 18L46 29L32 29 Z M 14 21L16 21L16 25L20 25L20 27L16 27L16 31L14 31L14 27L10 27L10 25L14 25 Z M 13 39C15.207031 39 17 40.792969 17 43C17 45.207031 15.207031 47 13 47C10.792969 47 9 45.207031 9 43C9 40.792969 10.792969 39 13 39 Z M 39 39C41.207031 39 43 40.792969 43 43C43 45.207031 41.207031 47 39 47C36.792969 47 35 45.207031 35 43C35 40.792969 36.792969 39 39 39Z"/></svg>
                            <h3 class="insurace__name">
                                Страховка здоровья
                            </h3>
                        </div>
                    @endif
                    @if ($order->type === "house")
                            <div class="insurance__type house">
                                <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 21.2488H21V9.97875C21 9.35875 20.72 8.77875 20.23 8.39875L19 7.43875L18.98 4.98875C18.98 4.43875 18.53 3.99875 17.98 3.99875H14.57L13.23 2.95875C12.51 2.38875 11.49 2.38875 10.77 2.95875L3.77 8.39875C3.28 8.77875 3 9.35875 3 9.96875L2.95 21.2488H2C1.59 21.2488 1.25 21.5888 1.25 21.9988C1.25 22.4088 1.59 22.7488 2 22.7488H22C22.41 22.7488 22.75 22.4088 22.75 21.9988C22.75 21.5888 22.41 21.2488 22 21.2488ZM6.5 12.7487V11.2487C6.5 10.6987 6.95 10.2487 7.5 10.2487H9.5C10.05 10.2487 10.5 10.6987 10.5 11.2487V12.7487C10.5 13.2987 10.05 13.7487 9.5 13.7487H7.5C6.95 13.7487 6.5 13.2987 6.5 12.7487ZM14.5 21.2488H9.5V18.4987C9.5 17.6687 10.17 16.9987 11 16.9987H13C13.83 16.9987 14.5 17.6687 14.5 18.4987V21.2488ZM17.5 12.7487C17.5 13.2987 17.05 13.7487 16.5 13.7487H14.5C13.95 13.7487 13.5 13.2987 13.5 12.7487V11.2487C13.5 10.6987 13.95 10.2487 14.5 10.2487H16.5C17.05 10.2487 17.5 10.6987 17.5 11.2487V12.7487Z" fill="#326789"/>
                                    </svg>
                                <h3 class="insurace__name">
                                    Страховка имущества
                                </h3>
                            </div>
                    @endif
                    <ul class="insurance__info">
                        <li class="info__item">Владелец: {{$user->login}}</li>
                        <li class="info__item">Действителен до {{Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $order->exp_date)->format("d.m.y")}}</li>
                        <li class="info__item">Одобрено: {{$order->accepted ? "Да" : "Нет"}}</li>
                        <li class="info__item">Просрочено: {{NOW() <= $order->exp_date ? "Нет" : "Да"}}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </section>
@endsection