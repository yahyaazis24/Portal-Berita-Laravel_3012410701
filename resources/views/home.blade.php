<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabar Burung</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f8f9fa;
        }

        .hero{
            background:#0d6efd;
            color:white;
            padding:90px 0;
        }

        .hero h1{
            font-weight:bold;
        }

        .card img{
            height:200px;
            object-fit:cover;
        }

        footer{
            background:#212529;
            color:white;
            padding:20px;
        }
    </style>

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand fw-bold" href="/">
📰 Kabar Burung
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/posts">Berita</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/login">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/register">Register</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- Hero -->

<section class="hero text-center">

<div class="container">

<h1>Portal Berita Mahasiswa</h1>

<p class="lead mt-3">
Berita terbaru seputar teknologi, olahraga, pendidikan,
dan informasi kampus.
</p>

<a href="/posts" class="btn btn-light btn-lg mt-3">
Lihat Berita
</a>

</div>

</section>

<!-- Berita -->

<section class="container py-5">

<h2 class="text-center mb-5">
Berita Terbaru
</h2>

<div class="row">

@foreach($posts as $post)

<div class="col-md-4 mb-4">

<div class="card shadow-sm h-100">

<img src="https://picsum.photos/400/250?random={{ $post->id }}">

<div class="card-body">

<h5>{{ $post->title }}</h5>

<p class="text-muted">

{{ $post->published }}

</p>

<p>

{{ $post->created_at->format('d M Y') }}

</p>

<a href="/posts" class="btn btn-primary">

Baca Selengkapnya

</a>

</div>

</div>

</div>

@endforeach

</div>

</section>

<footer class="text-center">

Copyright © 2026 Kabar Burung

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>