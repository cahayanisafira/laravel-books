<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mini Project</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

=======
>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df
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
<<<<<<< HEAD

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
=======
<body>

<div class="navbar">
    <div>Selamat Datang, <b>{{ Auth::user()->username ?? 'Cahayani' }}</b></div>
    <div>
        <a href="{{ route('logout') }}">Logout</a>
    </div>
</div>

<div class="container">
    <h2>📦 Data Barang</h2>
    <a href="#" class="add">+ Tambah Barang</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        {{-- Contoh Data Dummy --}}
        <tr>
            <td>1</td>
            <td>Buku Tulis</td>
            <td>50</td>
            <td>5000</td>
            <td>Alat tulis sekolah</td>
            <td>
                <a href="#" class="edit">Edit</a>
                <a href="#" class="delete">Hapus</a>
                
            </td>
        </tr>
    </table>
</div>

>>>>>>> 878a317daf1316cdac31f2dcf1ad95d835be40df
</body>
</html>
