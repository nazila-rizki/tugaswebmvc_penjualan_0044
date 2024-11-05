<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1>DATA TRANSAKSI</h1>
        <h4>Tambah Transaksi</h4>
        <hr class="mt-0">

    <form action="index.php?controller=transaksi&action=store" method="POST">
    <div class="mb-3">
        <label for="id_transaksi" class="form-label">ID Transaksi:</label>
        <input type="number" class="form-control"  name="id_transaksi" required>
    </div>

    <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang:</label>
        <input type="text" class="form-control"  name="kode_barang" required>
    </div>

    <div class="mb-3">
        <label for="id_pelanggan" class="form-label">ID Pelanggan:</label>
        <input type="text" class="form-control"  name="id_pelanggan" required>
    </div>

     <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah:</label>
        <input type="number" class="form-control"  name="jumlah" required>
    </div>

    <div class="mb-3">
        <label for="harga_barang" class="form-label">Harga Barang:</label>
        <input type="number" class="form-control"  name="harga_barang" required>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input type="date" class="form-control"  name="tanggal" required>
    </div>

        <!-- Menampilkan total harga yang dihitung secara otomatis -->
        <p>Total Harga: <span id="total_harga">0</span></p>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>