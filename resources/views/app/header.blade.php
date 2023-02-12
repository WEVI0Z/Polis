<div class="header__container">
    <header class="header">
        <a href="{{route("main")}}" class="header__img">
            <svg width="60" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#FBFBFB;}.cls-2{fill:#78A6C8;}</style></defs><title/><g id="Shield"><path class="cls-1" d="M28,6C19.51,6,16.84,2.46,16.82,2.43A1,1,0,0,0,16,2h0a1,1,0,0,0-.82.42S12.49,6,4,6A1,1,0,0,0,3,7v8.76c0,9.25,7.11,12,11.35,13.66l1.27.5a.94.94,0,0,0,.76,0l1.27-.5C21.89,27.77,29,25,29,15.76V7A1,1,0,0,0,28,6Z"/><path class="cls-2" d="M29,7v8.76c0,9.25-7.11,12-11.35,13.66l-1.27.5A1,1,0,0,1,16,30V2h0a1,1,0,0,1,.81.43S19.51,6,28,6A1,1,0,0,1,29,7Z"/></g></svg>
            <h1 class="header__slogan">Быстрое и выгодное страхование</h1>
        </a>
        <nav class="header__nav">
            <ul class="nav__list">
                @if (Auth::check())
                    @if(Auth::user()->role === "admin")
                        <li class="nav__item"><a href="">Кабинет администратора</a></li>
                    @endif
                    @if(Auth::user()->role === "manager")
                        <li class="nav__item"><a href="">Заявки</a></li>
                        <li class="nav__item"><a href="">Клиенты</a></li>
                    @endif
                    @if(Auth::user()->role === "client")
                        <li class="nav__item"><a href="{{route("personal")}}">Личный кабинет</a></li>
                    @endif
                    <li class="nav__item"><a href="{{route("logout")}}">Выйти</a></li>
                @else
                    <li class="nav__item"><a href="{{route("login")}}">Вход</a></li>
                    <li class="nav__item"><a href="{{route("register")}}">Регистрация</a></li>
                @endif
            </ul>
        </nav>
    </header>
</div>