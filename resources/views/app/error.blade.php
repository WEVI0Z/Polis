@extends('app.app')

@section('content')
    @vite("resources/js/app/error.js");
    <section class="error">
        <h2 class="error__slogan">
            Произошла ошибка
        </h2>
        <p class="error__status">
            {{$error ?? "Страница не найдена"}}
        </p>
    </section>
@endsection