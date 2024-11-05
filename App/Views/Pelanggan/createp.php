<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>TAMBAH PELANGGAN</title>
</head>
<body>
<div class="container mt-3">
    <h1>Tambah Pelanggan</h1>
    <hr class="mt-0">

    <form action="index.php?controller=pelanggan&action=store" method="POST">
         <div class="mb-3">
            <label for="id_pelanggan" class="form-label">ID Pelanggan:</label>
            <input type="text" class="form-control" name="id_pelanggan" required>
        </div>

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
            <input type="text" class="form-control" name="nama_pelanggan" required>
        </div>
        
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" name="alamat" required>
        </div>

        <button type="submit"  class="btn btn-success">Simpan</button>
    </form>

    <a href="index.php?controller=pelanggan&action=index" class="btn -btn-secondary">Kembali</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>