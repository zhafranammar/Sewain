<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>

<body>
    <?php include '../php/navbar.php'; ?>

    <section class="detail-barang">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-card  col-10">
                        <a href="#" class="product-card__link">
                            <br>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://id.canon/media/image/2020/02/11/12ddda154fc94721834725a36b3b1ebd_EOS+850D+Front.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://id.canon/media/image/2020/02/11/fc99547a7df94f6d8e117c28d7fc3f84_EOS+850D+Side.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://id.canon/media/image/2020/02/11/d020564bcc324c4d9e7e7db99c435417_EOS+850D+Top.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://id.canon/media/image/2020/02/11/333c7502aeba490cb634a7633aa17c31_EOS+850D+Back.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h2 class="product-card__title mt-3">Kamera Canon 850D</h2>
                            <p class="product-card__desc mt-3">RATING 5.0 (20 Ulasan)</p>
                            <p class="product-card__store mt-2">by Toko Kuda emas</p>
                            <div class="product-card__stars_btn">
                                <div class="product-card__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="box-price">
                        <div class="judul">
                            <h1 class="judul-title">Kamera Canon EOS 850D</h1>
                        </div>
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    <h3>Pemilik</h3>
                                </td>
                                <td>
                                    <h3>Achmad Ramadhan Auni</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Asal</h3>
                                </td>
                                <td>
                                    <h3>Semarang</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Stock</h3>
                                </td>
                                <td>
                                    <h3>8</h3>
                                </td>
                            </tr>
                        </table>
                        <h3>Deskripsi Produk</h3>
                        <p>EOS 850D merupakan kamera DSLR dengan harga wajar yang mampu memberikan kualitas yang Anda butuhkan.
                            Sempurna bagi mereka yang memang serius mempelajari fotografi, inilah pilihan kamera yang sederhana
                            dengan harga terjangkau untuk pemula yang ingin berkembang ke tingkat profesional dalam fotografi. </p>
                        <br>
                        <p>Sensor APS-C CMOS 24,1 megapiksel+ perekaman video 4K
                            45 titik AF semua tipe silang (jendela bidik) dan Dual Pixel CMOS AF (Live View)
                            Konektivitas Wi-Fi + ergonomik dan interface yang mudah digunakan</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box">
                        <h2>Harga Sewa: </h2>
                        <h3>Rp. 20.000 / Hari</h3>
                        <br>
                        <br>
                        <form action="">
                            <label for="inputNama">
                                <h4>Banyak Barang yang ingin di sewa</h4>
                            </label>
                            <br>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Masukkan berupa Angka">
                            </div>
                            <br>
                            <br>
                            <label for="inputNama">
                                <h4>Berapa Lama Barang yang ingin di sewa</h4>
                            </label>
                            <br>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Masukkan berupa Angka dalam Hari">
                            </div>
                            <br>
                            <br>
                            <a class="btn btn-primary" href="keranjang.php"> Tambah Ke Keranjang</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include '../php/footer.php'; ?>

</html>
