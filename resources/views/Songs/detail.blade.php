<!DOCTYPE html>
<html>
<head>
    <title>Detail Songs</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Detail Song</h2>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <td>{{ $songs->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $songs->title }}</td>
        </tr>
        <tr>
            <th>Release Year</th>
            <td>{{ $songs->release_year }}</td>
        </tr>
        <tr>
            <th>Duration</th>
            <td>{{ $songs->duration }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $songs->genre }}</td>
        </tr>
        <tr>
            <th>Singer</th>
            <td>{{ $songs->singer_name }}</td>
        </tr>
    </table>

    <a href="/songs/all" class="btn btn btn-light mt-3">Back</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
