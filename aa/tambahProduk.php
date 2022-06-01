<?php
include '../config.php';

// if (!isset($_SESSION['username'])) {
//   header("Location: masuk.php");
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DISBAR</title>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
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

    <!-- ck editor for description -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script> -->
  </head>
  <body>

    <!--Awal Navbar--->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-lg p-3 mb-5">
      <div class="container">
        <a class="navbar-brand  fw-bold" href="#">DISBAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="#">
                <i class="bi bi-bell-fill"></i>
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
    
    <div class="container p-3 mb-3" style="background-color: #fff;">
      <form action="" method="POST" enctype="multipart/form-data">
        <h5>Informasi Produkk</h5>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Pilih Kategory</label>
          <div class="col-sm-10">
            <select class="input-control" name="kategori" id="" required>
              <option value=""> --- pilih  ---</option>
              <?php
                $kategory = mysqli_query($conn, "SELECT * FROM category ORDER BY id DESC");
                while($a = mysqli_fetch_array($kategory)) {
              ?>
              <option value="<?php  echo $arr['id']; ?>"> <?php echo $arr['nama_category'];   ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Nama Produk</label>
          <div class="col-sm-10">
            <input name="nama" type="email" class="form-control" id="">
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Foto Produk</label>
          <input name="gambar" class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Deskripsi Produk</label>
          <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
        <br>
          <div class="row mb-4">
          <label for="" class="col-sm-2 col-form-label">Harga Produk (Rp)</label>
          <div class="col-sm-10">
            <input name="harga-produk" type="email" class="form-control" id="">
          </div>
        </div>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Stok Produk </label>
          <div class="col-sm-10">
            <input name="stok" type="text" class="form-control" id="">
          </div>
        </div>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Harga Jual (Rp) </label>
          <div class="col-sm-10">
            <input name="harga-jual" type="text" class="form-control" id="">
          </div>
        </div>
        
      <a href="produk.php"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
      <input type="submit" name="submit" class="btn btn-outline-danger" value="Tambah produk">


        </div>
      </form>
    </div>

    <!-- <div class="container p-3" style="background-color: #fff;">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Harga Produk (Rp)</label>
          <div class="col-sm-10">
            <input name="harga-produk" type="email" class="form-control" id="">
          </div>
        </div>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Stok Produk </label>
          <div class="col-sm-10">
            <input name="stok" type="text" class="form-control" id="">
          </div>
        </div>
        <div class="row mb-3">
          <label for="" class="col-sm-2 col-form-label">Harga Jual (Rp) </label>
          <div class="col-sm-10">
            <input name="harga-jual" type="text" class="form-control" id="">
          </div>
        </div>
        
      <button type="button" class="btn btn-outline-primary">Kembali</button>
      <button type="submit" name="submit" class="btn btn-outline-danger">Tambah Produk </button>
      </form>
    </div> -->
    <?php
    // submit post data php
    if (isset($_POST['submit'])) {
      
      // menampung input dari form
      $kategory = $_POST['kategori'];
      $nama = $_POST['nama'];
      $gambar = $_POST['gambar'];
      $deskripsi = $_POST['deskripsi'];
      $hargaProduk = $_POST['harga-produk'];
      $hargaJual = $_POST['harga-jual'];
      $stok = $_POST['stok'];
      // menampung data file yg diupload

      $filename = $_FILES['gambar']['name'];
      $tmp_name = $_FILES['gambar']['tmp_name'];

      $type1 = explode('.', $filename);
      $type2 = $type1[1];

      $newname = 'produk'. time(). '.' . $type2;

      

      // menampung data format file yang diizinkan

      $tipe_izin = array('jpg', 'png', 'jpeg', 'gif');

      //validasi format file
      if (!in_array($type2, $tipe_izin)) {
        echo "<script>alert('Format file tidak diizinkan !
        file hanya mendukung format jpg,png,jpeg dan gif')</script>";
      }else {
        echo "<script>alert('file berhasil diupload ')</script>";

        move_uploaded_file($tmp_name, './produk/' . $newname);

        $sql = mysqli_query($conn, "INSERT into barang VALUES(
                  null,
                  '$nama',
                  '$hargaProduk',
                  '$deskripsi',
                  '$hargaJual',
                  '$stok',
                  '$gambar',
                  '$kategory'
        )");

        if ($sql) {
          echo 'simpan berhasil';
        }else {
          echo 'gagal' . mysqli_error();
        }
      }

      //proses insert dan upload file


    }



    ?>



    


      <script>  
              CKEDITOR.replace( 'deskripsi' );
      </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>