<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Latihan PDF Filament</title>
</head>

<body>
    <h2>Tes PDF Filament</h2>
    <p>{{ $date }}</p>
    <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @php
            $index = 1;
        @endphp
        @foreach ($users as $item)
            <tr>
                <td>{{ $index++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
