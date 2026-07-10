@extends('master')

@section('title', 'Halaman Utama Portal - Kabar Burung')

@section('body')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h1>Portal - Kabar Burung</h1>

    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-danger">
            Logout
        </button>
    </form>

</div

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Published</th>
            <th>Tanggal</th>
        </tr>
    </thead>

    <tbody>

    <?php $no = 1; ?>

    @foreach($posts as $post)

        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->published }}</td>
            <td>{{ $post->created_at->format('M d, Y') }}</td>
        </tr>

    @endforeach

    </tbody>
</table>

@endsection