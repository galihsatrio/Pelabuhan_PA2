@extends('layouts.adm')
@section('title', 'Daftar profile | Admin')
@section('judul', 'Data Website')
@section('content')
    <div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}" enctype="multipart/form-data"> Kembali</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

    <form action="{{ route('profiles.show',$profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="title" value="{{ $profile->title }}" class="form-control" placeholder="Post Title" disabled>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Konten Website:</strong>
                            <textarea class="form-control" style="height:150px" name="content" placeholder="Post content" disabled>{{ $profile->content }}</textarea>
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <img src="/foto/product/{{$profile->image}}" height="200" alt="" />
                    </div>
                </div>

            </div>
         </div>

    </form>
</div>
@endsection
