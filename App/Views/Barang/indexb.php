<head>
    <meta charset="UTF-8">
    <title>Halaman Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <h1>Daftar Barang</h1>
    <a href="index.php?controller=barang&action=create" class="btn btn-success">Tambah Data</a>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $barang): ?>
        <tr>
            <th scope="row"><?= $key + 1 ?></th>
            <td><?= $barang['kode_barang'] ?></td>
            <td><?= $barang['nama_barang'] ?></td>
            <td><?= $barang['harga'] ?></td>
            <td><?= $barang['stok'] ?></td>

            <td>
                <a href="index.php?controller=barang&action=edit&id=<?= $barang['kode_barang'] ?>" class="btn btn-warning" >Edit</a>
                <a href="index.php?controller=barang&action=delete&id=<?= $barang['kode_barang'] ?>" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</htnl>