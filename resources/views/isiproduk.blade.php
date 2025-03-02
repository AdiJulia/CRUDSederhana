<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Produk</title>
</head>

<body>
    <!-- tabel data produk -->
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Harga Produk</th>
                    <th>Aksi</th>
                    <th>ID Bahan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $prdk)
                    <tr>
                        <td>{{ $prdk->id }}</td>
                        <td>{{ $prdk->nama_produk }}</td>
                        <td>{{ $prdk->jumlah_produk }}</td>
                        <td>Rp {{ number_format($prdk->harga_produk, 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('produk.hapus', $prdk->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                        <td>{{ $prdk->id_bahan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('produk.produks') }}" class="btn btn-primary">Lihat Bahan</a>
        <a href="{{ route('produk.produks') }}" class="btn btn-primary">Lihat Produk</a>
        <a href="{{ route('bahan.tampil') }}" class="btn btn-warning">Lihat Isi Bahan</a>
        <a href="{{ route('produk.tampil') }}" class="btn btn-warning">Lihat Isi Produk</a>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>