<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
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
    <h1>Selamat datang di aplikasi penjualan</h1>

    <div id="content">
        <!-- Konten halaman akan ditampilkan di sini -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>