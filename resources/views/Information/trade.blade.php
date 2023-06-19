@extends('layouts.layout')

@section('title', 'SmartOk')


@section('content')

<main class="content">
        <style>
        .about li {margin-top: 10px;}
        .about h2 {font-size: 18px; color: #1d2124}
    </style>

<div class="about container mb-5" style="max-width: 700px;">
    <h1 class="title-simple">Купить iPhone в Trade-In</h1>
    <div style="display: flex; align-items: center; padding: 0; margin: 30px 0 25px;">
        <i class="icon-available-updates" style="font-size: 30px; color: var(--global)"></i>
        <h2 class="m-0 ml-3">Как проходит процесс обмена телефона по Trade-In?</h2>
    </div>
    <ol class="ml-3">
        <li>Вы звоните нам в магазин: +7 (332) 565-77-00</li>
        <li>Сообщаете информацию о вашем старом Смартфоне:</li>
        <ul style="margin: 8px 0 16px 15px; list-style-type: circle;">
            <li>Какая модель, объем памяти, цвет;</li>
            <li>Полный ли комплект, сохранились ли оригинальная коробка, наушники, зарядное устройство;</li>
            <li>Как давно был куплен, действует ли еще гарантия;</li>
            <li>В каком состоянии: есть ли сколы, повреждения, царапины.</li>
        </ul>
        <li>Далее мы перезваниваем через 15-20 минут и говорим предварительную цену на ваш телефон по Trade-in.</li>
        <li>Вы приходите к нам в магазин, мы производим осмотр вашего телефона и называем конечную цену телефона по Trade-in.</li>
        <li>Если цена устраивает, то мы вместе с вами переносим данные на новый телефон (если нужно), а старый телефон возвращаем к заводским настройкам.</li>
        <li>Мы забираем старый телефон. Остаток за новый Смартфон вы можете оплатить наличными либо переводом.</li>
    </ol>
    <p style="margin: 30px 0 0;">
    У нас цена по Trade-in выгоднее в среднем на 5-10% чем у конкурентов. <br>
    А также лучшие цены на новые Смартфоны<br>
    </p>
    <p style="margin: 20px 0 0; color: #222">
        Возможен прием многих устройств помимо Samsung,iPhone в Trade-In
    </p>
</div>

</main>
@endsection 
