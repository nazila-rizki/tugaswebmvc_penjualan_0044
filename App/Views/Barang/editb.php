<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Tambahkan gaya sesuai kebutuhan */
    </style>
</head>

<body>
<div class="container mt-3">
    <h1>Edit Barang</h1>
    <hr class="mt-0">
    <form action="index.php?controller=barang&action=update" method="POST">
    <div class="mb-3">
        <input type="hidden" name="kode_barang" value="<?= $barang['kode_barang'] ?>">
        <label for="nama_barang" class="form-label">Nama Barang:</label>
        <input type="text" class="form-control" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required><br>
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga:</label>
        <input type="number" class="form-control" name="harga" value="<?= $barang['harga'] ?>" required><br>
    </div>
        
     <div class="mb-3">
        <label for="stok" class="form-label">Stok:</label>
        <input type="number" class="form-control" name="stok" value="<?= $barang['stok'] ?>" required><br>
    </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php?controller=barang&action=index">Batal</a>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>