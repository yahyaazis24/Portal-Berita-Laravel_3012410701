@extends('master')

@section('title', 'Dashboard Admin')

@section('body')

<h1 class="fw-bold mb-4">
    Dashboard Admin
</h1>

<p class="text-muted mb-5">
    Selamat datang,
    <strong>{{ Auth::user()->name }}</strong>
</p>

<div class="row mb-5">

    <div class="col-md-4 mb-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h2 class="text-primary">
                    {{ \App\Models\Post::count() }}
                </h2>
                <p>Total Berita</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h2 class="text-success">
                    {{ Auth::user()->name }}
                </h2>
                <p>Administrator</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h2 class="text-danger">
                    {{ date('d M Y') }}
                </h2>
                <p>Tanggal Hari Ini</p>
            </div>
        </div>
    </div>

</div>

<h3 class="mb-3">
    Menu Cepat
</h3>

<div class="row">

    <div class="col-md-4 mb-3">
        <a href="/posts" class="btn btn-primary w-100 py-3">
            📰 Lihat Semua Berita
        </a>
    </div>

    <div class="col-md-4 mb-3">
        <button class="btn btn-success w-100 py-3">
            ➕ Tambah Berita
        </button>
    </div>

    <div class="col-md-4 mb-3">
        <a href="/" class="btn btn-dark w-100 py-3">
            🏠 Kembali ke Home
        </a>
    </div>

</div>

<hr class="my-5">

<h3 class="mb-4">
    Berita Terbaru
</h3>

<table class="table table-bordered table-hover">

<thead class="table-primary">

<tr>

<th>No</th>
<th>Judul</th>
<th>Publisher</th>

</tr>

</thead>

<tbody>

@foreach($posts as $post)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $post->title }}</td>

<td>{{ $post->published }}</td>

</tr>

@endforeach

</tbody>

</table>

@endsection