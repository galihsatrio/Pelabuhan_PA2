@extends('layouts.adm')
@section('title', 'Daftar Berita | Admin')
@section('judul', 'Ubah Data  Berita')
@section('content')
    <div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('beritas.index') }}" enctype="multipart/form-data"> Kembali</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

    <form action="{{ route('beritas.update',$berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="title" value="{{ $berita->title }}" class="form-control" placeholder="Post Title">
                    @error('title')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Berita :</strong>
                    <input type="date" name="tgl_berita" class="form-control" value="{{ $berita->tgl_berita }}">
                @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi Berita:</strong>
                    <textarea class="form-control ckeditor" style="height:150px" name="description" placeholder="Post Description">{{ html_entity_decode($berita->description) }}</textarea>
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Post Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
              <img src="/foto/product/{{$berita->image}}" height="200" alt="" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sumber:</strong>
                    <input type="text" name="sumber" value="{{ $berita->sumber }}" class="form-control" placeholder="Post sumber">
                    @error('sumber')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

              <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>
</div>
@endsection
