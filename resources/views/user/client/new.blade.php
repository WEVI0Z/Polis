@extends("app.app")

@section('content')
    @vite("resources/js/user/client/new.js")
    <section class="register">
        <form action="{{route("new-order")}}" method="POST" class="new-order__form form">
            @csrf
            <label for="type" class="form__label checkbox @error('type') incorrect @enderror">
                Тип заявки
                <label for="card">
                    Страховка авто
                    <input type="radio" name="type" id="car" class="form__radio" value="car" checked>
                </label>
                <label for="health">
                    Страховка здоровья
                    <input type="radio" name="type" id="health" class="form__radio" value="health">
                </label>
                <label for="house">
                    Страховка имущества
                    <input type="radio" name="type" id="house" class="form__radio" value="house">
                </label>
                <p class="form__error-message">
                    @error('type') {{$message}} @enderror
                </p>
            </label>

            <label for="expiration" class="form__label @error('expiration') incorrect @enderror">
                Срок действия (дни)
                <input type="text" name="expiration" id="expiration" class="form__input" value="{{old("expiration")}}">
                <p class="form__error-message">
                    @error('expiration') {{$message}} @enderror
                </p>
            </label>

            <button type="submit" class="form__submit button">Создать</button>
        </form>
    </section>
@endsection