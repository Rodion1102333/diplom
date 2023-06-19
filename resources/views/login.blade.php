@extends('layouts.layout')

@section('title', 'First Apple')


@section('content')
    {{--  Style Login  Form--}}
    <link rel="stylesheet" href="{{ asset('assets/front/css/login-register.css') }}">
    {{----}}

    <form action="{{route('login')}}" method="post">
        @csrf
        <section class="vh-100" style="background-color: #202326">
            <div class="container">
                <div class="row">


                    <div class="signup">
                        <form>
                            <label for="chk" aria-hidden="true">Вход</label>
                            <input type="email" id="email" placeholder="Почта" name="email"
                                   required/>
                            <input type="password" id="password" placeholder="Пароль"
                                   name="password"/>
                            <input type="password" id="password" placeholder="Повторения пароля"/>
                            <button class="login-button" type="submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>

    @if($errors->any())
        <div class="error-message">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="error" >
            {{session('success')}}
        </div>
    @endif



    @if(session()->has('errors'))
        <div class="error-message">
            {{session('errors')}}
        </div>
    @endif

    @if(session()->has('success'))
        <div class="error-message">
            {{session('success')}}
        </div>
    @endif

@endsection


