@extends('layouts.layout')

@section('title')@parent Купить {{ $product->title }}
@endsection

@section('content')

<main class="content">
        <div class="container">
            <div class="breadcrumb-wrap row">
                <nav class="breadcrumb-nav px-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>

                        <li class="breadcrumb-item active">{{ $product->title }}</li>
                    </ol>
                </nav>
            </div>
            <h1 class="title-simple title-width-breadcrumb">Купить {{ $product->title }}</h1>
        <div class="product-single-top">
            <div id="gallery" class="rg-gallery"><div class="rg-view"><a href="{{ $product->title }}" class="rg-view-full"></a><a href="{{ $product->title }}" class="rg-view-thumbs rg-view-selected"></a></div>
                <div class="rg-image-wrapper">
                    <div class="rg-image"><img src="{{$product->getImage()}}"></div>
                    <a href="#" class="rg-image-nav-prev">Далее</a>
                    <a href="#" class="rg-image-nav-next">Назад</a>
                    <div class="rg-loading" style="display:none"></div>
                    <div class="rg-caption-wrapper">
                    </div>
                </div>
                <div class="rg-thumbs">
                    <div class="es-carousel-wrapper">
                        <ul>
                                                            <li class="selected">
                                    <a href="{{$product->getImage()}}" rel="nofollow">
                                        <img src="{{$product->getImage()}}" data-src="{{$product->getImage()}}" data-large="{{$product->getImage()}}" alt="Изображение" class="loaded" data-was-processed="true">
                                    </a>
                                </li>
                                                            <li>
                                    <a href="{{$product->getImage()}}" rel="nofollow">
                                        <img src="{{$product->getImage()}}" data-src="{{$product->getImage()}}" data-large="{{$product->getImage()}}" alt="Изображение" class="loaded" data-was-processed="true">
                                    </a>
                                </li>
                                                            <li>
                                    <a href="{{$product->getImage()}}" rel="nofollow">
                                        <img src="{{$product->getImage()}}" data-src="{{$product->getImage()}}" data-large="{{$product->getImage()}}" alt="Изображение" class="loaded" data-was-processed="true">
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
            <div class="product-single-summary">
                <div class="product-content-head">
                    <h2 class="product-title">{{ $product->title }}</h2>
                </div>
                <div class="product-content-body">
                                            <div class="product-guaranty">
                            <i class="icon-apple"></i>
                            <span class="font-weight-bold">
                        Официальная гарантия на 1 год
                    </span>
                        </div>
                                    </div>
                                    <div class="product-minimal-description font-regular">
                        <p>{{ $product->content }}</p>
                    </div>

                <div class="product-content-footer">

                                            <style>
                            .product-price {
                                background: #f7f7f7;
                                margin: 20px 0 8px;
                                border-radius: 12px;
                                padding: 20px 5.5% 22px 6.5% !important;
                                width: 100%;
                                max-width: 342px;
                                box-sizing: border-box;
                            }
                            .main-price { font-weight: 700 !important; }
                            .cash-price-tip {
                                font-weight: 400; padding: 0 0 0; font-size: 12px; color: #111; margin-top: -4px;
                                white-space: nowrap;
                            }
                            .non-cash-price-tip { font-size: 11px; font-weight: 400;}
                            @media (max-width: 450px) {
                                .cash-price-tip, .non-cash-price-tip {font-size: 11px; }
                            }

                            .found-cheaper-block {
                                font-weight: 500;
                                font-size: 13px;
                                margin-bottom: 2px;
                                background: #f7f7f7;
                                border-radius: 12px;
                                padding: 11px 5% 12px 5.5%;
                                display: inline-block;
                                white-space: nowrap;
                                min-width: 247px;
                                box-sizing: content-box;
                            }
                        </style>
                        <div class="product-price">
                            <div>
                            @if($product->old_price)
                                <span class="main-price">@price_format($product->old_price)  ₽</span>
                            </div>
                            <div class="cash-price-tip">
                                Цена со скидкой при оплате наличными<button onclick="" class="tip-btn" style="margin-left: 3px; font-size: 15px" data-toggle="tooltip" data-trigger="manual" data-placement="top" data-html="true" data-title="
                            <p><b>Скидка для следующих способов оплаты:</b> наличный расчет, перевод на карту банка.</p>
                            <p><b>Данная скидка не предоставляется:</b> при оплате картой по терминалу или оплате юр. лицом.</p>
                            <p><b>Почему так?</b> Мы стараемся обеспечить для вас не только лучший сервис, но и максимально низкие цены, в связи с этим наша наценка для многих товаров меньше, чем комиссии, которые взимают банки. Поэтому мы ввели дополнительную скидку для способов оплаты, не имеющих комиссии.</p>"><i class="icon-help_outline"></i></button>
                            </div>
                            <div>
                                <div style="font-weight: 500; padding: 14px 0 0; color: #4f4f4f;">
                                    <span style="font-size: 14px">+8% к стоимости </span>@endif

                                    <div class="non-cash-price-tip">Цена при безналичной оплате</div>

                                </div>
                            </div>

                        </div>
                                                                <div class="found-cheaper-block">
                            Нашли дешевле? Снизим Цену!
                            <button class="tip-btn" style="margin-left: 5px;" data-toggle="tooltip" data-trigger="manual" data-placement="top" data-html="true" data-title="
                            <p>Мы уверены в своих ценах. И точка.</p>
                            <p>Нашли аналогичный товар в другом магазине Тюмени по более низкой цене? Собщите нам, и мы сделаем цену <span class='tooltip-red-text'>еще ниже, чем у конкурента.</span></p>
                            <a class='tooltip-btn-more btn-link-arrow' href='{{route('foundcheaper')}}'>Подробнее<i class='icon-right-arrow'></i></a>"><i class="icon-help_outline"></i></button>
                        </div>
                        <form action="{{route('cart.add')}}" method="post" class="addtocart">
        @csrf <div class="input-group" >
        <input type="hidden" class="" name="gty" value="1">
            <input type="hidden" name="product_id" value="{{$product->id}}">
                             <div class="buy-block">
                             <div class="input-group" >
        <input type="hidden" class="" name="gty" value="1">
            <input type="hidden" name="product_id" value="{{$product->id}}">

     </div>
      <div class="button"> <button type="submit" class="btn btn-success btn-overlay single-product-to-cart  to-cart-smaller add-to-cart">
      <a class="" name="product_id"  onclick="{{$product->id}}">   Купить </a>
    </button></div>
                                <!-- <a href=""  class="btn btn-success btn-overlay single-product-to-cart  to-cart-smaller ">
                                 Купить                                                                                             </a> -->
                                 @if($product->status)
                                 <div class="nal-info">
                            <i class="icon-checkmark" style="font-size: 20px; margin-right: 3px; position: relative; top: -2px"></i>
                            В наличии</div>
                    </div>
                    @else
                    <div class="nal-info">
                            <i class="icon-checkmark" style="font-size: 20px; margin-right: 3px; position: relative; top: -2px"></i>
                            В наличии</div>
                    </div>
        @endif
                                            <div style="font-size: 13px; margin-top: 26px; font-weight: 500; display: flex; align-items: center; line-height: 17px;">
                            <i class="icon-in-transit" style="font-size: 26px; margin-right: 14px; position: relative; top: -1px"></i>
                                <div>Доступна бесплатная экспресс-доставка за 1 час по Тюмени<span class="red-point">.</span></div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
    <style class="">

        .related-items {
            margin-bottom: 100px;
        }
        .related-items h2 {
            margin: 0 0 16px 3.2%;
            font-size: 26px;
            font-weight: 300;
            width: 100%;
        }

        .bottom_breif {
            line-height: 24px;
            font-weight: 500;
            max-width: 735px;
            text-align: center;
            width: 100%;
            margin: 48px auto 104px;
            padding: 0 4%;
            border-radius: 10px;
            font-size: 16px;
            white-space: pre-wrap;
            box-sizing: border-box;
        }
    </style>
                    <!-- <div class="chars container">
            <h2>Характеристики</h2>
            <div class="charsection">
