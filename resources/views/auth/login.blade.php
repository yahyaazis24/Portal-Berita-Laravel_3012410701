@extends('master')

@section('title', 'Login')

@section('body')

<div class="col-md-4 mx-auto">

    <h2 class="mb-4">Login</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">

        @csrf

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

        <button class="btn btn-primary w-100">
            Login
        </button>

    </form>

    <p class="mt-3">
        Belum punya akun?
        <a href="/register">Daftar</a>
    </p>

</div>

@endsection