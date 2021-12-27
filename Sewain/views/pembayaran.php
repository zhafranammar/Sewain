<!DOCTYPE html>
<html lang="en">

<?php include '../php/header.php'; ?>
<body>
    <?php include '../php/navbar.php'; ?>


    <section class="tabs">
        <div class="tile" id="tile-1">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#alamat" type="button" role="tab" aria-controls="alamat" aria-selected="true">
                        <i class="fas fa-map-marked-alt"></i>
                        Alamat
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pengiriman-tab" data-bs-toggle="tab" data-bs-target="#pengiriman" type="button" role="tab" aria-controls="pengiriman" aria-selected="false">
                        <i class="fas fa-truck-moving"></i>
                        Pengiriman
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pembayaran-tab" data-bs-toggle="tab" data-bs-target="#pembayaran" type="button" role="tab" aria-controls="pembayaran" aria-selected="false">
                        <i class="far fa-credit-card"></i>
                        Pembayaran
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="checkout-tab" data-bs-toggle="tab" data-bs-target="#checkout" type="button" role="tab" aria-controls="checkout" aria-selected="false">
                        <i class="far fa-handshake"></i>
                        Checkout
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
                    <form action="">
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="input-group input-group-lg flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Nama Lengkap</span>
                                    <input type="text" class="form-control" placeholder="John Doe" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-lg flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No HP</span>
                                    <input type="text" class="form-control" placeholder="0813xxxx" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-9">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">Alamat<br>Lengkap</span>
                                    <textarea class="form-control" rows="6" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3 offset-6">
                                <div class="input-group input-group-lg flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Kode Post</span>
                                    <input type="text" class="form-control" placeholder="5676xxx" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pengiriman" role="tabpanel" aria-labelledby="pengiriman-tab">
                    <form action="">
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="input-group input-group-lg mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Layanan<br>Pengiriman</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>JNE</option>
                                        <option value="1">J&T</option>
                                        <option value="2">SiCepat</option>
                                        <option value="3">Grab</option>
                                        <option value="3">Pos Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-lg mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Waktu Antar</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Jam Kerja</option>
                                        <option value="1">Bebas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <h3>Biaya : Rp. 50.000</h3>
                        </div>
                    </form>

                </div>
                <div class="tab-pane fade" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="metode-pembayaran">
                                <div class="credit-card active">
                                    <div class="credit-title">
                                        <h4>Credit Card</h4>
                                        <p>Direct Payment</p>
                                    </div>
                                    <i class="fab fa-cc-visa"></i>
                                </div>
                                <div class="transfer">
                                    <div class="credit-title">
                                        <h4>Bank Transfer</h4>
                                        <p>3-4 Work Days</p>
                                    </div>
                                </div>
                                <div class="paypal">
                                    <div class="credit-title">
                                        <h4>PayPal</h4>
                                        <p>Direct Payment</p>
                                    </div>
                                    <i class="fab fa-cc-paypal"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text">CC</span>
                                <input type="text" class="form-control" placeholder="Credit Number" aria-label="Credit Number">
                                <input type="text" class="form-control" placeholder="CVC" aria-label="CVC">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    Agree with the <a href="#" style="text-decoration: none;">Terms and Conditions</a>
                                </label>
                            </div>
                            <button class="btn-checkout mt-5">Pay</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="checkout" role="tabpanel" aria-labelledby="checkout-tab">
                    <div class="checkout">
                        <div class="checkout-header">
                            <h2>
                                Penyewaan Berhasil
                            </h2>
                            <p>13:20, Senin 17 Agustus 2021</p>
                        </div>
                        <hr>
                        <div class="checkout-body">
                            <div class="row"></div>
                        </div>
                        <div class="checkout-footer">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


</body>
<?php include '../php/footer.php'; ?>

<script>

</script>
<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/penilaian.css">
    <link href = "./css/bootstrap.min.css" rel = "stylesheet">
    <script src = "./js/bootstrap.bundle.min.js"></script>
    <title>Sewain-Penilaian</title>
</head>

<body>
    <div class="container mt-3"><h1>Detail Pembayaran</h1></div>
    <br><br>
    <div class = "container mt-3">
        <div class="row">
            <div class = "col-3">
                <img src = "https://assets.indozone.news/local/5e67077a04398.jpg" class = "img-thumbnail border border-primary mx-auto d-block">
            </div>
            <div class = "col-3">
                <div class = "container mt-3"><h5>Nama Barang</5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Denda</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Deposit</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Jenis Pembayaran</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Jumlah</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Tanggal Pembayaran</h5></div>
                <hr size = "4">
            </div>
            <div class = "col-6">
                <div class = "container mt-3"><h5>Kamera Canon EOS 850D</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Rp. 150.000</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Rp. 300.000</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Indomaret</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Rp. 150.000</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>5 Desember 2021</h5></div>
                <hr size = "4">
                <div class = "container mt-3">
                    <button type="button" class="btn btn-primary btn-lg" >Lihat Barang</button>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>

</html> -->