<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Kategori Barang</title>
</head>
<body>
    <h1>Data kategori Barang</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{$d->kategori_id}}</td>
            <td>{{$d->kategori_kode}}</td>
            <td>{{$d->kategori_nama}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>