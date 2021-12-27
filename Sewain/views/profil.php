<!DOCTYPE html>
<html lang="en">

<?php include '../php/header.php'; ?>

<body>
    <?php include '../php/navbar.php'; ?>
    <h1 class="profil">Profil Saya</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box1">
                    <svg class="upload-img" width="302" height="302" viewBox="0 0 302 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="301" height="301" rx="2.5" fill="#F2F6FC" />
                        <path d="M141.667 151H160.334" stroke="#909099" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M151 141.667L151 160.333" stroke="#909099" stroke-width="1.5" stroke-linecap="round" />
                        <rect x="0.5" y="0.5" width="301" height="301" rx="2.5" stroke="#DCDFE6" stroke-linecap="square" stroke-linejoin="round" stroke-dasharray="3 4" />
                    </svg>
                    <br>
                    <br>
                    <button type="button" class="upload">Pilih Foto</button>
                    <br>
                    <br>
                    <p>Besar file: maksimum 2 Megabytes. Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                </div>
            </div>
            <div class="col">

                <div class="box2">
                    <form>
                        <div class="form-group row">
                            <label for="inputUsername" class="col-sm-2 col-form-label">
                                <h5>Username</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="inputUsername" placeholder="bimo123">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">
                                <h5>Nama</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="inputNama" placeholder="Bimo Aryo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">
                                <h5>Email</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="staticEmail" placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password" class="col-sm-2 col-form-label">
                                <h5>Password</h5>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="********">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="inputNomor" class="col-sm-2 col-form-label">
                                <h5>Nomor Telepon</h5>
                            </label>
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-lg" id="inputGroup">+62</span>
                            </div>
                            <input type="text" class="form-control form-control-lg">
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">
                                <h5>Alamat</h5>
                            </label>
                            <div class="col-sm-10">
                                <div class="form-group row">
                                    <label for="inputJalan" class="col-sm-2 col-form-label">
                                        <h5>Jalan/ gang</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="inputJalan" placeholder="Contoh : Jl. Pemuda No. 78">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-2 col-form-label">
                                        <h5>Provinsi</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg">
                                            <option>Pilih Provinsi</option>
                                            <option>DKI Jakarta</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Timur</option>
                                            <option>Bali</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKabupaten" class="col-sm-2 col-form-label">
                                        <h5>Kabupaten</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg">
                                            <option>Pilih Kabupaten</option>
                                            <option>Demak</option>
                                            <option>Kudus</option>
                                            <option>Salatiga</option>
                                            <option>Semarang</option>
                                            <option>Solo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKec" class="col-sm-2 col-form-label">
                                        <h5>Kecamatan</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg">
                                            <option>Pilih Kecamatan</option>
                                            <option>Banyumanik</option>
                                            <option>Gunungpati</option>
                                            <option>Semarang Tengah</option>
                                            <option>Semarang Timur</option>
                                            <option>Tembalang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKel" class="col-sm-2 col-form-label">
                                        <h5>Kelurahan</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg">
                                            <option>Pilih Kelurahan</option>
                                            <option>Sekaran</option>
                                            <option>Patemon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InputPos" class="col-sm-2 col-form-label">
                                        <h5>Kode Pos</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="InputPos" placeholder="Masukkan Kode Pos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAlamat" class="col-sm-2 col-form-label">
                                        <h5>RT/ RW</h5>
                                    </label>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg" placeholder="RT">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg" placeholder="RW">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password" class="col-sm-2 col-form-label">
                                <h5>Jenis Kelamin</h5>
                            </label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input-lg" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="L">
                                    <label class="form-check-label" for="inlineRadio1">
                                        <h5>Laki - Laki</h5>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="P">
                                    <label class="form-check-label" for="inlineRadio2">
                                        <h5>Perempuan</h5>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include '../php/footer.php'; ?>