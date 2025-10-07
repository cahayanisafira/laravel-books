<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mini Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            background: #0056b3;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .navbar a:hover {
            background: #003f7f;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .actions a {
            text-decoration: none;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
        }
        .edit { background: #28a745; }
        .delete { background: #dc3545; }
        .add {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .add:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h3>📚 Dashboard Buku</h3>
        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-4">📘 Daftar Buku</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $buku)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $buku['judul'] }}</td>
                        <td>{{ $buku['penulis'] }}</td>
                        <td>{{ $buku['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
