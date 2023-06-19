@extends('layouts.layout')

@section('title', 'Корзина')


@section('content')

    <main class="content">


        <noscript>
            У вас по какой-то причине отключен JavaScript. Без него корзина не работает. Но вы можете сделать заказ по
            телефону!
        </noscript>

        <div class="container cart">
            <h1 class="title-simple">Корзина</h1>
            <div id="cartpage" style="visibility: visible;">
                <div class="row">
                    <div class="col-lg-8">
                        @if(!empty(session('cart')))
                            <div class="box shadow table-cart" style="">
                                <div class="table-flex">
                                    <div class="table-flex-body">

                                        @foreach(session('cart') as $item)
                                            <div class="table-flex-row row">
                                                <div class="col-12 col-md-7">
                                                    <div class="cart-item media">
                                                        <figure class="cart-item-image mb-0 mr-3">
                                                            <a href="{{ route('products.show',['slug'=>$item['slug']]) }}">
                                                                <img src="{{$item['img']}}" alt="Изображение"
                                                                     title="{{$item['title']}}"></a></figure>
                                                        <div class="media-body cart-item-content">
                                                            <div class="d-flex align-items-center">
                                                                <div class="cart-item-title-wrap mr-2">
                                                                    <a href="{{ route('products.show',['slug'=>$item['slug']]) }}">{{$item['title']}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="product-price-holder d-flex align-items-center flex-row mt-0">
                                                        <div class="product-price">
                                                            <div class="product-price-Discount">{{$item['price']}}</div>
                                                        </div>
                                                        <div class="add-to-card-holder d-flex align-items-center ml-2">
                                                            <div class="item_counter ml-3"><span class="dec_wrap">
                                                                        <button type="button" class="dec_button"><i
                                                                                class="icon-back"></i>
                                                    </button>
                                                </span>
                                                                <span class="item_counter_count">
                                                    <input type="number" min="1" class="input-cart-count"></span>
                                                                <span class="inc_wrap"><button type="button"
                                                                                               class="inc_button">
                                                        <i class="icon-forward"></i></button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="cart-item-remove font-lg ml-auto" href="{{ route ('cart.del.item', ['product_id'=>$item['product_id']])}}">
                                                        <i class="icon-cancel" ></i></a></div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div></div>
                    <!---->
                    <div class="col-lg-4 mt-3 mt-lg-0">
                        <div class="sidebar has-ajax-filtering">
                            <div class="box shadow shop-cart-detail">
                                <h3 class="font-md font-weight-normal pb-2 pt-1">Способ получения</h3>
                                <div class="d-block shiping-items">
                                    <div class="widget-labels-list">
                                        <label class="btn-radio">
                                            <input checked="checked" type="radio" name="ship[]" value="gogol"
                                                   class="btn-radio-input">
                                            <span class="btn-radio-toggle"></span>
                                            <span class="btn-radio-title">Магазин на Пушкина, 1</span>
                                        </label>
                                        <label class="btn-radio">
                                            <input type="radio" name="ship[]" value="delivery" class="btn-radio-input">
                                            <span class="btn-radio-toggle"></span> <span class="btn-radio-title">Бесплатная доставка</span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="font-md font-weight-normal pb-2 pt-0">Способ оплаты</h3>
                                <div class="d-block shiping-items">
                                    <div class="widget-labels-list">
                                        <label class="btn-radio">
                                            <input checked="checked" type="radio" name="payment[]" value="cash"
                                                   class="btn-radio-input"> <span class="btn-radio-toggle"></span>
                                            <span class="btn-radio-title">Наличные или перевод</span></label> <label
                                            class="btn-radio"><input type="radio" name="payment[]" value="non_cash"
                                                                     class="btn-radio-input"> <span
                                                class="btn-radio-toggle"></span> <span class="btn-radio-title">Картой (при получении)</span></label>
                                    </div>
                                </div>
                                <hr>

                                <div class="d-flex align-items-center mt-3">
                                    <div class="col-label font-weight-bold font-md">Итого</div>
                                    <div
                                        class="col-value ml-auto font-weight-semibold font-lg">{{session('cart_total')}}</div>
                                </div>
                                <p class="font-regular text-muted font-weight-light py-0"></p>
                                <p class="font-regular font-weight-light py-3" style="line-height: 1.32rem;"></p>
                                <form action="{{route('cart.checkout')}}" target="_blank">
                                    <div class="shop-cart-bottom">
                                        <button class="btn btn-lg btn-has-icon btn-block mb-2 btn-checkout">  Перейти к оформлению</button>
                                </form>

                               <!----></div>
                        </div>
                    </div>
                </div>
            </div> <!----> <!----></div>


        @else
            <div id="cartpage"><!---->
                <div class="mt-5" id="empty"><h3>Корзина пуста</h3> <a href="{{route('home')}}"
                                                                       class="text-primary text-link-underline">Перейти
                        на страницу "Главная"</a></div> <!----></div>@endif</div>
    </main>
@endsection


