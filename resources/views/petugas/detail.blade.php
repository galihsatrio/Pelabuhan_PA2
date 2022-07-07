@extends('layouts.ptg')
@section('content')
    <div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Data Pemesanan</h2>
                <a class="btn btn-primary btn-sm ml-auto" href="{{ $pemesanan->kembali }}" enctype="multipart/form-data"> <i class="bx bx-chevron-left my-auto"></i> Kembali</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
    <div class="container-fluid px-0 mb-5">
        <div class="row mt-5">
            <div class="col-2">
                <h5>Data Pemesan</h5>
                <hr>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>Kode</strong>
                    <input type="text" name="kode" class="form-control" value="{{ $pemesanan->kode }}" disabled>
                </div>
            </div>
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>Tanggal</strong>
                    <input type="text" name="tanggal" class="form-control" value="{{ $pemesanan->tanggal }}" disabled>
                </div>
            </div>
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>Waktu</strong>
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
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>Pemilik</strong>
                    <input type="text" name="nama_pemilik" class="form-control" value="{{ $pemesanan->kendaraan->nama }}" disabled>
                </div>
            </div>
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>Jenis Kendaraan</strong>
                    <input type="text" name="jenis" class="form-control" value="{{ $pemesanan->kendaraan->jenis }}" disabled>
                </div>
            </div>
            <div class="col-6 pr-5">
                <div class="form-group">
                    <strong>No Polisi</strong>
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
                    <thead>
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
    </div>

</div>
@endsection
