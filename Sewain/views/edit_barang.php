<!DOCTYPE html>
<html lang="en">

<?php include '../php/header.php'; ?>

<body>
    <?php include '../php/navbar.php'; ?>
    <h1 class="profil">Edit Barang</h1>
    <div class="container-fluid">
        <div class="box">
            <h2>Upload Produk</h2>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">
                    <h4>Foto Produk</h4>
                    <p>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px). Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini. Cantumkan min. 3 foto yang menarik agar produk semakin menarik peminjam.</p>
                </label>
                <div class="col">
                    <div class="boxfoto">
                        <button class="fotoProduk">
                            <img src="https://id.canon/media/image/2020/02/11/12ddda154fc94721834725a36b3b1ebd_EOS+850D+Front.png" width="122" height="122">
                        </button>
                        <button class="fotoProduk">
                            <img src="https://id.canon/media/image/2020/02/11/fc99547a7df94f6d8e117c28d7fc3f84_EOS+850D+Side.png" width="122" height="122">
                        </button>
                        <button class="fotoProduk">
                            <img src="https://id.canon/media/image/2020/02/11/d020564bcc324c4d9e7e7db99c435417_EOS+850D+Top.png" width="122" height="122">
                        </button>
                        <button class="fotoProduk">
                            <img src="https://id.canon/media/image/2020/02/11/333c7502aeba490cb634a7633aa17c31_EOS+850D+Back.png" width="122" height="122">
                        </button>
                        <button class="fotoProduk" type="file">
                            <svg width="122" height="122" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="121" height="121" rx="2.5" fill="#F2F6FC" />
                                <path d="M51.667 61H70.3337" stroke="#909099" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M61 51.6667L61 70.3334" stroke="#909099" stroke-width="1.5" stroke-linecap="round" />
                                <rect x="0.5" y="0.5" width="121" height="121" rx="2.5" stroke="#DCDFE6" stroke-linecap="square" stroke-linejoin="round" stroke-dasharray="3 4" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <h2>Informasi Produk</h2>
        <div class="container-fluid">
            <form action="">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">
                        <h4>Nama Produk</h4>
                        <p>Cantumkan min. 25 karakter agar semakin menarik dan mudah ditemukan oleh peminjam, terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.</p>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNama" placeholder="Kamera Canon 850D">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputProvinsi" class="col-sm-2 col-form-label">
                        <h4>Kategori</h4>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Pilih Kategori</option>
                            <option>Baju</option>
                            <option>Gaun</option>
                            <option>Kamera</option>
                            <option>Konsol</option>
                            <option>Mobil</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Password" class="col-sm-2 col-form-label">
                        <h4>Deskripsi Produk</h4>
                        <p>Cantumkan min. 25 karakter agar semakin menarik dan mudah ditemukan oleh peminjam, terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.</p>
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="EOS 850D merupakan kamera DSLR dengan harga wajar yang mampu memberikan kualitas yang Anda butuhkan. Sempurna bagi mereka yang memang serius mempelajari fotografi, inilah pilihan kamera yang sederhana dengan harga terjangkau untuk pemula yang ingin berkembang ke tingkat profesional dalam fotografi.  Sensor APS-C CMOS 24,1 megapiksel+ perekaman video 4K 45 titik AF semua tipe silang (jendela bidik) dan Dual Pixel CMOS AF (Live View) Konektivitas Wi-Fi + ergonomik dan interface yang mudah digunakan"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="box">
        <h2>Harga Pinjam</h2>
        <form action="">
            <div class="input-group mb-3">
                <label for="inputTarif" class="col-sm-2 col-form-label">Tarif Perhari</label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputTarif">Rp.</span>
                </div>
                <input type="text" class="form-control" placeholder="20.000">
            </div>
            <div class="input-group mb-3">
                <label for="inputLama" class="col-sm-2 col-form-label">Minimum Penyewaan</label>
                <input type="text" class="form-control" placeholder="1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputTarif">Hari</span>
                </div>
            </div>
        </form>
    </div>
    <div class="box">
        <h2>Pengelolaan Produk</h2>
        <form action="">
            <div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Status Produk</label>
                <div class="col-sm-10">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Stok produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" placeholder="8">
                </div>
            </div>
        </form>
    </div>

    <div class="box">
        <h2>Pengiriman</h2>
        <div class="form-group row">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Layanan Pengiriman</label>
            <div class="col-sm-10">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">GoSend</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">GoBox</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">GrabExpress</label>
                </div>
            </div>
        </div>
    </div>
    <div class="box_simpan">
        <a href="/Sewain/views/toko_saya.php">
            <button href type="button" class="simpan_brg">Simpan</button>
        </a>
    </div>
</body>
