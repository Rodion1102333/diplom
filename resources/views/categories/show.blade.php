@extends('layouts.layout')

@section('title')@parent Купить {{ $category->title }}
@endsection

@section('content')
<main class="content">
        <style>

        .item-card .item-footer .add-to-cart {
            background-color: rgba(0, 0, 0, .14);
            top: 4px;
            right: 5px;
        }

    .item-card .item-footer .add-to-cart:hover {
            background-color: rgba(0, 0, 0, .20);
        }

    .item-card .item-footer {
            padding-top: 11px;
            padding-bottom: 11px;
        }

        @media (max-width: 420px) {
            .item-card .item-footer {
                padding-top: 12px;
                padding-bottom: 12px;
            }

            .item-card .item-footer .add-to-cart {
                height: 32px;
                background-position: 10px 7px;
            }
        }

    </style>
    <div id="items">
        <div class="container">
            <div class="breadcrumb-wrap row">
                <nav class="breadcrumb-nav px-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">Главная</a>
                        </li>
                        <li class="breadcrumb-item">{{ $category->title }}
                        </li>

                    </ol>
                </nav>
            </div>
            <h1 class="title-simple title-width-breadcrumb">Купить {{ $category->title }}</h1>

            <style>
                .childern-links {
                    display: flex;
                    flex-wrap: wrap;
                    padding: 4px 0;
                }

                    .childern-links a {
                        text-align: left;
                        padding: 9px 14px;
                        margin: 3px;
                        font-weight: 600;
                        font-size: 13px;
                        border-radius: 8px;
                        display: flex;
                        justify-content: center;
                        flex-direction: row;
                        align-items: center;
                        flex-wrap: nowrap;
                    }
                    .childern-links .children-link-text {
                        white-space: nowrap;
                    }

                    .childern-links img {
                        height: 26px;
                        margin-right: 11px;
                    }

                @media (max-width: 420px) {
                    .childern-links {
                        padding: 0;
                        padding-bottom: 20px;
                    }

                        .childern-links a {
                            padding: 8px 12px;
                            margin: 3px;
                            font-size: 12px;
                        }
                }
            </style>
            <div class="row">
                <div class="childern-links">
                                    </div>
            </div>
        </div>

        <div class="items-list">
        @forelse ($products as $product)

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
      <a class="ice_products_card_price_hover" name="product_id"  onclick="{{$product->id}}">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="">
                            <path fill="currentColor"
                                d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"
                                class=""></path>
                        </svg>
                    </a>
    </button></div>
                    <!-- <a rel="nofollow" href="{{route('cart.add')}}" name="product_id" class="add-to-cart" onclick="{{$product->id}}" title="Купить"></a> -->
            </div> </form> </div>    @empty
            <style>
   .align {
    margin-top: 110px;
   }
  </style>
            <h1 class="title-width-breadcrumb align">В этой категории пусто...</h1>
            @endforelse
                                                </div>






        <!-- <style>
            .text-h2-with-image {
                display: flex;
                justify-content: left;
            }

            .text-h2-with-image h2 {
                margin-right: 0;
                padding-right: 0;
                padding-top: 40px;
            }
        </style> -->

        <!-- <div class="item-page-text">
            <h2>Купить Apple Watch Ultra</h2>
<p>
Apple Watch Ultra - незаменимый гаджет для любителей экстримальных видов спорта и путешествий.
</p>
<p>
</p><h4>Действительно прочные</h4>
<p>
Титановый корпус диаметром 49 мм водонепроницаем до глубины 100 м, сертифицирован по стандарту MIL-STD 810H и защищен от пыли IP6X. Являетесь ли вы спортивным типом или просто любите дикие приключения, вам не нужно беспокоиться о том, что ваши часы не поспевают за вами. Apple Watch Ultra выглядит так, будто их невозможно разбить. Они изготовлены из титана аэрокосмического класса и имеют сбалансированный вес. Apple Watch Ultra долговечны и устойчивы к коррозии.
</p>
<h4>Действительно яркие</h4>
<p>
Apple Watch Ultra имеют большой 1,92-дюймовый экран с разрешением 502 x 410 пикселей и плотностью пикселей 338 пикселей на дюйм. Пользователи получают не только постоянно включенный дисплей Retina, но и яркость до 2000 нит в пике, поэтому вы можете четко видеть его, не беспокоясь о попадании на них прямого солнечного света.
</p>
<h4>Действительно держат заряд</h4>
<p>
Пользователи Apple Watch Ultra могут рассчитывать на до 36 часов автономной работы обычного использования и до 60 часов, если решите использовать настройки с низким энергопотреблением
</p>


<h3 style="margin: 30px 0 15px; text-align: center">Видео про Apple Watch Ultra</h3>

<style>
.myvideo {
position:relative;
padding-bottom:56.25%;
padding-top:30px;
height:0;
overflow:hidden;
border:1px solid #ccc;
}
.myvideo iframe,.myvideo object,.myvideo embed {
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
}
</style>
		<div class="myvideo">
		    <iframe class="lazy loaded" width="560" height="315" data-src="https://www.youtube.com/embed/Cy1adxM-CjM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" loading="lazy" src="https://www.youtube.com/embed/Cy1adxM-CjM" data-was-processed="true"></iframe>
		</div>
		<br>
        </div>

    </div> -->
</main>



@endsection
