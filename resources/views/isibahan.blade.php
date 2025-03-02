<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Bahan</title>
</head>

<body>
    <!-- tabel data bahan -->
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama Bahan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bahan as $bhn)
                    <tr>
                        <td>{{ $bhn->id }}</td>
                        <td>{{ $bhn->nama_bahan }}</td>
                        <td>{{ $bhn->jumlah_bahan }}</td>
                        <td>Rp {{ number_format($bhn->harga_bahan, 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('bahan.hapus', $bhn->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
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