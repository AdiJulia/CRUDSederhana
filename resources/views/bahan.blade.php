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
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Bahan</h2>
        <!-- form bahna -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Tambah Bahan</div>
            <div class="card-body">
                <form action="{{ route('bahan.simpan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_bahan" class="form-label">Nama Bahan</label>
                        <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_bahan" class="form-label">Jumlah Bahan</label>
                        <input type="number" class="form-control" id="jumlah_bahan" name="jumlah_bahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_bahan" class="form-label">Harga Bahan</label>
                        <input type="number" class="form-control" id="harga_bahan" name="harga_bahan" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>  
        <a href="{{ route('produk.produks') }}" class="btn btn-primary">Lihat Produk</a>
        <a href="{{ route('bahan.tampil') }}" class="btn btn-warning">Lihat Isi Bahan</a>
        <a href="{{ route('produk.tampil') }}" class="btn btn-warning">Lihat Isi Produk</a>

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>