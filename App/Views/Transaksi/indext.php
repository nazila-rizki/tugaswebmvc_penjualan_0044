<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Transaksi</title>
    <style>
        /* Remove underline and set font color to black */
        a {
            text-decoration: none; /* Remove underline */
            color: black; /* Set font color to black */
        }

        a:hover {
            text-decoration: underline; /* Optional: underline on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <p>
        <a href="index.php?controller=home&action=index">Home</a>
        <a href="index.php?controller=barang&action=index">Barang</a>
        <a href="index.php?controller=pelanggan&action=index">Pelanggan</a>
        <a href="index.php?controller=transaksi&action=index">Transaksi</a>
    </p>
</div>

<div class="container mt-3">
    <h2>Daftar Transaksi</h2>
    <a href="index.php?controller=transaksi&action=create" class="btn btn-success">Tambah Data</a>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">ID Pelanggan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksiList as $key => $transaksi): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $transaksi['id_transaksi'] ?></td>
                <td><?= $transaksi['kode_barang'] ?></td>
                <td><?= $transaksi['id_pelanggan'] ?></td>
                <td><?= $transaksi['jumlah'] ?></td>
                <td><?= $transaksi['total_harga'] ?></td>
                <td><?= $transaksi['tanggal'] ?></td>
                <td>
                    <a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>" class="btn btn-primary">Detail Transaksi</a>
            </td>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
