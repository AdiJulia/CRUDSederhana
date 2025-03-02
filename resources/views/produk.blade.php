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
  <div class="container mt-5">
    <h2 class="mb-4">Daftar Produk</h2>
    <!-- form produk -->
    <div class="card mb-4">
      <div class="card-header bg-primary text-white">Tambah Produk</div>
      <div class="card-body">
        <form action="{{ route('produk.simpan') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
          </div>
          <div class="mb-3">
            <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
            <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" required>
          </div>
          <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
          </div>
          <div class="mb-3">
            <label for="id_bahan" class="form-label">ID Bahan</label>
            <select name="id_bahan" id="id_bahan" required>
              <option value="" disabled>-- Pilih Bahan--</option>
              @foreach ($bahan as $bhn)
                  <option value="{{ $bhn->id }}">
                    {{ $bhn->id }} - {{ $bhn->nama_bahan}} - {{ $bhn->jumlah_bahan}}
                  </option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-success">Tambah</button>
        </form>
      </div>
    </div>
    <a href="{{ route('bahan.bahans') }}" class="btn btn-primary">Lihat Bahan</a>
    <a href="{{ route('bahan.tampil') }}" class="btn btn-warning">Lihat Isi Bahan</a>
    <a href="{{ route('produk.tampil') }}" class="btn btn-warning">Lihat Isi Produk</a>

  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>