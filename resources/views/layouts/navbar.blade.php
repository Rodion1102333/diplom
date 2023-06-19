<div class="mheader-menu header-menu collapse navbar-collapse header-menu-sliding-onMobile">
    <div class="logo">
        @if(Auth::check() && Auth::user()->is_admin )
        <a href="{{route('admin')}}">@endif
            <img src="{{ asset('assets/front/images/logo.svg') }}" title="SmartOk" alt="SmartOk">
        </a>
        <div class="phone-number">+7 (332) 565-77-00</div>
    </div>

    <div class="m-menu-nav scroll-wrapper sidebar-menu-list scrollbar-inner visible-on-hover scrollbar-on-left">
        <div class="m-menu-catalog">
        @foreach($categories as $category)
                            <a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                            @endforeach
</div>

        <div class="m-menu-info">
            <a href="{{route('delivery')}}">Доставка и оплата</a>
            <a href="{{route('garantii')}}">Гарантия</a>
            <a href="{{route('trade')}}">Trade-in</a>
            <a href="{{route('contacts')}}">Контакты</a>
            @auth
                @if(Auth::check() && Auth::user()->is_admin )
                                <a href="{{route('admin')}}"> Админ Панель</a>@endif
                          <a href="{{route('logout')}}"> Выход</a>
                                @endauth
        </div>
    </div>
</div>
<div id="mtel" style>
    <span id="mtel-time">10:00-18:00 по ТМН</span>
    <span id="mtel-phone">+7 (332) 565-77-00</span>
</div>
<header class="mheader header">
    <a id="m-menu-btn" class="mmenu-toggle">
        <i class="icon-menu"></i>
    </a>
    <a href="{{route('home')}}" id="m-logo">
        <img src="{{ asset('assets/front/images/logo.svg') }}" title="SmartOk" alt="SmartOk">
    </a>
    <div class="d-flex">
        <a id="m-cart-btn" href="{{route( 'cart.show' ) }}" rel="nofollow">
            <i class="icon-shopping-cart"></i> <span class="cart-amount">{{ session('cart_gty') ?? 0 }} </span>  </a>
                    </a>
        <a id="m-phone-btn" href="tel:+7 (332) 565-77-00" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 172 172" style=" fill:#000000; position: relative; right: 4px; bottom: 0px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"/><g fill="#ffffff"><path d="M121.69,102.5636c-2.32773,-1.36453 -5.18867,-1.33587 -7.50493,0.04013l-11.7304,6.98893c-2.62587,1.5652 -5.90533,1.38173 -8.31333,-0.4988c-4.1624,-3.2508 -10.86467,-8.7204 -16.69547,-14.5512c-5.8308,-5.8308 -11.3004,-12.53307 -14.5512,-16.69547c-1.88053,-2.408 -2.064,-5.68747 -0.4988,-8.31333l6.98893,-11.7304c1.38173,-2.31627 1.3932,-5.20013 0.02867,-7.52787l-17.21147,-29.40053c-1.6684,-2.84373 -4.98227,-4.24267 -8.1872,-3.4572c-3.1132,0.7568 -7.1552,2.60293 -11.39213,6.8456c-13.26693,13.26693 -20.3132,35.64413 29.57827,85.5356c49.89147,49.89147 72.26293,42.85093 85.5356,29.57827c4.2484,-4.2484 6.0888,-8.29613 6.85133,-11.41507c0.774,-3.1992 -0.602,-6.49013 -3.44,-8.1528c-7.0864,-4.1452 -22.37147,-13.09493 -29.45787,-17.24587z"/></g></g></svg>
        </a>
    </div>
</header>

<header>
    <div id="main-header">
        <div id="main-header-box" class="container">
            <a href="{{route('home')}}" id="logo">
                <img src="{{ asset('assets/front/images/logo.svg') }}" title="SmartOk" alt="SmartOk">
            </a>
            <div id="main-header-info">
                <div class="maininfo" >+7 (332) 565-77-00</div>
                <div class="extrainfo">10:00-18:00 по ТМН</div>
            </div>
            <div id="main-header-info">
                <div class="maininfo">Тюмень</div>
                <div class="extrainfo" style="font-size: 14px; white-space: nowrap">пл. Центральная<br>ул. Пушкина, 1</div>
            </div>
            <a href="{{route('delivery')}}">Доставка и оплата</a>
            <a href="{{route('garantii')}}">Гарантия</a>
            <a href="{{route('trade')}}">Trade-in</a>
            <a href="{{route('contacts')}}">Контакты</a>
            @guest()<a href="{{route('login')}}">Авторизация</a>@endguest
            @guest() <a href="{{route('register.create')}}">Регистрация</a>@endguest
        @auth
                @if(Auth::check() && Auth::user()->is_admin )
                    <a href="{{route('admin')}}"> Админ Панель</a>@endif
                         <a href="{{route('logout')}}"> Выход</a>
                                @endauth
        </div>
    </div>
    <div id="header-items-nav" class="header">
        <div class="container d-flex justify-content-between">
            <ul class="header-items-ul">
            @foreach($categories as $category)
                                    <li class="nav-item dropdown dropdown-hoverable">
                        <a class="nav-link dropdown-toggle dropdown-hover-toggle" href="{{ route('categories.show', ['slug' => $category->slug]) }}" data-toggle="dropdown">
                        {{ $category->title }}
                        </a>

                        <!-- <div class="dropdown-menu">
                            <ul>
                                                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro/">iPhone 14 Pro</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/iphone-14-pro-max/">iPhone 14 Pro Max</a>
                                    </li>
                            </ul>
                        </div> -->
                    </li>
                    @endforeach

            </ul>
            <a href="{{route( 'cart.show' ) }}" rel="nofollow" id="cart-btn">
                <i class="icon-shopping-cart"></i>
                Корзина
                <span class="cart-amount">{{ session('cart_gty') ?? 0 }} </span>  </a>
        </div>
    </div>
</header>







