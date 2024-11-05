<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1>DETAIL PELANGGAN</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <form action="index.php?controller=pelanggan&action=update" method="POST">
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan:</label>
                <input type="text"  class="form-control" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
                <input type="text" class="form-control"  name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" required>
            </div>

             <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control"  name="alamat" value="<?= $pelanggan['alamat'] ?>" required>
            </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>