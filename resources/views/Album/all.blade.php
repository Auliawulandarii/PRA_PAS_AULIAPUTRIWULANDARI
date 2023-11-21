@extends('layout.main')

@section('content')
<div class="container">
    <h1>Album</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Singer</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Album as $Albums)
                <tr>
                    <td>{{ $Albums->title }}</td>
                    <td>{{ $Albums->singer }}</td>
                    <td>
                        <a href="/album/detail/{{ $Albums->id }}" class="btn btn-dark">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
