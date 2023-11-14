@extends('layout.main')

@section('content')
<div class="container">
    <h1>Songs</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Singer Name</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->genre }}</td>
                    <td>{{ $song->singer_name }}</td>
                    <td>
                        <a href="/songs/detail/{{ $song->id }}" class="btn btn-dark">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
