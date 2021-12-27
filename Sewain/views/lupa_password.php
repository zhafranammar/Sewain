<html>
    <head>
        <title>Verifikasi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/Sewain/assets/bootstrap.min.css" rel="stylesheet">
    </head>

    <center><img src="/Sewain/assets/img/logosewain.png" width="150" height="150"/></center>

    <style type:"text/css">
    body{
      background: linear-gradient(-45deg, #23d5ab, #23a6d5, #e73c7e, #ee7752);
      background-size: 100% 100%;
    }
    </style>

      <body>
          <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-5">
              <div class="card">
                  <div class="card-header  mb-0"><h5 class="text-center">Verifikasi</h5></div>
                  <div class="card-body">
                  <form>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Anda">
                  </div>
                  <button class="btn btn-primary" type="button">Kirim Kode</button>
                  <p></p>
                  <div class="mb-3">
                      <label for="text" class="form-label">Masukkan Kode</label>
                      <input type="text" class="form-control" id="text" placeholder="Masukkan Kode yang Dikirimkan">
                  </div>
                    <button class="btn btn-primary" onclick="location.href='/Sewain/views/konfirmasi_password.php'" type="button">Verifikasi</button>
                  </form>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </body>
  </html>
