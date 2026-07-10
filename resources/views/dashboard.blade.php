@extends('master')

@section('title','Dashboard')

@section('body')

<div class="text-center mb-5">

<h1 class="fw-bold">
Dashboard Admin
</h1>

<p class="text-muted">

Selamat datang,

<strong>{{ Auth::user()->name }}</strong>

</p>

</div>

<div class="row">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h2>

{{ \App\Models\Post::count() }}

</h2>

<p>Total Berita</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h2>

{{ Auth::user()->name }}

</h2>

<p>Administrator</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h2>

{{ date('d M Y') }}

</h2>

<p>Tanggal</p>

</div>

</div>

</div>

</div>

@endsection