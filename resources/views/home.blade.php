@extends('master')

@section('title', 'Home')

@section('body')

<section class="bg-primary text-white text-center rounded p-5 mb-5">

    <h1 class="display-4 fw-bold">
        Portal Berita Mahasiswa
    </h1>

    <p class="lead mt-3">
        Berita terbaru seputar teknologi, olahraga,
        pendidikan, dan informasi kampus.
    </p>

    <a href="/posts" class="btn btn-light btn-lg mt-3">
        Lihat Berita
    </a>

</section>

<h2 class="text-center mb-5">
    Berita Terbaru
</h2>

<div class="row">

@foreach($posts as $post)

<div class="col-md-4 mb-4">

<div class="card shadow-sm h-100">

<img
src="https://picsum.photos/400/250?random={{ $post->id }}"
class="card-img-top">

<div class="card-body">

<h5>{{ $post->title }}</h5>

<p class="text-muted">

{{ $post->published }}

</p>

<p>

{{ $post->created_at->format('d M Y') }}

</p>

<a href="/posts"
class="btn btn-primary">

Baca Selengkapnya

</a>

</div>

</div>

</div>

@endforeach

</div>

@endsection