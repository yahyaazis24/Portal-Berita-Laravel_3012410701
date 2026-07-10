<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f8f9fa;
        }

        .navbar-brand{
            font-weight:bold;
        }

        footer{
            background:#212529;
            color:white;
            padding:20px;
            margin-top:50px;
        }

        .page-title{
            font-weight:bold;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand" href="/">
📰 Kabar Burung
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/posts">Berita</a>
</li>

@guest

<li class="nav-item">
<a class="nav-link" href="/login">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/register">Register</a>
</li>

@endguest

@auth

<li class="nav-item">
    <a class="nav-link" href="/dashboard">
        Dashboard
    </a>
</li>

<li class="nav-item">

<span class="nav-link">

Halo, {{ Auth::user()->name }}

</span>

</li>

<li class="nav-item">

<form action="/logout" method="POST">

@csrf

<button class="btn btn-danger btn-sm ms-2">

Logout

</button>

</form>

</li>

@endauth

</ul>

</div>

</div>

</nav>

<div class="container py-5">

@yield('body')

</div>

<footer class="text-center">

© 2026 Kabar Burung | Portal Berita Laravel

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>