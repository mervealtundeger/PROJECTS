<?php
include("ayarlar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALORANT</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="still.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <script src="bootstrap.js"></script>
</head>

<body>
    <div class="ust-kisim">
        <nav class="navbar navbar-expand-lg nav-bg">
            <div class="container p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item d-flex align-items-center p-2">
                        <a class="nav-link" aria-current="page" href="/index.php" >Anasayfa</a><
                            <span class="ayir">|</span>
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
                        <a class="nav-link" href="/ayarlar.php?git=techizat">Teçhizat</a>
                            <span class="ayir">|</span>
                        </li>

                        <li class="nav-item d-flex align-items-center p-2">
                        <a class="nav-link" href="/ayarlar.php?git=iletisim">İletişim</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-2">
        <div class="row" p-4>
            <div class="col-md-12 tek d-flex justify-content-around align-items-center">
                <p class="imza">
                    <i class="fa-solid fa-angles-right"></i>
                    <b> 5'e 5, <span class="tirnak"> karakter tabanlı</span>, taktiksel nişancılık oyunu</b>
                </p>
                <button class="btn btn-warning">Hemen İndir</button>
            </div>

        </div>
    </div>
    


</body>

</html>