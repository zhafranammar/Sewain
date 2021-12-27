<html>
    <head>
        <title>Login</title>
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
                  <div class="card-header  mb-0"><h5 class="text-center">Login</h5></div>
                  <div class="card-body">
                  <form>
                  <div class="mb-2">
                      <label for="Username" class="form-label">Email/Username</label>
                      <input type="Username" class="form-control" id="Username" placeholder="Masukkan Email Anda">
                  </div>
                  <div class="mb-2">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Masukkan Password">
                  </div>
                  <div class="mb-2 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
                  <div class="d-grid gap-3 col-8 mx-auto">
                    <button class="btn btn-primary" onclick="location.href='/Sewain/index.php'" type="button">Login</button>
                    <button class="btn btn-outline-primary" onclick="location.href='/Sewain/views/signup.php'" type="button">Sign Up</button>
                  </div>
                  <p> </p>
                  <a href="lupa_password.php">Lupa Password?</a>
                  </form>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </body>
  </html>