<h4>Внешний вид</h4>
<p>Материал корпуса: Титан</p>
<p>Ремешок: Спортивный</p>
<p>Цвет ремешка: Черный</p>
<p>Задняя панель из керамики и сапфирового стекла (GPS + Cellular)</p>
</div>
<div class="charsection">
<h4>Размеры</h4>
<p>Длина: 49 мм</p>
<p>Ширина: 44 мм</p>
<p>Толщина: 14,4 мм</p>
<p>Вес: 61,3 г</p>
</div>
<div class="charsection">
<h4>Процессор</h4>
<p>Система S8 с 64-битным двухядерным процессором</p>
<p>Чип W3 для беспроводной связи</p>
<p>Чип U1 для широкополосной связи</p>
</div>
<div class="charsection">
<h4>Дисплей</h4>
<p>49-мм OLED-дисплей Retina LTPO Always-on</p>
<p>Разрешение 410x502 пикселей</p>
<p>Площадь дисплея 1164 кв. мм.</p>
<p>Яркость до 2000 нит</p>
</div>
<div class="charsection">
<h4>Общее характеристики</h4>
<p>L1 и L5 GPS, Galileo, QZSS, BeiDou и ГЛОНАСС</p>
<p>Всегда включенный альтиметр</p>
<p>Водонепроницаемость до 100 метров</p>
<p>32 ГБ встроенной памяти (GPS, GPS + сотовая связь)</p>
<p>Динамик на 40% громче, чем в Series 8</p>
<p>Массив из трех микрофонов с формированием луча и подавлением шума ветра</p>
<p>LTE + UMTS (GPS + сотовая связь)</p>
<p>Wi-Fi 802.11b/g/n 2,4 ГГц и 5 ГГц</p>
<p>Bluetooth 5.3</p>
</div>
<div class="charsection">
<h4>Датчики</h4>
<p>Датчик кислорода в крови </p>
<p>Электрический датчик сердца</p>
<p>Оптический датчик сердца третьего поколения</p>
<p>Международный экстренный вызов</p>
<p>Экстренный SOS</p>
<p>Акселерометр с ускорением до 256 g с функциями обнаружения падений и автокатастроф</p>
<p>Датчик освещенности</p>
<p>Гироскоп с широким динамическим диапазоном</p>
</div>
<div class="charsection">
<h4>Питание и аккумулятор</h4>
<p>До 36 часов автономной работы или 18 часов в сети LTE</p>
<p>USB-C магнитный кабель для быстрой зарядки</p>
</div>
<div class="charsection">
<h4>Комплект поставки</h4>
<p>Apple Watch Ultra</p>
<p>Ремешок</p>
<p>Магнитное зарядное устройство для быстрой зарядки Apple Watch — кабель USB-C (1 м)</p>
</div>
        </div>

     -->
</main>


  @endsection
