@extends('layouts.tabel')
@section('title', 'Daftar Kendaraan')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                {{-- <a class="btn btn-success" href="{{ route('kendaraans.create') }}"> Buat Data Baru</a> --}}
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
    <th>Jenis Kendaraan</th>
    <th>No Polisi</th>
    <th>Pembayaran</th>
    {{-- <th width="120px">Action</th> --}}
    </tr>
</thead>
<tbody>
    @foreach ($kendaraans as $kendaraan)
    <tr>
        <td>{{++$i }}</td>
        <td>{{ $kendaraan->kode }}</td>
        <td>{{ $kendaraan->tanggal }}</td>
        <td>{{ $kendaraan->nama }}</td>
        <td>
            {{ $kendaraan->jenis }} 
            {{-- <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-check" ></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">{{ $kendaraan->lainnya}}</a></li>
                </ul>
            </div> --}}
        </td>
        {{-- <td>{{ $kendaraan->lainnya }}</td> --}}
        <td>{{ $kendaraan->no_polisi }}</td>
        <td>
            @if ($kendaraan->status_pembayaran == 1) 
                <span class="badge badge-pill badge-success">Sudah Bayar</span>
            @else 
                <span class="badge badge-pill badge-danger">Belum Bayar</span>
            @endif
        </td>
        {{-- <td class="text-center">
            <form action="{{ route('kendaraans.destroy', $kendaraan->id) }}" method="POST">

                <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('kendaraans.edit',$kendaraan->id) }}">
                    <i class="bx bx-edit"></i>
                </a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                    <i class="bx bx-trash"></i>
                </button>
            </form>
        </td> --}}
    </tr>
    @endforeach
</tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $kendaraans->links() }}
    </div>
@endsection
