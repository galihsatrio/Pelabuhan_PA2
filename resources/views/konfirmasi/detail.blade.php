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
    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
