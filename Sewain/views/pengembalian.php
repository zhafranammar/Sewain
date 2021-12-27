<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "../css/pengembalian.css" rel = "stylesheet">
    <link href = "./css/bootstrap.min.css" rel = "stylesheet">
    <script src = "./js/bootstrap.bundle.min.js"></script>
    <title>Sewain</title>
</head>
<body style="background-color: #e5e5e5;">
    <?php include '../php/navbar.php'; ?>
    <div class="container mt-3"><h1>Pengembalian</h1></div>
    <br>
    <div class="container mt-3">
        <table class="table table-light">
            <thead class="table-primary">
                <tr style="text-align:center">
                    <th><h6>Id barang</h6></th>
                    <th><h6>Tanggal Pengembalian</h6></th>
                    <th><h6>Alamat Pengembalian</h6></th>
                    <th><h6>Denda</h6></th>
                    <th><h6>Konfirmasi Pemilik</h6></th>
                    <th><h6>Beri Penilaian dan Ulasan</h6></th>                  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center">1111</td>
                    <td style="text-align:center">29/09/2021</td>
                    <td>
                        <div><text class = "text-primary">Jalan/Gang </text>Jl. Roket No. 1</div>
                        <div><text class = "text-primary">RT/RW </text>01/02</div>
                        <div><text class = "text-primary">Kelurahan </text>Banyumanik</div>
                        <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>                    
                        <div><text class = "text-primary">Kabupaten/Kota </text>Semarang</div>
                    </td>
                    <td style="text-align:center">Rp0,00</td>
                    <td style="text-align:center">Menunggu...</td>
                    <td style="text-align:center"><a href="./penilaian.php"><button type="button" class="btn btn-primary" >Klik disini</button></a></td>
                </tr>
                <tr>
                    <td style="text-align:center">1119</td>
                    <td style="text-align:center">30/09/2021</td>
                    <td>
                        <div><text class = "text-primary">Jalan/Gang </text>Jl. Nila No. 10</div>
                        <div><text class = "text-primary">RT/RW </text>03/02</div>
                        <div><text class = "text-primary">Kelurahan </text>Wonodri</div>
                        <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>
                        <div><text class = "text-primary">Kabupaten/Kota </text>Semarang</div>
                    </td>
                    <td style="text-align:center">Rp20.000,00</td>
                    <td style="text-align:center">Menunggu...</td>
                    <td style="text-align:center"><button type="button" class="btn btn-primary" >Klik disini</button></td>
                </tr>
                <tr>
                    <td style="text-align:center">2044</td>
                    <td style="text-align:center">25/09/2021</td>
                    <td>
                        <div><text class = "text-primary">Jalan/Gang </text>Jl. Buyu No. 25</div>
                        <div><text class = "text-primary">RT/RW </text>02/01</div>
                        <div><text class = "text-primary">Kelurahan </text>Bulusan</div>
                        <div><text class = "text-primary">Provinsi </text>Jawa Tengah</div>                        
                        <div><text class = "text-primary">Kabupaten/Kota </text>Semarang</div>
                    </td>
                    <td style="text-align:center">Rp0,00</td>
                    <td style="text-align:center">Telah dikonfirmasi</td>
                    <td style="text-align:center"><button type="button" class="btn btn-primary" >Klik disini</button></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>
</html>