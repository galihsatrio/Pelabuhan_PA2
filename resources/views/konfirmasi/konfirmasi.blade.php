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

      
      <script>
            $(function(){
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                $("#waktu").val("").change();

                $('#tanggal').attr('min', maxDate);
            });

            $(document).ready(function(){

                $('#tanggal').change(function() {
                    const weekday = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
                    const d = new Date(this.value.toString());
                    let day = weekday[d.getDay()];
                    if (day == "Jumat") {
                        swal({
                            title: "Mohon Maaf!",
                            text: "Tidak ada jadwal keberangkatan di hari Jum'at.",
                            icon: "warning",
                            button: true
                        });
                        $("#tanggal").val("").change();
                    }

                    var exist = ($("#waktu option[value='10:00']").length > 0);
                    if (day != 'Sabtu' && day != 'Minggu') {
                        if(exist) {
                            $("#waktu option[value='10:00']").each(function() {
                                $(this).remove();
                            });
                        }
                    } else if (day == 'Sabtu' || day == 'Minggu')  {
                        if(!exist) {
                            var o = new Option("10:00", "10:00");
                            $(o).html("10:00");
                            $("#waktu").append(o);
                        }
                    }
                });

                $("#waktu").change(function(){
                    var value = jQuery(this).find(":selected").val();
                    if(value) {
                        // get value
                        var split = value.split(':');
                        var realValue = parseInt(split[0]);

                        // get date
                        var d = new Date();
                        d.getHours();
                        var month = d.getMonth() + 1;
                        var day = d.getDate();
                        var year = d.getFullYear();
                        if(month < 10)
                            month = '0' + month.toString();
                        if(day < 10)
                            day = '0' + day.toString();

                        var now = year + '-' + month + '-' + day;
                        var input = $("#tanggal").val();

                        if (input) {
                            if (now == input) {
                                if (realValue <= d.getHours()) {
                                    $("#waktu").val("").change();
                                    swal({
                                        title: "Mohon Maaf!",
                                        text: "Waktu keberangkatan ini sudah terlambat untuk dipesan!",
                                        icon: "warning",
                                        button: true
                                    });
                                }
                            }
                        } else {
                            $("#waktu").val("").change();
                            swal({
                                title: "Mohon Maaf!",
                                text: "Harap pilih tanggal terlebih dahulu!",
                                icon: "warning",
                                button: true
                            });
                        }

                    }

                });
            });

      </script>

  </body>
</html>

