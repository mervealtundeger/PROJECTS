
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VALORANT</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="still.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="bootstrap.js"></script>
</head>

<body>
    <div class="iletisim">
        <nav class="navbar navbar-expand-lg nav-bg">
            <div class="container p-0">
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid logo" src="img/bir.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" aria-current="page" href="/index.php">Anasayfa</a>
                            < <span class="ayir">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="/ayarlar.php?git=karakterler">Karakterler</a>

                            <span class="ayir">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="/ayarlar.php?git=haritalar">Haritalar</a>
                            <span class="ayir">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="ayarlar.php?git=techizat">Teçhizat</a>
                            <span class="ayir">|</span>
                        </li>

                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="/ayarlar.php?git=iletisim">İletişim</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center header-yuk">
                    <div class="sayfa-baslik ms-4">
                        <h3>İLETİŞİM</h3><br />
                        <p><b>*Hizmetlerimiz hakkında bizlerle 7/24 iletişim
                                kurmak için aşağıdaki formu kullanabilirsiniz.
                            </b>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h4>İletişim Formu</h4>
                <hr />
                <form action="">
                    <div class="mb-3">
                        <label for="adSoyad" class="form-label">Adı Soyadı</label>
                        <input type="text" class="form-control" id="adSoyad" placeholder="Adınız ve Soyadınız" />
                    </div>
                    <div class="mb-3">
                        <label for="eMail" class="form-label">Email addres</label>
                        <input type="email" class="form-control" id="eMail" placeholder="Email Adresiniz" />
                    </div>
                    <div class="mb-3">
                        <label for="konu" class="form-label">Konu</label>
                        <select class="form-select" id="konu" aria-label="Default select example">
                            <option selected>Bilgi Alma Alma</option>
                            <option value="1">İade Politikası</option>
                            <option value="2">İşe Yarar Hata Kodları</option>
                            <option value="3">Hesap Kurtarma</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mesaj" class="form-label">Mesaj</label>
                        <textarea class="form-control" id="mesaj" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success btn-lg">
                            <i class="fa-solid fa-bars-staggered me-2 simgeler"></i><i class="fa-solid fa-envelope me-2 simgeler"></i>Gönder
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/s.webp" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h4><i class="fa-solid fa-location-dot me-2"></i>Adres</h4>
                <hr />
                <p>
                    THE WORLD
                </p>
                <h4><i class="fa-solid fa-phone me-2"></i>Telefon</h4>
                <hr />
                <p>0000000000</p>
                <h4><i class="fa-solid fa-envelope me-2"></i>E-Mail</h4>
                <hr />
                <p>valodestek@gmail.com</p>
            </div>
            <div class="col-md-6">
                <iframe src="img/13.jpg" height="450px" width="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-12 footer-sutun d-flex flex-column justify-content-center align-items-center">
                <div class="icons">
                    <i class="fa-brands fa-instagram-square fa-3x me-2"></i>
                    <i class="fa-brands fa-facebook-square fa-3x me-2"></i>
                    <i class="fa-brands fa-twitter-square fa-3x me-2"></i>
                    <i class="fa-brands fa-youtube fa-3x"></i>
                    <i class="fa-brands fa-discord fa-3x me-2 "></i>

                </div>
            </div>
        </div>
    </div>
</body>

</html>