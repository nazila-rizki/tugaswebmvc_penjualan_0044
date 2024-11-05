<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Pelanggan</title>
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
        <h1>Daftar Pelanggan</h1>
        <a href="index.php?controller=pelanggan&action=create" class="btn btn-success">Tambah Data</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($data as $key => $pelanggan): ?>
                <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $pelanggan['id_pelanggan'] ?></td>
                    <td><?= $pelanggan['nama_pelanggan'] ?></td>
                    <td><?= $pelanggan['alamat'] ?></td>
                    <td>
                        <a href="index.php?controller=pelanggan&action=edit&id=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?controller=pelanggan&action=delete&id=<?= $pelanggan['id_pelanggan'] ?>" onclick="return confirm('Kamu yakin akan menghapus data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
