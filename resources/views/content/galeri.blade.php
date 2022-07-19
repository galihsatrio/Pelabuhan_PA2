<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Galeri | Pelabuhan Mulia Raja Napitupulu</title>
    <!-- Favicons -->
    <link href="{{asset('../img/logo.png')}}" rel="icon" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
    <script src="{{asset('../assets/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <link
      href="{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap')}}"
      rel="stylesheet"
    />

   <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" /> --}}
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" /> --}}
    <script src="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    {{-- <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/galery.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/ces.css')}}" /> --}}
    <!--Css style-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <style>
      .bgimg {
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #367dae;
        height: 20vh;
      }

      @media screen and (max-width: 920px) {
          .bgimg {
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #367dae;
            height: 2px;
          }
      }
    </style>
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <div class="logo-1">
              <img src="{{asset('../img/logo.png')}}" alt="Logo" />
              <p>Pelabuhan Mulia Raja Napitupulu</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{asset('/')}}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{asset('/tentang')}}">Tentang</a></li>
                    <li><a class="dropdown-item" href="{{asset('/lokasi')}}">Lokasi</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pelayanan </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{asset('/jadwal')}}">Jadwal</a></li>
                    <li><a class="dropdown-item" href="{{asset('/booking')}}">Pesan</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/berita')}}">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/galeri')}}">Galeri</a>
                </li>
                <li class="nav-item">
                  @if (Route::has('login'))
                  <div class="hidden fixed sm:block">
                    @auth
                        <a class="nav-item btn btn-danger" href="{{route('logout')}}">Keluar</a>
                    @else
                        <a class="nav-item btn btn-primary" href="{{asset('login')}}">Masuk</a>
                    @endif
                  </div>
                  @endif
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Page header with logo and tagline-->
      <header class="py-5 border-bottom bgimg header-judul mb-4" >
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-7 bg-hover1">
              <div class="text-start my-5">
                <h1 class="fw-bolder">Selamat Datang di Pelabuhan!</h1>
                <p class="lead mb-0">
                  Penetapan nama Pelabuhan Mulia Raja Napitupulu, berdasarkan Surat Kementerian Perhubungan Dirjen Perhubungan Darat Nomor Ap./0611/16/DRJD/2021 tertanggal 29 Juli 2021 yang diteken oleh Dirjen Perhubungan Darat Budi
                  Setiyadi.
                </p>
              </div>
            </div> -->
          </div>
        </div>
      </header>

      <section data-aos="fade-up">
          <div class="container">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
              </ol>
            </nav>
          </div>

          <!--Header-->
          <div class="container">
            <!-- Side widgets-->
            <div class="section-header mb-3 mt-3">
              <h1>Galeri</h1>
            </div>
          </div>
      </section>

      <div class="container">
        <div class="row">
          <div class="container">
            <div class="row">
               @foreach ($galeris as $galeri)
                <div class="col-md-4">
                  <div class="mt-4" id="gallery" data-toggle="modal" data-target="#abc<?= $galeri->id ?>">
                    <img src="/foto/product/{{$galeri->image}}" />
                  </div>
                </div>

              <!-- Modal -->
              <div class="modal fade" id="abc<?= $galeri->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div id="#abc<?= $galeri->id ?>" class="carousel">
                        <div class="carousel-inner text-center ">
                          <div class="carousel-item active ">
                            <img class="d-block w-100" src="/foto/product/{{$galeri->image}}" />
                            <p class="mt-4">{{$galeri->description}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 

            @endforeach
            </div>
          </div>
        </div>
      </div>
     

    </main>
    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="{{asset('/tentang')}}">Profil</a></li>
                <li class="list-inline-item"><a href="{{asset('/lokasi')}}">Lokasi</a></li>
                <li class="list-inline-item"><a href="{{asset('/login')}}">Login</a></li>
                <li class="list-inline-item"><a href="{{asset('/jadwal')}}">Jadwal</a></li>
                <li class="list-inline-item"><a href="{{asset('/galeri')}}">Galeri</a></li>
            </ul>
            <p class="copyright">Pelabuhan Mulia Raja Napitupulu © 2022</p>
        </footer>
    </div>

    <!-- JavaScript Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('js/galery.js')}}"></script>

     <!-- JavaScript Files -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('https://kit.fontawesome.com/a81368914c.js')}}"></script>
    <script src="{{asset('./app.js')}}"></script>

  </body>
</html>
