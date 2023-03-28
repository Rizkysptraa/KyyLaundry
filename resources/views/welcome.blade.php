<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Kyy Laundry | Home</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ url('/') }}" class="navbar-brand">Kyy Laundry</a>
                </div>

                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li class="active"><a href="{{ url('/')}}">Home</a></li>
                         <li><a href="{{ url('/biodata') }}">Tentang Saya</a></li>
                              @if (Route::has('login'))
                                   @auth
                                        <li>
                                             <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                                        </li>
                                   @else
                                        <li>
                                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                             <li>
                                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                             </li>
                                        @endif
                                   @endauth
                              @endif
                    </ul>
               </div>
          </div>
</section>
     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Laundry Semua Jenis Cucian!!!</h1>
                                        <h3>Dari pakaian sampai dengan sepatu</h3>
                                        <a href="#" class="section-btn btn btn-default">Laundry Sekarang!!!</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Promo Akhir Tahun!!!</h1>
                                        <h3>Mencuci hingga 2kg mendapat potongan harga sebesar 15%</h3>
                                        <a href="#" class="section-btn btn btn-default">Laundry Sekarang!!!</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Cucian Selesai Bisa Langsung Antar Ke Rumah!!!</h1>
                                        <h3>Gratis ongkir tanpa dipungut biaya sepeserpun</h3>
                                        <a href="#" class="section-btn btn btn-default">Laundry Sekarang!!!</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- SCRIPTS -->
     <script src="{{ asset('js/jquery.js')}}"></script>
     <script src="{{ asset('js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
     <script src="{{ asset('js/smoothscroll.js')}}"></script>
     <script src="{{ asset('js/custom.js')}}"></script>

    </body>
</html>
