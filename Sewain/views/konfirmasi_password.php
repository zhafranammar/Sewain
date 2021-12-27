<html>
    <head>
        <title>Ganti Password</title>
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
                  <div class="card-header  mb-0"><h5 class="text-center">Ganti Password</h5></div>
                  <div class="card-body">
                  <form>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Ganti Password Anda</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password minimal 8-12 Karakter">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Konfirmasi Password Anda</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                  </div>
                  <button class="btn btn-primary btn-sm" onclick="location.href='/Sewain/views/login.php'" type="button">Verifikasi</button>
                  </div>
                </div>
                  </form>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </body>
  </html>
