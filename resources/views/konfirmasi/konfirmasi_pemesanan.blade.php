@extends('layouts.web')
@section('title', 'Konfirmasi Pemesanan | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Konfirmasi Pemesanan')
@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="my-5">Konfirmasi Pemesanan</h3>

            <table class="table table-striped mb-5">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th height="50" style="vertical-align: middle">Kode</th>
                        <th height="50" style="vertical-align: middle">Tanggal</th>
                        <th height="50" style="vertical-align: middle">Pemesan</th>
                        <th height="50" style="vertical-align: middle">Status Pembayaran</th>
                        <th height="50" style="vertical-align: middle">Konfirmasi Pesanan</th>
                        <th height="50" style="vertical-align: middle">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $value)
                    <tr class="text-center">
                        <td height="50" style="vertical-align: middle">{{ $value->kode }}</td>
                        <td height="50" style="vertical-align: middle">{{ Carbon\Carbon::parse($value->tanggal)->format('d-m-Y') }}</td>
                        <td height="50" style="vertical-align: middle">{{ Auth()->user()->name }}</td>
                        <td height="50" class="text-center" style="vertical-align: middle">
                            @if ($value->status_pembayaran == 1)
                                <span class="badge rounded-pill bg-success">Success</span>
                            @else
                                <span class="badge rounded-pill bg-warning text-light">Belum Terbayar</span>
                            @endif
                        </td>
                        <td>
                            @if ($value->konfirmasi == 0)
                            <i class="bx bx-check-shield bx-sm text-success" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Sudah Konfirmasi"></i>
                            @else
                            <i class="bx bxs-check-shield bx-sm text-success" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Konfirmasi Pesanan"></i>
                            @endif
                        </td>
                        <td>
                            @if ($value->konfirmasi == 0)
                            <a href="/konfirmasi/{{Auth()->user()->id}}/{{$value->id}}">
                                <i class="bx bx-check bx-sm text-success" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Konfirmasi Pesanan"></i>
                            </a>
                            @else
                            <a href="/history-pemesanan/konfirmasi/{{Auth()->user()->id}}/{{$value->id}}">
                                <i class="bx bx-minus bx-sm text-success"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @if ($model->count() == 0)
                    <tr>
                        <td class="text-center pt-3" style="vertical-align: center; font-weight: bold" height="70" colspan="6"> - Tidak Ada Pesanan - </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

  </head>
  <body>
    <main>



    </main>

  </body>
</html>
