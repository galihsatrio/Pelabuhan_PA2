@extends('layouts.tabel')
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
        <th>Nama</th>
        <th>Status</th>
        <th>Konfirm Pembayaran</th>
        <th width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
        <tr>
            @foreach ($pemesanans as $value)
            <td width="7%">{{ ++$i }}</td>
            <td>{{ $value->kode }}</td>
            <td>{{ $value->tanggal }}</td>
            <td>{{ $value->nama }}</td>
            <td width="20%" class="text-center">
                @if ($value->status_pembayaran == 0) 
                    <span class="badge badge-pill badge-danger">Belum Bayar</span>
                @else 
                    <span class="badge badge-pill badge-success">Sudah Bayar</span>
                @endif
            </td>
            <td width="20%" class="text-center">
                @if($value->status_pembayaran == 0) 
                    <a href="{{$verifikasi.$value->id}}" class="btn btn-primary btn-sm"  data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="bx bx-check" ></i></a>
                @else 
                    <i class="bx bx-minus" data-toggle="tooltip" data-placement="top" title="Sudah Bayar"></i>
                @endif
                
                @if($value->status_pembayaran == 0) 
                    <a href="{{$delete.$value->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#keluar" title="Hapus"><i class="bx bx-trash"></i></a>
                @endif
                <!-- Logout Modal-->
                <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingin Membatalkan Pemesanan Ini?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Pilih "Hapus" jika anda ingin membatalkan pemesanan ini</div>
                            <div class="modal-footer">
                                <a href="{{$delete.$value->id}}" class="btn btn-danger">Batalkan Pemesanan</a>
                            </div>
                        </div>
                    </div>
                </div>
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
