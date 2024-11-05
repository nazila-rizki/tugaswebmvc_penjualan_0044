<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
        <div class="card-header bg-primary text-white">
    <nav>
        <a href="index.php?controller=transaksi&action=index">Kembali ke Daftar Transaksi</a>
    </nav>
    <div class="card-body">
        <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
        <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
        <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
        <p><strong>Total Harga:</strong> <?= htmlspecialchars($transaksiDetail['total_harga']) ?></p>
        <p><strong>Tanggal :</strong> <?= htmlspecialchars($transaksiDetail['tanggal']) ?></p>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>