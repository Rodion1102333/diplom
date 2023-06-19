@extends('layouts.layout')

@section('title', 'SmartOk')


@section('content')
<main class="content">
        <style>
        .found-cheaper {
            max-width: 750px;
        }
        .found-cheaper h1 {
            font-size: 36px;
            font-weight: 700;
            padding: 32px 0 2px;
            margin: 0;
        }
        .found-cheaper h3 {
            font-weight: 700;
            font-size: 22px;
            margin: 20px 0 8px;
        }
        .found-cheaper h4 {
            font-weight: 700;
            font-size: 16px;
            margin: 8px 0 1px;
        }
        .found-cheaper p {
            font-size: 16px;
            color: #111;
            padding-bottom: 4px;
            line-height: 25px;
        }

        @media (max-width: 640px) {
            .found-cheaper h1 {
                font-size: 24px;
            }
            .found-cheaper h3 {
                font-size: 17px;
            }
            .found-cheaper h4 {
                font-size: 15px;
            }
            .found-cheaper p {
                font-size: 14px;
            }
        }
    </style>
<div style="background: #30343a; color: #fff; margin-top: 0 !important; padding: 0 0 34px;">
    <div class="found-cheaper container" style=" margin-top: 0 !important; margin-bottom: 0;">
        <h1>Мы уверены в своих ценах. И точка<span class="red-point">.</span></h1>
        <h3 style="font-weight: 600;">Нашли дешевле? <span style="color: var(--global); ">Снизим цену!</span></h3>
        <p style="color: #fff;">
            Нашли аналогичный товар в другом магазине Тюмени по более низкой цене? Сообщите нам, и мы сделаем цену <span style="color: var(--global); font-weight: 500;">еще ниже, чем у конкурента</span>, сделав скидку в размере <span style="color: var(--global); font-weight: 500;">110% от разницы</span> нашей цены с ценой конкурента.
        </p>
    </div>
</div>
<div class="found-cheaper container" style="margin-bottom: 70px; margin-top: 34px;">
    <div class="w-auto">
        <h3>Как получить скидку?</h3>
        <p>
            Вы можете получить скидку предоставив информацию о цене магазина-конкурента любым удобным для вас способом:
        </p>
            <h4>1. При оформлении заказа в корзине</h4>
            <p>
                При оформлении заказа через корзину на нашем сайте вставьте в поле «комментарий к заказу» ссылку на страницу аналогичного товара на сайте конкурента.
            </p>
            <h4>2. По телефону</h4>
            <p>
                Позвоните нам по телефону, скажите название магазина, в котором цена ниже, чем в SmartOk. Наши менеджеры проверят информацию и оперативно перезвонят для подтверждения скидки.
            </p>
            <h4>3. Через чат, мессенджеры и соцсети</h4>
            <p>
                Отправьте ссылку на товар другого магазина, связавшись с нами через удобный для вас мессенджер, социальную сеть.
            </p>
            <h4>4. В нашем оффлайн магазине</h4>
            <p>
                Загляните в магазин, покажите менеджеру страницу конкурента с ценой меньшей, чем у нас, и получите скидку.
            </p>

        <h3>Как рассчитывается размер скидки?</h3>
        <p>
            Допустим, в нашем магазине Samsung стоит 100 000, а в магазине конкурента 95 000.<br>
            Разница в цене: 100 000 - 95 000 = 5 000<br>
            Скидка будет равна 110% от разницы в цене:<br>
            5 000 x 110% = 5 500<br>
            Итоговая стоимость получится 100 000 - 5 500 = 94 500, т.е. на 500 дешевле чем у конкурента<br>
        </p>
        <h3>Условия акции:</h3>
        <p>
            - Товар должен быть полностью аналогичный, с точно такими же характеристиками (модель, цвет, объем памяти и т.п.)<br>
            - Магазин конкурента должен находиться в Тюмени.<br>
            - Товар должен быть у конкурента в наличии.<br>
            - Данная скидка не суммируется с любыми другими акциями и скидками.<br>
        </p>
    </div>
</div>
</main>
@endsection 
