@extends('layouts.tabel')
@section('title', 'Daftar Galeri')
@section('judul', 'Data Galeri')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                {{-- <a class="btn btn-success" href="{{ route('galeris.create') }}"> Buat Galeri Baru</a> --}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection
@section('tabels')
<thead>
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">Image</th>
        <th class="text-center" width="280px">Action</th>
    </tr>
</thead>
<tbody>
    <div class="text-center">
        @foreach ($galeris as $galeri)
        <tr>
            <td class="text-center">{{++$i}}</td>
            <td class="text-center"><img src="/foto/product/{{$galeri->image}}" height="175" alt="" /></td>
            <td class="text-center">
                <form action="{{ route('galeris.destroy',$galeri->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('galeris.edit',$galeri->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach 
        </div>
</tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $galeris->links() }}
    </div>
@endsection
