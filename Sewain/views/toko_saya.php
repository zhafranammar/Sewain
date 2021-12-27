<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>

<body>
  <?php include '../php/navbar.php'; ?>

  <section class="toko-container">
    <div class="judul">
      <h1 class="judul-title">Toko Saya</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-image">  
            <div class="img-thumbnail mx-auto d-block">
              <img src="https://cf.shopee.co.id/file/b7bce189128756c909d2d471520db71a_tn" alt="" srcset="" width="100%" >
            </div>
            <br>
            <button type="button" class="upload">Pilih Foto</button>
            <br>
            <br>
            <p>Besar file: maksimum 2 Megabytes. Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
          </div>
        </div>
        <div class="col">
          <div class="box-identitas">
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
                  <h5>Nama Toko</h5>
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="inputNama" placeholder="Toko Kuda Emas">
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
                    <label for="inputJalan" class="col-sm-2 col-form-label">Jalan/ gang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputJalan" placeholder="Contoh : Jl. Pemuda No. 78">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputProvinsi" class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-10">
                      <select class="form-control">
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
                    <label for="inputKabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <select class="form-control">
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
                    <label for="inputDesa" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <select class="form-control">
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
                    <label for="inputDesa" class="col-sm-2 col-form-label">Desa/ Kelurahan</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>Pilih Desa/ Kelurahan</option>
                        <option>Sekaran</option>
                        <option>Patemon</option>
                        <option>Banaran</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="InputPos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="InputPos" placeholder="Masukkan Kode Pos">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">RT/ RW</label>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="RT">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="RW">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>

              <button type="button" class="simpan">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="barang-anda">
    <div class="judul">
      <h1 class="judul-title">Barang Anda</h1>
      <a href="/Sewain/views/menyewakan.php" class="judul-link">Tambah Barang</a>
    </div>
    <div class="row mt-3 g-5">
      <div class="product-card  col-3">
        <a href="#" class="product-card__link">
          <div class="product-card__img">
            <img src="https://media.gq.com/photos/56e71c0b14cbe0637b261d7f/4:3/w_2260,h_1695,c_limit/horseinsuit2.jpg" alt="" srcset="">
          </div>
          <div class="product-card__labels">
            <span class="barang__label">Wow</span>
            <span class="barang__label">Mantap</span>
          </div>
          <h2 class="product-card__title mt-3">Kuda Sarjana</h2>
          <p class="product-card__desc mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo facilis odio quod, libero quos accusantium illum temporibus? Omnis perferendis itaque architecto esse doloremque libero eaque, natus voluptate odio nam.</p>
          <p class="product-card__store mt-2">by Toko Kuda emas</p>
          <div class="product-card__stars_btn">
            <div class="product-card__stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <a href="detail_barang.php" class="product-card__btn">
              Lihat Detail
            </a>
            <a href="edit_barang.php" class="product-card__btn">
              Edit
            </a>
          </div>
        </a>

      </div>
      <div class="product-card  col-3">
        <a href="#" class="product-card__link">
          <div class="product-card__img">
            <img src="https://i.etsystatic.com/26585955/r/il/a768ed/2793982007/il_fullxfull.2793982007_kual.jpg" alt="" srcset="">
          </div>
          <div class="product-card__labels">
            <span class="barang__label">HOT</span>
            <span class="barang__label">Mantap</span>
          </div>
          <h2 class="product-card__title mt-3">Maid Outfit</h2>
          <p class="product-card__desc mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo facilis odio quod, libero quos accusantium illum temporibus? Omnis perferendis itaque architecto esse doloremque libero eaque, natus voluptate odio nam.</p>
          <p class="product-card__store mt-2">by Toko Kuda emas</p>
          <div class="product-card__stars_btn">
            <div class="product-card__stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <a href="detail_barang.php" class="product-card__btn">
              Lihat Detail
            </a>
            <a href="edit_barang.php" class="product-card__btn">
              Edit
            </a>
          </div>
        </a>

      </div>
      <div class="product-card  col-3">
        <a href="#" class="product-card__link">
          <div class="product-card__img">
            <img src="https://www.motortrend.com/uploads/sites/5/2020/05/The-Batmobile-Documentary.jpg?fit=around%7C875:492" alt="" srcset="">
          </div>
          <div class="product-card__labels">
            <span class="barang__label">Kualitas Terjamin</span>
          </div>
          <h2 class="product-card__title mt-3">Bat Mobile</h2>
          <p class="product-card__desc mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo facilis odio quod, libero quos accusantium illum temporibus? Omnis perferendis itaque architecto esse doloremque libero eaque, natus voluptate odio nam.</p>
          <p class="product-card__store mt-2">by Toko Kuda emas</p>
          <div class="product-card__stars_btn">
            <div class="product-card__stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <a href="detail_barang.php" class="product-card__btn">
              Lihat Detail
            </a>
            <a href="edit_barang.php" class="product-card__btn">
              Edit
            </a>
          </div>
        </a>

      </div>
      <div class="product-card  col-3">
        <a href="#" class="product-card__link">
          <div class="product-card__img">
            <img src="https://cdn11.bigcommerce.com/s-i32t4keptf/images/stencil/1280x1280/products/3038/3544/all3__63339.1626199785.jpg?c=1" alt="" srcset="">
          </div>
          <div class="product-card__labels">
            <span class="barang__label">Wow</span>
            <span class="barang__label">Mantap</span>
          </div>
          <h2 class="product-card__title mt-3">NERF47 Mainan Anak</h2>
          <p class="product-card__desc mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo facilis odio quod, libero quos accusantium illum temporibus? Omnis perferendis itaque architecto esse doloremque libero eaque, natus voluptate odio nam.</p>
          <p class="product-card__store mt-2">by Toko Kuda emas</p>
          <div class="product-card__stars_btn">
            <div class="product-card__stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <a href="detail_barang.php" class="product-card__btn">
              Lihat Detail
            </a>
            <a href="edit_barang.php" class="product-card__btn">
              Edit
            </a>
          </div>
        </a>

      </div>
    </div>
  </section>
  <section class="barang-kembali">
    <div class="judul">
      <h1 class="judul-title">Konfirmasi Pengembalian</h1>
    </div>
    <div class="container mt-3">
      <table class="table table-light">
        <thead class="table-primary">
          <tr style="text-align:center">
            <th>
              <h6>Id barang</h6>
            </th>
            <th>
              <h6>Tanggal Pengembalian</h6>
            </th>
            <th>
              <h6>Alamat Pengembalian</h6>
            </th>
            <th>
              <h6>Denda</h6>
            </th>
            <th>
              <h6>Konfirmasi pengembailian</h6>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align:center">1111</td>
            <td style="text-align:center">29/09/2021</td>
            <td>
              <div><text class="text-primary">Jalan/Gang </text>Jl. Roket No. 1</div>
              <div><text class="text-primary">RT/RW </text>01/02</div>
              <div><text class="text-primary">Kelurahan </text>Banyumanik</div>
              <div><text class="text-primary">Provinsi </text>Jawa Tengah</div>
              <div><text class="text-primary">Kabupaten/Kota </text>Semarang</div>
            </td>
            <td style="text-align:center">Rp0,00</td>
            <td style="text-align:center"><a href="#"><button type="button" class="btn btn-primary">Konfirmasi</button></a></td>
          </tr>
          <tr>
            <td style="text-align:center">1119</td>
            <td style="text-align:center">30/09/2021</td>
            <td>
              <div><text class="text-primary">Jalan/Gang </text>Jl. Nila No. 10</div>
              <div><text class="text-primary">RT/RW </text>03/02</div>
              <div><text class="text-primary">Kelurahan </text>Wonodri</div>
              <div><text class="text-primary">Provinsi </text>Jawa Tengah</div>
              <div><text class="text-primary">Kabupaten/Kota </text>Semarang</div>
            </td>
            <td style="text-align:center">Rp20.000,00</td>
            <td style="text-align:center"><a href="#"><button type="button" class="btn btn-primary">Konfirmasi</button></a></td>
          </tr>
          <tr>
            <td style="text-align:center">2044</td>
            <td style="text-align:center">25/09/2021</td>
            <td>
              <div><text class="text-primary">Jalan/Gang </text>Jl. Buyu No. 25</div>
              <div><text class="text-primary">RT/RW </text>02/01</div>
              <div><text class="text-primary">Kelurahan </text>Bulusan</div>
              <div><text class="text-primary">Provinsi </text>Jawa Tengah</div>
              <div><text class="text-primary">Kabupaten/Kota </text>Semarang</div>
            </td>
            <td style="text-align:center">Rp0,00</td>
            <td style="text-align:center"><a href="#"><button type="button" class="btn btn-primary">Konfirmasi</button></a></td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>
</body>
<?php include '../php/footer.php'; ?>

</html>
