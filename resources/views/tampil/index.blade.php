@extends('layouts.web')
@section('title', 'Berita | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Berita')
@section('judul', 'Berita Pelabuhan')
@section('content')
    <div class="container">
      <div class="row justify-content-md-center">
        <!-- Blog entries-->
        <div class="container ">
          <!-- Nested row for non-featured blog posts-->
          <div class="row" >
              @foreach ($beritas as $berita)
                <div class="col-md-6 mb-4" data-aos="fade-up">
                  <div class="card" >
                    <img src="/foto/product/{{$berita->image}}" height="300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="small text-muted">{{ $berita->tgl_berita }}</div>
                      <h5 class="card-title h4"> {{ substr($berita->title, 0, 50) }}...</h5>
                      <p class="card-text">{!! html_entity_decode(substr($berita->description, 0, 140)) !!}...</p>
                        <a class="btn btn-primary"  href="{{url('berita/show')}}/{{$berita->id}}">Baca Selengkapnya →</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
