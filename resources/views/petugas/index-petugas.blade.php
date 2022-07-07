@extends('layouts.ptg')
@section('title', 'Daftar Pemesanan')
@section('judul', 'Data Pemesanan')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                {{-- <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading"></h4>
                  <p></p>
                  <p class="mb-0"></p>
                </div> --}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection
@section('tabel')
 <thead>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Konfirm Pembayaran</th>
        <th width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($pemesanans as $value)
        <tr>
            <td width="7%">{{ ++$i }}</td>
            <td>{{ $value->kode }}</td>
            <td>{{ $value->tanggal }}</td>
            <td width="20%" class="text-center">
                @if ($value->status_pembayaran == 0) 
                    <span class="badge badge-pill badge-danger">Belum Bayar</span>
                @else 
                    <span class="badge badge-pill badge-success">Sudah Bayar</span>
                @endif
            </td>
            <td width="20%" class="text-center">
                @if($value->status_pembayaran == 0) 
                    <a href="{{$verifikasi.$value->id}}"><i class="bx bx-check bx-sm" data-toggle="tooltip" data-placement="top" title="Konfirm Pembayaran"></i></a>
                @else 
                    <i class="bx bx-minus" data-toggle="tooltip" data-placement="top" title="Sudah Bayar"></i>
                @endif
            </td>
            <td>
                <a class="btn btn-primary btn-sm"  data-toggle="tooltip" data-placement="top" title="Detail" href="{{$detail.$value->id}}"><i class="bx bx-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
</tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $pemesanans->links() }}
    </div>
@endsection
