@extends("app.app")

@section('content')
    @vite("resources/js/user/register.js")
    <section class="register">
        <form action="{{route("register")}}" method="POST" class="login__form form">
            @csrf
            
            <label for="login" class="form__label @error('login') incorrect @enderror">
                Логин
                <input type="login" name="login" id="login" class="form__input" value="{{old("login")}}">
                <p class="form__error-message">
                    @error('login') {{$message}} @enderror
                </p>
            </label>
            <label for="tel" class="form__label @error('tel') incorrect @enderror">
                Номер телефона
                <input type="tel" name="tel" id="tel" class="form__input" value="{{old("tel")}}">
                <p class="form__error-message">
                    @error('tel') {{$message}} @enderror
                </p>
            </label>
            <label for="email" class="form__label @error('email') incorrect @enderror">
                Электронная почта
                <input type="text" name="email" id="email" class="form__input" value="{{old("email")}}">
                <p class="form__error-message">
                    @error('email') {{$message}} @enderror
                </p>
            </label>
            <label for="password" class="form__label password @error('password') incorrect @enderror">
                <button class="form__show-pass">
                    <svg fill="#FBFBFB" width="30px" height="30px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="M960 1489.82c-348.474 0-668.545-202.323-841.298-529.918C291.455 632.306 611.526 429.984 960 429.984s668.545 202.322 841.298 529.918C1628.545 1287.497 1308.474 1489.82 960 1489.82Zm948.342-553.552C1720.645 558.648 1357.332 324 960 324c-397.333 0-760.645 234.648-948.342 612.268L0 959.902l11.658 23.634c187.697 377.62 551.01 612.268 948.342 612.268 397.333 0 760.645-234.648 948.342-612.268L1920 959.902l-11.658-23.634ZM960 1171.869c-116.9 0-211.967-95.067-211.967-211.967 0-116.9 95.067-211.967 211.967-211.967 116.9 0 211.967 95.067 211.967 211.967 0 116.9-95.067 211.967-211.967 211.967m0-529.918c-175.297 0-317.951 142.654-317.951 317.951 0 175.297 142.654 317.95 317.951 317.95 175.297 0 317.951-142.653 317.951-317.95S1135.297 641.951 960 641.951" fill-rule="evenodd"/>
                    </svg>
                </button>
                Пароль
                <input type="password" name="password" id="password" class="form__input password" value="">
                <p class="form__error-message">
                    @error('password') {{$message}} @enderror
                </p>
            </label>
            <button type="submit" class="form__submit button">Зарегистрироваться</button>
        </form>
    </section>
@endsection