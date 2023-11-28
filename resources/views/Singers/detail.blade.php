<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail Singers</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Detail Singers</h2>
        <table class="table table-bordered">
            <tr>
                <th scope="col">Name</th>
                <td>{{ $singer->name }}</td>
            </tr>
            <tr>
                <th scope="col">Genre</th>
                <td>{{ $singer->genre }}</td>
            </tr>
            <tr>
                <th scope="col">Debut</th>
                <td>{{ $singer->debut_year }}</td>
            </tr>
            <tr>
                <th scope="col">Birthday</th>
                <td>{{ $singer->Bio }}</td>
            </tr>
            <tr>
                <th scope="col">Date Birth</th>
                <td>{{ $singer->date_Birth }}</td>
            </tr>
            <tr>
                <th scope="col">Place Birth</th>
                <td>{{ $singer->Place_Birth }}</td>
            </tr>
        </table>

        <a href="/singers/all" class="btn btn-light btn-back">Back</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
