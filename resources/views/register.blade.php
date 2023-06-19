@extends('layouts.layout')

@section('title', 'First Apple')

@section('content')

    <form action="{{route('register.store')}}" method="post">
        @csrf
        <link rel="stylesheet" href="{{ asset('assets/front/css/login-register.css') }}">
        <section class="vh-100" style="background-color: #202326">
            <div class="container">
                <div class="row">


                    <div class="signup">
                        <form>
                            <label for="" aria-hidden="true">Регистрация</label>
                            <input type="text" id="name" placeholder="Логин" name="name"
                                   class=""/>
                            <input type="email" id="email" placeholder="Почта" name="email"
                                   required/>
                            <input type="password" id="password" placeholder="Пароль"
                                   name="password"/>
                            <input type="password" placeholder="Повторения пароля"
                                   name="password_confirmation"/>
                            <button  class="register-button" type="submit">Войти</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </form>

    <div class="container ">
        <div class="row">

            @if(session()->has('success'))
                <div class="success"  style="background-color: black">
                    {{session('success')}}
                </div>
            @endif
        </div>
    </div>
    @yield('content')

@endsection



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>

