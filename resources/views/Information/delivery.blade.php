@extends('layouts.layout')

@section('title', 'SmartOk')


@section('content')

<main class="content">
    
<div class="about container" style="margin-bottom: 70px">
    <h1 class="title-simple">Доставка и оплата</h1>
	<div class="d-flex flex-nowrap mt-5" style="font-size: 1em">
        <div style="width: 50px" class="mr-5">
            <i class="icon-in-transit" style="font-size: 50px; color: var(--global)"></i>
        </div>
        <style>
            .about h4 {font-size: 18px; font-weight: 500}
        </style>
        <div class="w-auto" style="font-size: 1.1em">
            <h3>Способы доставки<span class="red-point">.</span></h3>
            <h4><span style="color: var(--global); font-size: 24px">•</span> Бесплатная доставка по Тюмени</h4>
            <p>- Бесплатная <span class="font-weight-semibold">экспресс-доставка</span> за 1 час по Тюмени</p>
            <p>- Бесплатная доставка к нужному времени по Тюмени и окрестностям</p>
            <br>
            <h4><span style="color: var(--global); font-size: 24px">•</span> Забрать в магазине</h4>
            <p>- Самовывоз из магазина в Тюмени по адресу пл. Центральная ул. Пушкина, 1</p>
            <br>
            <h4><span style="color: var(--global); font-size: 24px">•</span>  Доставка по РФ</h4>
            <p>- Доставка в другие города РФ осуществляется транспортной компанией СДЭК и оплачивается покупателем. Стоимость доставки от 200р. Подробности уточняйте у наших менеджеров.</p>
        </div>
    </div>
    <div class="d-flex flex-nowrap mt-5">
        <div style="width: 50px" class="mr-5">
            <i class="icon-wallet" style="font-size: 50px; color: var(--global)"></i>
        </div>
        <div style="font-size: 1.1em">
            <h3>Способы оплаты<span class="red-point">.</span></h3>
                            <p>- Наличный расчет</p>
                <p>- Перевод на карту (Сбербанк, ВТБ, Тинькофф, Альфабанк)</p>
                <p>- Безналичный рассчет *</p>
                <div style="font-size: 1em; color: #555; margin-top: 8px">* При оплате наличными или с помощью перевода на карту предоставляется дополнительная скидка. При оплате картой по терминалу или оплате юр. лицом данная скидка не предоставляется.</div>
                <div style="font-size: .92em;color: #555; margin-top: 4px;"><span style="font-weight: 500">Почему так?</span> Мы стараемся обеспечить для вас не только лучший сервис, но и максимально низкие цены, в связи с этим наша наценка для многих товаров меньше, чем комиссии, которые взимают банки. Поэтому мы ввели дополнительную скидку для способов оплаты, не имеющих комиссии.</div>
                    </div>
	</div>
</div>
</main>
@endsection