<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: masuk.php");
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DISBAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>
      body{
        background-color: #E6e6e6;
      }
      .form-control{
        width: 900px;
      }
      .rounded-circle{
        width: 30px;
        margin-right: 10px;
      }
      .img-categori{
        width: 50px;
      }
      .row-container{
        border-radius: 20px;
        background-color: #fff;
        margin: 0px;
      }
      .link-website{
        text-decoration: none;
        color: black;
      }
      .link-website:hover{
        color: black;
      }
      .list-produk:hover{
        box-shadow: 0px 2px 10px #666666;
        transform: scale(1.01);
      }
    </style>
  </head>
  <body>

    <!--Awal Navbar--->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-lg p-3 mb-5">
      <div class="container">
        <a class="navbar-brand  fw-bold" href="#">DISBAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari disini" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="#">
                <i class="bi bi-bell-fill"></i>
              </a>
            </li>
            <li class="nav-item mx-2">
              <a class="navbar-brand" href="#">
                <i class="bi bi-cart"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="">
                <img src="img/pp.png" class="rounded-circle" alt="...">
              </a>
            </li>
            <li class="nav-item">
              <a href="../keluar.php">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAE/ElEQVRoge2YW2xUVRSGv7WnpYVYBAxMp2hAFBAIl4QElM40gERjOwMGJAE10SoPJF5BH9SoKdEoMaIhwbuQiCCJEIV2AB8I1F4gIYgGaIjBWwBnphUqCJbe5iwfZhoJ4cycM5zhhX5P05l/r/X/2fv07L2hn376yRuJSDAcrwpV5bNHQT6Lq7INUYDifPXIawCgKM/1MflukG9u3AAKEouEFsUis+7LtUYiEgzHw6GHFCTXGjk9A6crg+MSPj4W1TmIOQ8MyaWOKl+BliTC5Xvb8C0fEW044baG6xlIREILfIZDKHOANlSWua3xP/IE0AYyN4n1QyIcjLit4CpAoir0jKp+A5QIsrlbuSsQbdzmtmkfgWjjtt6e5ARVtgAlCtvj4eBTbmo4XnvxcLAaWE9q+b8ciDa+42CMpow2Ze2TiARfUuWt9J+PB6JNG534cjQDsaryEPAZIKDPOTHvltK6ptUCK1I9WP/n/FC5k3FZA7TPm3ezwEbAp7A6EG1e58JXF9DpVFwabVqLyrtAgbH0y7MPzBycbUzWAJ3FnasQGQ0cDFwseM2pmRS6ENGFbkaUJjpeQTkE3N5TMGBVNn3GtRmrnDVKjPkZKBTLTCvd1XDUjZlcSVRWTFZj/QR0Wz4zbuSOhlN22swzYMxKUvuZTdfLPEDproajgmwBin2WrsyktQ2g06cXCiwFMEbWeOwxK8l0T1VdqrNn275wbQPE/QPvBYYjHPXXNh7Jg8eMjKxt+BFoAfzxku65djrbAEYIAiha5709ZyjUAQi+oJ3GNoAFM1ICc9B7a45J9VadYSewDSCGMQDSmzzmuS2HFGDSveUOO419AOUWgI6iAWe9NuaUrp6edG8dZqex/y8ENwGMPsdFr4055dauon/SH23fyJneA50Afw3P34E8G+0DLw1Kf+yw02QKcBZAL3b7vTTlhqSvqK+37TLOtIROAFg+Ge+xL8dYYo0HEMT2pGb/EMNhABUcbWvzgaWp3hZ62E5jPwMW+wCMSqX31pwhUAngM7rXTmMb4F8t2Qe0K0xLVFZMzoO/jLSGg1OBKcCZM0XnvrfT2QYYu3t3F6KbAdSnL3hvMTMq+iKAwuZJW1u67XSZt9O+wvcQelB95HrOQms4OFVVlgLd6jMZd8IZAwS21/+hykdAgRrr05bFkwZ4afRqtCyeNMASPgF8wLpMhxlwcKQs7ix+HTgN3D300pAPvLFpz9COoR+izAROFhityabPGmDYnj3nVfVhoFeQZbGq8ue9MHo1YpHQChGeROgxWEuG1zZfyDbG0bVK2c7mRlWpBlRE3o+Fg2u1xruLYQWJh4M1oroGULFY7o/uP+BkrKtL1Xi4/GmQtYBR1R09SPWonU1/52K6j98fnD2kuDf5Beh8wAKeDUSbHC9V17fCsUhokahuILVDbEf07c4Lhetur693fP8DqTN3a9mgx1T1TcCPcF6V6rJo07du6uR0rd0WrhiblOTnqFSkvzoJbFA1X5ftbDieaWx8QWgiSV0MVAOj0l/Xm6S1zL97/69uveR8L68grZHgErV4FWHiZT/FEI5g8RuGvodwMMoYhCkogcu0xxB9o7SueauA5uIj5wB9aA2m9VBojqr1KEbuv8Lg1TrGUb4TMZv80xvqpQbrWvpfc4AraZt/z52W5Zugwm1YlABguCDKKWOSx0fUHvjF65799HMj8x93CrBLGKiFzwAAAABJRU5ErkJggg==">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar--->
    
    <!--Awal Kategori--->
    <div class="container my-5">
      <div class="row text-center row-container">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href=""><img src="img/kategori.png" alt="" class="img-categori mt-3"></a>
            <p class="mt-2">Kategori</p>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Kategori--->

    <!--Awal Produk--->
    <div class="container">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="detail.php" class="link-website">
          <div class="card list-produk">
            <img src="img/produk1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2">
          <a href="" class="link-website">
          <div class="card list-produk">
            <img src="img/produk6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>
        
      </div>
    </div>
    <!--Akhir Produk--->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>