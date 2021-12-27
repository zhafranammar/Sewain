<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>

<body>
    <?php include '../php/navbar.php'; ?>

    <section class="keranjang-container">
        <div class="judul">
            <h1 class="judul-title">Keranjang</h1>
        </div>
        <div class="keranjang-list mt-5">
            <div class="keranjang-product">
                <div class="kiri">
                    <div class="keranjang-img">
                        <img src="https://media.gq.com/photos/56e71c0b14cbe0637b261d7f/4:3/w_2260,h_1695,c_limit/horseinsuit2.jpg" alt="" srcset="">
                    </div>
                    <div class="keranjang-detail">
                        <div class="keranjang-title">
                            Kuda Sarjana
                        </div>
                        <p class="keranjang-deskripsi">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium alias, facilis eligendi consequuntur fuga quia aspernatur quam et nihil, eveniet officiis facere, aperiam explicabo! Distinctio laboriosam nobis laudantium illo dolorum!
                        </p>
                        <div class="keranjang-rating-toko">
                            Toko Dina
                            <div class="keranjang-bintang">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanan">
                    <div class="keranjang-jumlah">
                        <button type="button">-</button>
                        12
                        <button type="button">+</button>
                    </div>
                    <div class="keranjang-hari">
                        15 Hari
                    </div>
                    <div class="keranjang-togel">
                        <label class="switch switch200">
                            <input type="checkbox">
                            <span class="slider slider200"></span>
                        </label>
                        Tambahkan
                    </div>
                </div>
            </div>
            <div class="keranjang-product">
                <div class="kiri">
                    <div class="keranjang-img">
                        <img src="https://cdn11.bigcommerce.com/s-cykw02w8qi/images/stencil/1280x1280/products/5094/6291/mc-ac-03l__56995.1626852002.jpg?c=1" alt="" srcset="">
                    </div>
                    <div class="keranjang-detail">
                        <div class="keranjang-title">
                            Hidden Blade of Aguilar
                        </div>
                        <p class="keranjang-deskripsi">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium alias, facilis eligendi consequuntur fuga quia aspernatur quam et nihil, eveniet officiis facere, aperiam explicabo! Distinctio laboriosam nobis laudantium illo dolorum!
                        </p>
                        <div class="keranjang-rating-toko">
                            Toko Dina
                            <div class="keranjang-bintang">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanan">
                    <div class="keranjang-jumlah">
                        <button type="button">-</button>
                        12
                        <button type="button">+</button>
                    </div>
                    <div class="keranjang-hari">
                        200 Hari
                    </div>
                    <div class="keranjang-togel">
                        <label class="switch switch200">
                            <input type="checkbox">
                            <span class="slider slider200"></span>
                        </label>
                        Tambahkan
                    </div>
                </div>
            </div>
            <div class="keranjang-product">
                <div class="kiri">
                    <div class="keranjang-img">
                        <img src="https://i.pinimg.com/originals/c6/18/a2/c618a263c08433df4e5f7e1ab30d09d6.jpg" alt="" srcset="">
                    </div>
                    <div class="keranjang-detail">
                        <div class="keranjang-title">
                            Kucing Gepeng
                        </div>
                        <p class="keranjang-deskripsi">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium alias, facilis eligendi consequuntur fuga quia aspernatur quam et nihil, eveniet officiis facere, aperiam explicabo! Distinctio laboriosam nobis laudantium illo dolorum!
                        </p>
                        <div class="keranjang-rating-toko">
                            Toko Dina
                            <div class="keranjang-bintang">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanan">
                    <div class="keranjang-jumlah">
                        <button type="button">-</button>
                        12
                        <button type="button">+</button>
                    </div>
                    <div class="keranjang-hari">
                        3 Hari
                    </div>
                    <div class="keranjang-togel">
                        <label class="switch switch200">
                            <input type="checkbox">
                            <span class="slider slider200"></span>
                        </label>
                        Tambahkan
                    </div>
                </div>
            </div>
        </div>
        <div class="keranjang-btn mt-5">
            <div class="keranjang-total">
                Rp.2.000.000
            </div>
            <a href="/Sewain/views/pembayaran.php" class="btn-bayar">
                <button type="submit">
                    <i class="fas fa-money-check-alt"></i>
                    Bayar
                </button>
            </a>
        </div>

    </section>

</body>
<?php include '../php/footer.php'; ?>

</html>