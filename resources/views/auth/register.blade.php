@extends('master')

@section('title', 'Register')

@section('body')

<div class="col-md-5 mx-auto">

    <h2 class="mb-4">Register</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/register">

        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input
                type="text"
                name="name"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input
                type="password"
                name="password_confirmation"
                class="form-control"
                required>
        </div>

        <button class="btn btn-success w-100">
            Register
        </button>

    </form>

    <p class="mt-3">
        Sudah punya akun?
        <a href="/login">Login</a>
    </p>

</div>

@endsection