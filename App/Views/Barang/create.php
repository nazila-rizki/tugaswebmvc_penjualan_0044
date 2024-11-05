<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<div class="container mt-3">
    <h1>Tambah Barang</h1>
    <hr class="mt-0">
    <form action="index.php?controller=barang&action=store" method="POST">
        <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
         </div>

         <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>

        <div class="mb-3">
        <label for="harga" class="form-label">Harga:</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="mb-3">
        <label for="stok" class="form-label">Stok:</label>
        <input type="number" class="form-control" id="stok" name="stok" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

    <a href="index.php?controller=barang&action=index">Kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>