
@section('title', 'SmartOk')


@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section class="vh-100" style="background-color: dark;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <a class="iuy" href="{{route('home')}}">Назад</a>

                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <p>Email: <b>{{Auth::user()->email}}</b></p>
                    <p>Name: <b>{{Auth::user()->name}}</b></p>
                    <p>Дата создания аккаунта: <b>{{Auth::user()->created_at}}</b></p>
                  </div>

                </div>
                <h6>Функции</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">

                    @if(Auth::user()->is_admin)
                    <a class="iuy" href="{{url('create')}}">Добавить Товар</a>
                    @endif
                  </div>
                  <div class="col-6 mb-3">
                    @if(Auth::user()->is_admin)
                    <a class="iuy" href="{{url('admin')}}">Изменение товара</a>
                  </div>
                  <div class="col-6 mb-3">
                    <a href="{{route('admin.orders-table')}}">Заказы</a>
                    @endif
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
