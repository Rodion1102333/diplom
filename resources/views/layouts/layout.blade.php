<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="iPhone, iPad, iWatch и другие гаджеты в магазине SmartOk по самым выгодным ценам в Тюмени. ">

    <meta name="keywords"
          content="купить iphone, apple тюмень, iphone тюмень, купить айфон тюмень, iphone x, iphone 7, iphone xs, iphone xs max,
iphone 8, iphone xr">


    <link rel="stylesheet" href="{{ asset('assets/front/css/app.css') }}">

    <title>@yield('title')</title>
    <!-- Fonts -->

</head>


@include('layouts.navbar')





@yield('content')





@include('layouts.footer')
<script src="{{ asset('assets/front/js/app.js') }}"></script>
<script src="{{ asset('assets/front/js/tag.js') }}"></script>
<script src="{{ asset('assets/front/js/analytics.js') }}"></script>
</body>

</html>
