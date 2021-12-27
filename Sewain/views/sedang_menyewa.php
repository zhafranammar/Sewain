<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>
<head>
    <title>Penyewaan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "../css/pengembalian.css" rel = "stylesheet">
    <link href = "./css/bootstrap.min.css" rel = "stylesheet">
    <script src = "./js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #e5e5e5;">
    <?php include '../php/navbar.php'; ?>
    <div class="container mt-3"><h1>Penyewaan</h1></div>
    <br>
    <div class="container mt-3">
        <table class="table table-light">
            <thead class="table-primary">
                <tr style="text-align:center">
                    <th><h6>Tanggal Sewa</h6></th>
                    <th><h6>Tanggal Kembali</h6></th>
                    <th><h6>Jumlah</h6></th>
                    <th><h6>Nama Barang</h6></th>
                    <th><h6>Biaya Kirim</h6></th>
                    <th><h6>Harga Sewa</h6></th>
                    <th><h6>Alamat Pengiriman</h6></th>
                    <th> Perpanjang atau Kembali <th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center">27/09/2021</td>
                    <td style="text-align:center">29/09/2021</td>
                    <td style="text-align:center">1</td>
                    <td style="text-align:center">Kamera</td>
                    <td style="text-align:center">Rp5.000,00</td>
                    <td style="text-align:center">Rp.20.000,00</td>
                    <td>
                        <div><text class = "text-primary">Jalan/Gang </text>Jl. Joko No. 3</div>
                        <div><text class = "text-primary">RT/RW </text>01/08</div>
                        <div><text class = "text-primary">Kelurahan </text>Tingkir</div>
                        <div><text class = "text-primary">Kabupaten/Kota </text>Salatiga</div>
                        <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>
                    </td>
                    <td style="text-align:center">
                      <div class="d-grid gap-3 col-8 mx-auto">
                      <button class="btn btn-primary" onclick="location.href='/Sewain/views/perpanjang_peminjaman.php'" type="button">Perpanjang</button>
                      <button class="btn btn-primary" onclick="location.href='/Sewain/views/pengembalian.php'" type="button">Kembalikan</button>
                    </td>
                </tr>
                <tr>
                  <td style="text-align:center">24/09/2021</td>
                  <td style="text-align:center">28/09/2021</td>
                  <td style="text-align:center">1</td>
                  <td style="text-align:center">Laptop</td>
                  <td style="text-align:center">Rp5.000,00</td>
                  <td style="text-align:center">Rp.85.000,00</td>
                    <td>
                      <div><text class = "text-primary">Jalan/Gang </text>Jl. Joko No. 3</div>
                      <div><text class = "text-primary">RT/RW </text>01/08</div>
                      <div><text class = "text-primary">Kelurahan </text>Tingkir</div>
                      <div><text class = "text-primary">Kabupaten/Kota </text>Salatiga</div>
                      <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>
                    </td>
                    <td style="text-align:center">
                      <div class="d-grid gap-3 col-8 mx-auto">
                      <button class="btn btn-primary" onclick="location.href='/Sewain/views/sedang_menyewa.php'" type="button">Perpanjang</button>
                      <button class="btn btn-primary" onclick="location.href='/Sewain/views/sedang_menyewa.php'" type="button">Kembalikan</button>
                    </td>
                </tr>
                <tr>
                  <td style="text-align:center">20/09/2021</td>
                  <td style="text-align:center">25/09/2021</td>
                  <td style="text-align:center">1</td>
                  <td style="text-align:center">Komputer</td>
                  <td style="text-align:center">Rp5.000,00</td>
                  <td style="text-align:center">Rp.45.000,00</td>
                    <td>
                      <div><text class = "text-primary">Jalan/Gang </text>Jl. Joko No. 3</div>
                      <div><text class = "text-primary">RT/RW </text>01/08</div>
                      <div><text class = "text-primary">Kelurahan </text>Tingkir</div>
                      <div><text class = "text-primary">Kabupaten/Kota </text>Salatiga</div>
                      <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>
                    </td>
                    <td style="text-align:center">Dikembalikan</td>
                </tr>

            </tbody>
        </table>
    </div>
</body>
</html>
