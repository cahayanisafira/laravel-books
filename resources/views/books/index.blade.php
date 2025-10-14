<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">📚 Daftar Buku</h2>

    <table class="table table-bordered table-striped shadow">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
                <tr class="text-center">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book['judul'] }}</td>
                    <td>{{ $book['penulis'] }}</td>
                    <td>{{ $book['tahun_terbit'] }}</td>
                    <td>{{ $book['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
