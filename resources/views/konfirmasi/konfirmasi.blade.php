@extends('layouts.web')
@section('title', 'Pesan | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Pesan')
@section('content')
<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-3">
            <h5>Konfirmasi Pemesanan</h5>
            <hr>
        </div>
        <div class="col-9 text-end">
            <a href="/faktur/{{ Auth()->user()->id }}/{{$pemesanan->id}}" class="btn btn-danger btn-sm ms-auto">
                <i class="bx bxs-file-pdf"></i>
                Cetak Faktur
            </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">Kode Pemesanan</strong>
                <input type="text" name="kode" class="form-control" value="{{ $pemesanan->kode }}" disabled>
            </div>
        </div>
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">Tanggal</strong>
                <input type="text" name="tanggal" class="form-control" value="{{ $pemesanan->tanggal }}" disabled>
            </div>
        </div>
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">Waktu</strong>
                <input type="text" name="waktu" class="form-control" value="{{ $pemesanan->waktu }}" disabled>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-2">
            <h5>Data Kendaraan</h5>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">Pemilik</strong>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ $pemesanan->kendaraan->nama }}" disabled>
            </div>
        </div>
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">Jenis Kendaraan</strong>
                <input type="text" name="jenis" class="form-control" value="{{ $pemesanan->kendaraan->jenis }}" disabled>
            </div>
        </div>
        <div class="col-6 pe-5">
            <div class="form-group mb-4">
                <strong class="mb-4">No Polisi</strong>
                <input type="text" name="no_polisi" class="form-control" value="{{ $pemesanan->kendaraan->no_polisi }}" disabled>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-2">
            <h5>Data Penumpang</h5>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Penumpang</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemesanan->penumpang as $value)
                    <tr>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->jk }}</td>
                        <td>{{ $value->umur }}</td>
                        <td>{{ $value->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-12">
            <a href="/konfirmasi" class="btn btn-sm btn-primary">
                <i class="bx bx-chevron-left"></i>
                Kembali
            </a>
            @if ($pemesanan->konfirmasi == 0)
            <a href="/konfirmasi-pemesanan/{{ Auth()->user()->id }}/{{ $pemesanan->id }}" class="btn btn btn-success btn-sm">
                <i class="bx bx-check-shield"></i>
                Konfirmasi Pemesanan
            </a>
            @endif
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@endsection

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pesan | Pelabuhan Mulia Raja Napitupulu</title>
    <!-- Favicons -->
    <link href="{{asset('../img/logo.png')}}" rel="icon" />

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
    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" /> --}}
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" /> --}}
    <script src="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/ces.css')}}" />
    <!--Css style-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <style>
        .swal-footer {
            text-align: center;
        }
        .swal-text {
            text-align: center;
        }
    </style>
  </head>
  <body>
    <main>



    </main>

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none">
        <symbol id="close" viewBox="0 0 18 18">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            fill="#FFFFFF"
            d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
    S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
    l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
    c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
    s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"
          />
        </symbol>
      </svg>
      <script>
        popup = {
            init: function () {
                $("figure").click(function () {
                    popup.open($(this));
                });

                $(document)
                .on("click", ".popup img", function () {
                    return false;
                })
                .on("click", ".popup", function () {
                    popup.close();
                });
            },
            open: function ($figure) {
                $(".gallery").addClass("pop");
                $popup = $('<div class="popup" />').appendTo($("body"));
                $fig = $figure.clone().appendTo($(".popup"));
                $bg = $('<div class="bg" />').appendTo($(".popup"));
                $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
                $shadow = $('<div class="shadow" />').appendTo($fig);
                src = $("img", $fig).attr("src");
                $shadow.css({ backgroundImage: "url(" + src + ")" });
                $bg.css({ backgroundImage: "url(" + src + ")" });
                setTimeout(function () {
                $(".popup").addClass("pop");
                }, 10);
            },
            close: function () {
                $(".gallery, .popup").removeClass("pop");
                    setTimeout(function () {
                    $(".popup").remove();
                }, 100);
            },
        };

        popup.init();


      </script>

  </body>
</html>
