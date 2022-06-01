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
      .detail-produk{
        background-color: #ffffff;
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
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar--->

    <!--Awal Breadcrumb--->
    <div class="container">
      <nav aria-label="breadcrumb" class="mt-3" style="background-color: #fff;">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="main.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
      </nav>
    </div>
    <!--Akhir Breadcrumb--->

    <!--Awal roduk--->
    <div class="container">
      <div class="row detail-produk">
        <!--Kiri--->
        <div class="col-lg-5">
          <figure class="figure">
            <img src="img/produk1.png" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"></figcaption>
          </figure>
        </div>
        <!--Kanan--->
        <div class="col-lg-5 mt-3">
          <h4>Beras</h4>
        </div>
      </div>
    </div>
    <!--Akhir Produk--->












    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>