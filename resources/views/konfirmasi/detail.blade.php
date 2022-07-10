@extends('layouts.web')
@section('title', 'Konfirmasi | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Konfirmasi')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-8">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="/simpan-konfirm/{{$model->id}}" method="POST">
                    @csrf
                    <div class="">
                        <fieldset>
                        <legend>Data Pemesanan</legend>
                        <div class="form-row mb-5">
                            <div class="col-lg-9">
                                <h2>PELABUHAN MULIA RAJA NAPITUPULU</h2>
                                <h5>Kapal Ferry Balige - Onanrunggu</h5>
                                <p>Tel: 0221 3795178</p>
                            </div>
                        </div>

                        <div class="form">
                            <div>
                                <div class="row">
                                    <div class="col">
                                        @if ($disabled == 'disabled')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Mohon Maaf!</strong> Pesanan sudah kadaluarsa.
                                        </div>
                                        @else
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Segera Konfirmasi!</strong> <br> Jika tanggal pemesanan tiket sudah terlewati maka pemesanan akan <b>kadaluarsa</b> .
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="">Kode</label>
                                        <input type="text" class="form-control text-start datepicker" value="{{ $model->kode }}" disabled>
                                    </div>
                                </div>

                                <h4>Data kendaraan</h4>
                                <input type="text" class="d-none" value="{{ $model->kendaraan->id }}" name="kendaraan_id">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="">Tanggal</label>
                                        <input type="date" class="form-control text-start datepicker" onkeydown="return false" name="tanggal" id="tanggal" value="{{ $model->tanggal }}" {{$disabled}}>
                                        <small class="text-secondary"><span class="text-danger">*</span> Pilih tanggal.</small>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5">
                                        <label for="">Waktu Keberangkatan</label>
                                        <select name="waktu" id="waktu" class="center form-control" required {{$disabled}}>
                                            <option value="">-----Pilih-----</option>
                                            <option value="07:00" {{ $model->waktu == '07:00' ? 'selected' : '' }}>07:00</option>
                                            <option value="10:00" {{ $model->waktu == '10:00' ? 'selected' : '' }}>10:00</option>
                                        </select>
                                        <small class="text-secondary"><span class="text-danger">*</span> Pilih lagi waktu keberangkatan.</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="">Nama Pemilik Kendaraan</label>
                                        <input type="text" class="form-control" name="nama"  placeholder="Nama" value="{{ $model->kendaraan->nama }}" {{$disabled}}>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <label for="">Jenis Kendaraan</label>
                                        <select name="jenis" id="jenis" class="form-control" required {{$disabled}}>
                                            <option value=""> -Pilih- </option>
                                            <option value="Tidak Berkendara" {{ $model->kendaraan->jenis == 'Tidak Berkendara' ? 'selected' : '' }}>Tidak Berkendara</option>
                                            <option value="Gol I (Sepeda Dayung)" {{ $model->kendaraan->jenis == 'Gol I (Sepeda Dayung)' ? 'selected' : '' }}>Gol I (Sepeda Dayung)</option>
                                            <option value="Gol II (Sepeda Motor_" {{ $model->kendaraan->jenis == 'Gol II (Sepeda Motor_' ? 'selected' : '' }}>Gol II (Sepeda Motor)</option>
                                            <option value="Gol III (Becak, Sepeda Motor 500 CC)" {{ $model->kendaraan->jenis == 'Gol III (Becak, Sepeda Motor 500 CC)' ? 'selected' : '' }}>Gol II (Becak, Sepeda Motor 500 CC)</option>
                                            <option value="Gol IV A (Minibus/Sedan)" {{ $model->kendaraan->jenis == 'Gol IV A (Minibus/Sedan)' ? 'selected' : '' }}>Gol IV A (Minibus/Sedan)</option>
                                            <option value="Gol IV B (Pick Up)" {{ $model->kendaraan->jenis == 'Gol IV B (Pick Up)' ? 'selected' : '' }}>Gol IV B (Pick Up)</option>
                                            <option value="Gol V A (Bus Sedang)" {{ $model->kendaraan->jenis == 'Gol V A (Bus Sedang)' ? 'selected' : '' }}>Gol V A (Bus Sedang)</option>
                                            <option value="Gol V B (Colt Diesel 5-7 meter)" {{ $model->kendaraan->jenis == 'Gol V B (Colt Diesel 5-7 meter)' ? 'selected' : '' }}>Gol V B (Colt Diesel 5-7 meter)</option>
                                            <option value="Gol VI A (Bus Besar)" {{ $model->kendaraan->jenis == 'Gol VI A (Bus Besar)' ? 'selected' : '' }}>Gol VI A (Bus Besar)</option>
                                            <option value="Gol VI B (Fuso 7 - 10 meter)" {{ $model->kendaraan->jenis == 'Gol VI B (Fuso 7 - 10 meter)' ? 'selected' : '' }}>Gol VI B (Fuso 7 - 10 meter)</option>
                                            <option value="Gol VII (Tronton)" {{ $model->kendaraan->jenis == 'Gol VII (Tronton)' ? 'selected' : '' }}>Gol VII (Tronton)</option>
                                            <option value="Gol VIII (Trailer)" {{ $model->kendaraan->jenis == 'Gol VIII (Trailer)' ? 'selected' : '' }}>Gol VIII (Trailer)</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control" value="{{$model->kendaraan->harga}}" name="harga" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-5" id="no_polisi" {{ $model->kendaraan->jenis == 'Tidak Berkendara' && $model->kendaraan->jenis == 'Gol I (Sepeda Dayung)' ? 'hidden' : '' }}>
                                        <label for="">No. Polisi</label>
                                        <input type="text" class="form-control" name="no_polisi"  placeholder="No. Polisi" value="{{ $model->kendaraan->no_polisi }}" {{$disabled}}>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Data Penumpang</h4>
                        <div id="dynamic_field">
                            <table class="table" id="dynamicAddRemove">
                                <tr>
                                    <td><label for="">Nama</label></td>
                                    <td><label for="">Jenis Kelamin</label></td>
                                    <td><label for="">Umur</label></td>
                                    <td><label for="">Alamat</label></td>
                                    <td></td>
                                </tr>
                                <div class="d-none">{{ $total = 0; }}</div>
                                @foreach($model->penumpang as $key => $value)
                                <input class="d-none" type="text" value="{{$value->id}}" name="addMoreInputFields[{{$key}}][id]">
                                <tr>
                                    <td>
                                        <input type="text" name="addMoreInputFields[{{$key}}][nama]" placeholder="Enter " class="form-control" value="{{ $value->nama }}" {{$disabled}}/>
                                    </td>
                                    <td>
                                        <select name="addMoreInputFields[{{$key}}][jk]" id="" class="center form-control" value="{{ $value->nama }}" {{$disabled}}>
                                            <option value="">Pilih</option>
                                            <option value="Laki-Laki" {{ $value->jk == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="Perempuan" {{ $value->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="addMoreInputFields[{{$key}}][umur]" placeholder="Enter" class="form-control" value="{{ $value->umur }}" {{$disabled}}/>
                                    </td>
                                    <td>
                                        <input type="text" name="addMoreInputFields[{{$key}}][alamat]" placeholder="Enter " class="form-control" value="{{ $value->alamat }}" {{$disabled}}/>
                                    </td>
                                    <td>
                                        <input type="text" name="addMoreInputFields[{{$key}}][harga]" placeholder="Enter " class="form-control" value="{{ $value->harga }}" {{$disabled}}/>
                                    </td>
                                    <td>
                                        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary" {{$disabled}}>Tambah </button>
                                    </td>
                                    <div class="d-none">{{ $total += $value->harga }}</div>
                                </tr>
                                @endforeach
                            </table>
                            <table width="100%">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="20%"></td>
                                    <td width="20%"></td>
                                    <td width="20%" class="text-end pe-3"> <b>Total</b> </td>
                                    <td width="20%">
                                        <input type="text" class="form-control" id="total" name="total" value="{{$total}}" disabled="disabled">
                                    </td>
                                </tr>
                            </table>
                            @if (Route::has('login'))
                                <div class="hidden fixed sm:block">
                                    <a href="/konfirmasi" class="btn btn-outline-secondary" style="vertical-align: center">
                                        <i class="bx bx-chevron-left"></i>
                                        Kembali
                                    </a>
                                @auth
                                    <button type="submit" class="submit btn btn-primary submit" name="submit" {{$disabled}}>
                                        <i class="bx bxs-check-shield mr-1"></i>
                                        KONFIRMASI PEMESANAN
                                    </button>
                                @else
                                    <button onClick="alert('Anda harus login terlebih dahulu!')" class="submit btn btn-primary submit"  style="margin-right: 40px">SUBMIT</button>
                                @endif
                                </div>
                            @endif
                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
    $(window).load(function(){
        $("#jenis").change(function() {
            console.log($("#jenis option:selected").val());
            if ($("#jenis option:selected").val() == 'Tidak Berkendara') {
                $('#no_polisi').prop('hidden', 'true');
            } else if ($("#jenis option:selected").val() == 'Gol I (Sepeda Dayung)'){
                $('#no_polisi').prop('hidden', 'true');
            }else if ($("#jenis option:selected").val() == ''){
                $('#no_polisi').prop('hidden', 'true');
            }else {
                $('#no_polisi').prop('hidden', false);
            }
        });
    });
    </script>
    <script type="text/javascript">
        var i = 0;
        var total = 19000;
        $("#dynamic-ar").click(function () {
            ++i;
            total += 19000;
            $('#total').val(total);
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][nama]" placeholder="Enter " class="form-control" /></td><td><select name="addMoreInputFields[' + i +
                '][jk]" id="" class="center form-control"><option value="">Pilih</option><option value="Laki-Laki">Laki-Laki</option><option value="Perempuan">Perempuan</option></select></td></td><td><input type="text" name="addMoreInputFields[' + i +
                '][umur]" placeholder="Enter " class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
                '][alamat]" placeholder="Enter " class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
                '][harga]" placeholder="Enter " class="form-control" value="19000" disabled/></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
            total -= 19000;
            $('#total').val(total);
        });
    </script>
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
                    let value = {!! json_encode($data, JSON_HEX_TAG) !!};
                    console.log(value);
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
