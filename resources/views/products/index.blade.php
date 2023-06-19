@extends('layouts.layout')

@section('content')

<main class="content">

    <style>
        .dropdown-menu {background-color: #fff !important;}

        .smaller-landing-h {
            font-size: 2.6vw;
        }
        @media(max-width: 700px) {
            .smaller-landing-h {
                font-size: 3.65vw;
            }
        }
        .mr-0 {margin-right: 0 !important;}

    </style>

    <div class="landing-shop">
        <img src="{{ asset('assets/front/images/samsung1.jpeg') }}" data-src="{{ asset('assets/front/images/samsung1.jpeg') }}" class="loaded" data-was-processed="true">
        <div class="overlay"></div>
        <h1 class="skrollable">
            <div>
                <div>
                    <span style="color: var(--global);">Оригинальная</span> техника<span class="red-point mr-0">.</span>
                </div>
                <div class="smaller-landing-h">
                    Действительно <span style="color: var(--global);">низкие цены.</span><span style="color: #fff"></span>
                </div>
            </div>
        </h1>
    </div>


{{--        <div class="container my-5" style="max-width: 560px; font-weight: 500; ">--}}
{{--        </div>--}}
    <style>
        .ng-welcome-block {
            /*background: #202020; background: #0d4623; background: #3f3f3f;*/
            background-color: #3f3f3f;padding: 40px 0 10px;
        }
        @media (min-width: 1200px){
            .ng-welcome-block {
                background:
                    radial-gradient(100px circle at 10% 110px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(100px circle at 5% 600px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(120px circle at 7% 1020px,
                    #ffffff 50%,
                    transparent 51%),

                    radial-gradient(60px circle at 90% 100px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(140px circle at 94% 400px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(120px circle at 94% 800px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(100px circle at 96% 1170px,
                    #ffffff 50%,
                    transparent 51%);
                background-color: #3f3f3f;
            }
        }
        .ng-welcome-block h3 { padding: 30px 54px 40px}
        @media (max-width: 420px){
            .ng-welcome-block h3 {font-size: 22px !important;}
        }
        @media (max-width: 1200px){
            .ng-welcome-block h3 { padding: 48px 54px 40px;}
            .ng-welcome-block {
                background:
                    radial-gradient(54px circle at 2% 90px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(100px circle at 40% -10px,
                    #ffffff 50%,
                    transparent 51%),
                    radial-gradient(66px circle at 98% 180px,
                    #ffffff 50%,
                    transparent 51%);
                background-color: #3f3f3f;
            }
        }
    </style>


<div class="ng-welcome-block">
    <h3 class="text-center" style="font-weight: 600; font-size: 28px; color: #fff"><span style="color: #ff3d4b">Оригинальная техника</span> в SmartOk<span style="color: #ff3d4b">.</span></h3>
    <div class="items-list welcome-categories mt-4">
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/iPhone" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/foto2.jpg') }}" data-src="{{ asset('assets/front/images/foto2.jpg') }}" alt="Изображение Apple iPhone" title="Apple iPhone" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Apple</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Смартфоны</div>
                    <div class="price">От 29 990 ₽</div>
                </div>
            </a>
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/Samsung" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/samsung.jpg') }}" data-src="{{ asset('assets/front/images/foto2.jpg') }}" alt="Изображение Apple AirPods" title="Apple AirPods" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Samsung</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Смартфоны</div>
                    <div class="price">От 19 990 ₽</div>
                </div>
            </a>
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/Huawei" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/huawei.jpg') }}" data-src="{{ asset('assets/front/images/foto2.jpg') }}" alt="Изображение Apple Mac" title="Apple Mac" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Huawei</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Смартфоны</div>
                    <div class="price">От 9 990 ₽</div>
                </div>
            </a>
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/Honor" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/honor.jpg') }}" data-src="/storage/gallery/big/450.jpg" alt="Изображение Apple Watch" title="Apple Watch" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Honor</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Смартфоны</div>
                    <div class="price">От 10 490 ₽</div>
                </div>
            </a>
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/Xiaomi" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/xiaomi.jpg') }}" data-src="{{ asset('assets/front/images/foto2.jpg') }}" alt="Изображение Apple iPad" title="Apple iPad" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Xiaomi</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Смартфоны</div>
                    <div class="price">От 8 990 ₽</div>
                </div>
            </a>
                    <a class="card item-card zoomImg-on-hover" href="http://127.0.0.1/public/category/akssesyar" onclick="">
                <div class="image">
                    <img class="card-img loaded" src="{{ asset('assets/front/images/aks.jpg') }}" data-src="{{ asset('assets/front/images/foto2.jpg') }}" alt="Изображение Гаджеты" title="Гаджеты" data-was-processed="true">
                </div>
                <div class="card-content">
                    <div class="card-title">Акссесуары</div>
                    <div class="card-small-title" style="font-size: 14px; font-weight: 300;">Для смартфона</div>
                    <div class="price">От 390 ₽</div>
                </div>
            </a>
            </div>
    </div>

    <div class="container skrollable skrollable-after" style="margin-top: 90px">
        <h3 class="text-center" style="font-weight: 600; font-size: 26px; margin-bottom: 4px">Популярые товары<span class="red-point">.</span></h3>
        <div class="row">
        <div class="items-list">
            @foreach ($products as $product)

                                                                            <div class="card card-hoverable item-card">
    <a class="item-image" href="{{route('products.show',['slug'=>$product->slug])}}">
        <img src="{{$product->getImage()}}" data-src="{{$product->getImage()}}" alt="{{$product->title}}" title="{{$product->title}}" class="loaded" data-was-processed="true">
    </a>
    <a class="item-name" href="{{route('products.show',['slug'=>$product->slug])}}">
    {{$product->title}}
            </a>
    <div class="item-price">
                    <span class="main-price"> {{$product->price}} руб. </span>
                        <span class="old-price">@if ($product->old_price)@endif</span>
                        </div>

                        <form action="{{route('cart.add')}}" method="post" class="addtocart">
        @csrf<div class="item-footer item-footer-type1-1">
    @if($product->status)
        <div>В наличии</div>
        @else
        <div>Под заказ</div>
        @endif


        <div class="input-group" >
        <input type="hidden" class="" name="gty" value="1">
            <input type="hidden" name="product_id" value="{{$product->id}}">

     </div>
      <div class="button"> <button type="submit" class="btn btn-card-buy btn-block add-to-cart">
      <a class="" name="product_id"  onclick="{{$product->id}}">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="">
                            <path fill="currentColor"
                                d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"
                                class=""></path>
                        </svg>
                    </a>
    </button></div>
                    <!-- <a rel="nofollow" href="{{route('cart.add')}}" name="product_id" class="add-to-cart" onclick="{{$product->id}}" title="Купить"></a> -->
            </div> </form> </div>   @endforeach
                                                </div>
        </div>
        </div>


    <div id="welcome-reviews-presentation" style="margin-top: 88px">
            <div class="h2 h">Почему покупают <br> именно у нас<span style="color: var(--global); font-weight: 800;">?</span></div>
            <div style="background: #192634; background: #181b1e; background: #202020;">
                <div class="review-feature-block">
                    <div class="feature" style="color: #ddd;">
                        <div>
                            Действительно <div style="display: inline-block">низкие цены</div><span class="red-point">.</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-header">
                            <div class="review-avatar review-from-2gis"></div>
                            <div class="review-author-name">
                                Наталия Фирстова
                                <div class="review-stars">
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-body">
                        Хороший магазин, отличный сервис! За 6 лет уже приобрела 3 телефона в SmartOk и всем советую сюда сходить при выборе телефона! Спасибо вам огромное!!! <br><b>Цены ниже чем в других магазинах.</b> Большой ассортимент. И подскажут и покажут
                        </div>
                        <div class="review-btn">
                            <a class="btn btn-link text-muted btn-link-arrow p-0" target="_blank" href="https:/2gis.ru/tyumen/firm/1830116630073466/tab/reviews">Читать все отзывы на 2ГИС <i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: #e7e7e7;">
                <div class="review-feature-block">
                    <div class="feature">
                        <div>
                            Высокие стандарты обслуживания и индивидуальный подход<span class="red-point">.</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-header">
                            <div class="review-avatar review-from-2gis"></div>
                            <div class="review-author-name">
                                Карина
                                <div class="review-stars">
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                </div>
                            </div>
                        </div>

                        <div class="review-body">
                            Очень довольна покупкой в данной организации - <b>все доступно объяснили</b> (учитывая, что я не технический человек), <b>подобрали с учетом моих "хотелок"</b>, доставили быстро и предложили помощь по настройке. После покупки еще сопровождали советами - был вопросик. Были терпеливы, за что отдельное спасибо)
                            <br>
                            Я не частый клиент таких магазинов, но очень <b>приятно иметь дело с такими консультантами</b>
                        </div>
                        <div class="review-btn">
                            <a class="btn btn-link text-muted btn-link-arrow p-0" href="https:/2gis.ru/tyumen/firm/1830116630073466/tab/reviews">Читать все отзывы на 2ГИС <i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #202020;">
                <div class="review-feature-block">
                    <div class="feature" style="color: #ddd;">
                        <div>
                            Бесплатные услуги: от наклейки стекла до переноса данных на новый телефон<span class="red-point">.</span>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-header">
                            <div class="review-avatar review-from-2gis"></div>
                            <div class="review-author-name">
                                Лена
                                <div class="review-stars">
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                    <i class="icon-star-filled"></i>
                                </div>
                            </div>
                        </div>

                        <div class="review-body">
                            Что могу сказать про данный магазин, отличный! Когда заказала телефон через интернет, думала приеду забирать с какого то островка, но нет! На самом деле оказалось, Большой магазин со всякими фишками и плюшками для Samsung. Глаза разбегаются от выбора. Приехала я с определенной целью, забрать самсунг, и теперь хочу и другие устройсва от данного производителя! Раньше с самсунгами вообще не сталкивалась. <b>Рада что в магазине помогли с переносом данных! Упростили мне жизнь!</b> Купила самсунг и ушла с улыбкой до ушей, но скоро ждите меня с новым Визитом!!!Не последняя покупка!
                        </div>
                        <div class="review-btn">
                            <a class="btn btn-link text-muted btn-link-arrow p-0" href="https:/2gis.ru/tyumen/firm/1830116630073466/tab/reviews">Читать все отзывы на 2ГИС <i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #e7e7e7;">
            <div class="review-feature-block">
                <div class="feature">
                    <div>
                        Огромное количество товаров в наличии<span class="red-point">.</span>
                    </div>
                </div>
                <div class="review">
                    <div class="review-header">
                        <div class="review-avatar review-from-2gis"></div>
                        <div class="review-author-name">
                            SaIIIa72k
                            <div class="review-stars">
                                <i class="icon-star-filled"></i>
                                <i class="icon-star-filled"></i>
                                <i class="icon-star-filled"></i>
                                <i class="icon-star-filled"></i>
                                <i class="icon-star-filled"></i>
                            </div>
                        </div>
                    </div>

                    <div class="review-body">
                        Примерно год назад покупала iPhone 13. Смотрел в нескольких магазинах, <b>нигде кроме как у вас не было нужного цвета</b>, поэтому купил у вас. Похожая ситуация была с Mac этой весной, тоже нужен был срочно и поэтому взял в вашем магазине. Теперь по-умолчанию захожу в ваш интернет-магазин и покупаю именно в этом магазине. Кстати обслуживание ваше мне тоже нравится – не напрягаешься во время покупки вообще.
                    </div>
                    <div class="review-btn">
                        <a class="btn btn-link text-muted btn-link-arrow p-0" href="https:/2gis.ru/tyumen/firm/1830116630073466/tab/reviews">Читать все отзывы на 2ГИС <i class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>


</main>

@endsection
