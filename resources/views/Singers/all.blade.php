@extends('layout.main')

@section('content')
<div class="container">
    <h1>Singers</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Genre</th>
                <th>Bio</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($singers as $singer)
                <tr>
                    <td>{{ $singer->name }}</td>
                    <td>{{ $singer->genre }}</td>
                    <td>{{ $singer->Bio }}</td>
                    <td>
                        <a href="/singers/detail/{{ $singer->id }}" class="btn btn-dark">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
