<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Kyy Laundry | Biodata</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
        
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('portfolio/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('portfolio/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('portfolio/css/style.css')}}" rel="stylesheet">
    </head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{ url('/')}}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">KyyLaundry</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/biodata')}}" class="nav-item nav-link">Tentang Saya</a>@guest
                @if (Route::has('login'))
                <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                 @if (Route::has('register'))
                <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @endguest
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="{{ asset('img/biodata.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">Muhamad<p> Rizky Saputra</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">XII Software Engineering</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ asset('img/biodata1.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Pembuat Web / Aplikasi ini</h3>
                    <p>.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-1"><h6>Nama Lengkap: <span class="text-secondary">Muhamad Rizky Saputra</span></h6></div>
                        <div class="col-sm-6 py-1"><h6> <span class="text-secondary"></span></h6></div>
                        <div class="col-sm-6 py-1"><h6>Tempat & Tanggal Lahir: <span class="text-secondary">21 Juni 2005</span></h6></div>
                        <div class="col-sm-6 py-1"><h6> <span class="text-secondary"></span></h6></div>
                        <div class="col-sm-6 py-1"><h6>telephone: <span class="text-secondary">+62 889 2202 420</span></h6></div>
                        <div class="col-sm-6 py-1"><h6> <span class="text-secondary"></span></h6></div>
                        <div class="col-sm-7 py-1"><h6>Alamat: <span class="text-secondary">Jl. Cijeruk, Bogor Selatan, Kota Bogor</span></h6></div>
                        <div class="col-sm-5 py-1"><h6> <span class="text-secondary"></span></h6></div>
                        <div class="col-sm-6 py-1"><h6>Email: <span class="text-secondary">mrizkysaputra236@gmail.com</span></h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">SD</h5>
                            <p class="mb-2"><strong>SD Negeri Cipaku 1 Kota Bogor</strong> | <small>2011 - 2017</small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">SMP</h5>
                            <p class="mb-2"><strong>SMP Negeri 10 Kota Bogor</strong> | <small>2017 - 2020</small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">SMK</h5>
                            <p class="mb-2"><strong>SMK Bina Informatika Kota Bogor</strong> | <small>2020 - 2023</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">PKL</h5>
                            <p class="mb-2"><strong>Kelurahan Baranangsiang Bogor Timur</strong> | <small>2021</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">75%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript</h6>
                            <h6 class="font-weight-bold">70%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Exel</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Word</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="https://web.facebook.com/rizky.sptr.56" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://wa.me/628892202420" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-light btn-social" href="https://www.instagram.com/rizkysptra_a/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Kyy Laundry</a> Designed by <a class="text-white font-weight-bold" >RIZKY</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('portfolio/lib/typed/typed.min.js')}}"></script>
    <script src="{{ asset('portfolio/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('portfolio/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('portfolio/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('portfolio/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('portfolio/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('portfolio/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset('portfolio/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('portfolio/js/main.js')}}"></script>
</body>

</html>