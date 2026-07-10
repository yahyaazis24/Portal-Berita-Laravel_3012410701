@extends('master')

@section('title', 'Semua Berita')

@section('body')

<div class="text-center mb-5">

    <h1 class="fw-bold">
        📰 Semua Berita
    </h1>

    <p class="text-muted">
        Kumpulan berita terbaru dari Portal Kabar Burung
    </p>

</div>

<div class="row">

@foreach($posts as $post)

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow h-100 border-0">

<img
src="https://picsum.photos/500/300?random={{ $post->id }}"
class="card-img-top">

<div class="card-body">

<h4 class="fw-bold">

{{ $post->title }}

</h4>

<p class="text-muted">

👤 {{ $post->published }}

</p>

<p class="text-muted">

📅 {{ $post->created_at->format('d M Y') }}

</p>

<p>

Lorem ipsum dolor sit amet consectetur adipisicing elit.
Quisquam, voluptatibus.

</p>

<button class="btn btn-primary">

Baca Selengkapnya

</button>

</div>

</div>

</div>

@endforeach

</div>

@endsection