@extends('layouts.layout')


@section('title', 'Оформление заказа')



@section('content')
<main class="content">
    

<noscript>
    У вас по какой-то причине отключен JavaScript. Без него корзина не работает. Но вы можете сделать заказ по телефону!
</noscript>

<div class="container cart">
    <h1 class="title-simple">Корзина</h1>
    <div id="cartpage" style="visibility: visible;">
    <div class="row"><!----> <div class="col-lg-8">
        <div class="box shadow table-cart">
            <h3 class="font-md mb-4" style="padding-left: 4px;">Оформление заказа</h3> 
            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <form method="post" action="{{ route('cart.checkout') }}">
                                        @csrf
                <div class="form-group gr-form-group gr-form-group-dark gr-form-group-inside">
                    <input type="text" name="name" id="name" class="form-control" required>
                     <label class="gr-label">Имя получателя заказа</label>
                    </div>
                    
                     <div class="form-group gr-form-group gr-form-group-dark gr-form-group-inside">
                     <input type="text" id="phone" name="phone" class="form-control filled" required> 
                        <label for="name" class="gr-label">Номер телефона</label>
                    </div> 
                    <div class="form-group gr-form-group gr-form-group-dark gr-form-group-inside" >
                    <input type="text" name="address" id="address"class="form-control" required> <label for="address" class="gr-label">Адрес доставки (Улица, дом, квартира)</label>
                </div> 
                <div class="form-group gr-form-group gr-form-group-dark gr-form-group-inside">
                    <input type="email" name="email" id="email" class="form-control" required> <label for="email" class="gr-label">Email</label>
                </div> 
                <div class="form-group"><label for="note" class="gr-top-label border-none">Комментарий к заказу</label>
                 <textarea maxlength="1000" name="note" rows="1" class="form-control" required></textarea>
                </div>
            
             <p class="text-muted font-weight-light" style="font-size: 11px;">
             Нажимая на кнопку "Отправить" вы даете свое <a data-toggle="modal" data-target="#privacy-modal" class="btn-link text-link-underline" style="cursor: pointer;">согласие на обработку персональных данных</a> в соответсвии с <a href="{{route('privacy')}}" target="_blank" class="btn-link underline">политикой конфиденциальности</a>. Мы бережно относимся к вашим данным.</p></div></div>
              <div class="col-lg-4 mt-3 mt-lg-0">
                <div class="sidebar has-ajax-filtering">
                    <div class="box shadow shop-cart-detail">
                        <h3 class="font-md font-weight-normal pb-2 pt-1">Способ получения</h3> 
                        <div class="d-block shiping-items">
                            <div class="widget-labels-list">
                            <label class="btn-radio">
                                <input checked="checked" type="radio" name="ship[]" value="gogol" class="btn-radio-input" > 
                                <span class="btn-radio-toggle"></span> <span class="btn-radio-title">Магазин на Пушкина, 1</span>
                            </label> 
                           <label class="btn-radio"><input type="radio" name="ship[]" value="delivery" class="btn-radio-input"> 
                           <span class="btn-radio-toggle"></span> <span class="btn-radio-title">Бесплатная доставка</span>
                        </label>
                    </div>
                </div>
                 <hr>
                  <h3 class="font-md font-weight-normal pb-2 pt-0">Способ оплаты</h3> <div class="d-block shiping-items">
                    <div class="widget-labels-list">
                        <label class="btn-radio">
                            <input checked="checked" type="radio" name="payment[]" value="cash" class="btn-radio-input"> 
                            <span class="btn-radio-toggle"></span> <span class="btn-radio-title">Наличные или перевод</span>
                        </label> 
                        <label class="btn-radio"><input type="radio" name="payment[]" value="non_cash" class="btn-radio-input"> <span class="btn-radio-toggle"></span> 
                        <span class="btn-radio-title">Картой (при получении)</span>
                    </label>
                </div>
            </div>
        <div class="d-flex align-items-center mt-3"><div class="col-label font-weight-bold font-md">Итого</div>
         <div class="col-value ml-auto font-weight-semibold font-lg">{{session('cart_total')}}</div></div> <p class="font-regular text-muted font-weight-light py-0"></p> 
         <p class="font-regular font-weight-light py-3" style="line-height: 1.32rem;">Укажите, пожалуйста: имя, номер телефона</p> 
         <div class="shop-cart-bottom"><!----> <button id="order-btn" type="submit"  class="btn btn-lg btn-has-icon btn-block mb-2 btn-checkout"> 
                                Отправить <i class="icon-next-page"></i></button></div></div></div></div></div> <!----> <!----></div>

                                </form>
    <!-- Modal -->
    <div class="modal fade" id="privacy-modal" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="font-weight-bold font-md">
                        Согласие на обработку персональных данных
                    </div>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="icon-delete"></i></button>
                </div>
                <div class="modal-body px-4 font-sm">
                    <p>
                        Настоящим я даю согласие ИП Вася Вася Вася, зарегистрированному по адресу: улица Вояжная, д. 1, кв./оф. 1, Тюменская область, р-н Центральный, г.Тюмень, в целях заключения и исполнения договора купли-продажи, а также продвижения ИП Зубков Сергей Владимирович своих товаров и услуг, обрабатывать (с использованием средств автоматизации и без таковых) - собирать, систематизировать, хранить, уточнять (обновлять, изменять), использовать, передавать (в том числе поручать обработку другим лицам), обезличивать, блокировать, удалять, извлекать, уничтожать - мои персональные данные: фамилию, имя, отчество, номер мобильного телефона, адрес электронной почты, пол, дата рождения, сведения об истории покупок, в том числе наименование приобретаемого товара/услуги и их стоимость, адрес доставки. Согласие может быть отозвано мною в любой момент путем направления письменного уведомления ИП Зубков Сергей Владимирович, при этом, ИП Вася Вася Вася вправе продолжить обработку при наличии оснований, указанных в Федеральном законе «О персональных данных».
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<!-- <section class="vh-100" style="background-color: dark;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">


                                <div class="col-md-12">
                                    <h1>Оформление заказа</h1>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <form method="post" action="{{ route('cart.checkout') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="note">Note</label>
                                            <input type="text" class="form-control" id="note" name="note" required>
                                        </div>
                                        <div class="justify-content-end gap-2 d-grip d-md-flex">
                                            <button id="order-btn" type="submit"
                                                class="btn btn-outline-info btn-cart  ">Оформить заказ</button>

                                            <button type="button" class="btn btn-outline-secondary ">Close</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
    @endsection