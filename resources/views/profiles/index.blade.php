@extends('layouts.tabel')
@section('title', 'Data Website')
@section('judul', 'Data Website')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
               {{-- <a class="btn btn-success" href="{{ route('profiles.create') }}"> Buat Postingan Baru</a> --}}
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
        <th>No</th>
        <th>Judul</th>
        <th width="280px">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($profiles as $profile)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $profile->title }}</td>
            <td>
                <form action="{{ route('profiles.show',$profile->id) }}" method="POST">

                    <a class="btn btn-warning" href="{{ route('profiles.show',$profile->id) }}">Lihat</a>
                    <a class="btn btn-primary" href="{{ route('profiles.edit',$profile->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
{{-- 
                    <button type="submit" class="btn btn-danger">Hapus</button> --}}
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $profiles->links() }}
    </div>
@endsection
