@extends('layouts.web')
@section('title', 'Berita | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Berita')
@section('content')
    <div class="container mt-5">
        <div class="row" >
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4" data-aos="fade-up">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $tampil->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">{{ $tampil->tgl_berita }}</div>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="/foto/product/{{$tampil->image}}" alt="..." data-aos="fade-up"/></figure>
                    <!-- Post content-->
                    <section class="mb-5" data-aos="fade-up">
                        <p class="fs-5 mb-4">{!! html_entity_decode($tampil->description) !!}</p>
                    </section>
                    <h5 data-aos="fade-up">Sumber dari : {{ $tampil->sumber }}</h5>
                </article>
            </div>
        </div>
    </div>
@endsection