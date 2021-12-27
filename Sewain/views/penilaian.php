<!DOCTYPE html>
<html lang="en">
<?php include '../php/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/penilaian.css">
    <link href = "./css/bootstrap.min.css" rel = "stylesheet">
    <script src = "./js/bootstrap.bundle.min.js"></script>
    <title>Sewain-Penilaian</title>
</head>

<body>
    <?php include '../php/navbar.php'; ?>
    <div class="container mt-3"><h1>Penilaian</h1></div>
    <br><br>
    <div class = "container mt-3">
        <div class="row">
            <div class = "col-3">
                <img src = "https://assets.indozone.news/local/5e67077a04398.jpg" class = "img-thumbnail border border-primary mx-auto d-block">
            </div>
            <div class = "col-3">
                <div class = "container mt-3"><h5>Nama Barang</5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Pemilik</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Penilaian</h5></div>
                <hr size = "4">
                <br>
                <div class = "container mt-3"><h5>Ulasan
                    <i class="fas fa-pencil-alt"></i></h5>
                </div>
                <hr size = "4">
            </div>
            <div class = "col-6">
                <div class = "container mt-3"><h5>Kamera Canon EOS 850D</h5></div>
                <hr size = "4">
                <div class = "container mt-3"><h5>Ahmad Ramadhan Auni</h5></div>
                <hr size = "4">
                <div class = "container mt-3 container text-center">
                    <div class = "row">
                        <div class = "col-4 text-center">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                            <div><text>Kualitas barang</text></div>
                        </div>
                        <div class = "col-4">
                            <div class="rate">
                                <input type="radio" id="star10" name="rate2" value="10" />
                                <label for="star10" title="text">5 stars</label>
                                <input type="radio" id="star9" name="rate2" value="9" />
                                <label for="star9" title="text">4 stars</label>
                                <input type="radio" id="star8" name="rate2" value="8" />
                                <label for="star8" title="text">3 stars</label>
                                <input type="radio" id="star7" name="rate2" value="7" />
                                <label for="star7" title="text">2 stars</label>
                                <input type="radio" id="star6" name="rate2" value="6" />
                                <label for="star6" title="text">1 star</label>
                              </div>
                                <div>Biaya sewa</div>
                        </div>
                        <div class = "col-4">
                                <div class="rate text-align:center">
                                    <input type="radio" id="star15" name="rate3" value="15" />
                                    <label for="star15" title="text">5 stars</label>
                                    <input type="radio" id="star14" name="rate3" value="14" />
                                    <label for="star14" title="text">4 stars</label>
                                    <input type="radio" id="star13" name="rate3" value="13" />
                                    <label for="star13" title="text">3 stars</label>
                                    <input type="radio" id="star12" name="rate3" value="12" />
                                    <label for="star12" title="text">2 stars</label>
                                    <input type="radio" id="star11" name="rate3" value="11" />
                                    <label for="star11" title="text">1 star</label>
                                  </div>
                                <div>Respon pemilik</div>
                        </div>
                    </div>
                    <label for ="comment"></label>
                    <textarea class = "form-control" rows="3" id="comment" name="text"></textarea>
                <br>
                </div>
                <div class = "container mt-3">
                    <button type="button" class="btn btn-primary btn-lg" >Submit</button>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>

</html>