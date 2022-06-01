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

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Tambah Data Produk</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<select class="input-control" name="kategori" required>
						<option value="">--Pilih Category--</option>
						<?php 
							$kategori = mysqli_query($conn, "SELECT * FROM category ORDER BY id DESC");
							while($r = mysqli_fetch_array($kategori)){
						?>
						<option value="<?php echo $r['id'] ?>"><?php echo $r['nama_category'] ?></option>
						<?php } ?>
					</select>

					<input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
					<input type="text" name="harga" class="input-control" placeholder="Harga" required> 
					<label for=""> file format jpg png</label>
					<input type="file" name="gambar" class="input-control" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
                    <input type="text" name="harga-jual" class="input-control" placeholder="Harga jual" required>
                    <input type="text" name="stok" class="input-control" placeholder="stok" required>
					<br>
					<br>
					<a href="produk.php"><button type="button" class="btn btn-primary">Kembali</button></a>
					<input type="submit" name="submit" value="Submit" class="btn btn-danger">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						// print_r($_FILES['gambar']);
						// menampung inputan dari form
						$kategori 	= $_POST['kategori'];
						$nama 		= $_POST['nama'];
						$harga 		= $_POST['harga'];
						$deskripsi 	= $_POST['deskripsi'];
            $hargajual 		= $_POST['harga-jual'];
            $stok = $_POST['stok'];


						// menampung data file yang diupload
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];

						$type1 = explode('.', $filename);
						$type2 = $type1[1];

						$newname = 'produk'.time().'.'.$type2;

						// menampung data format file yang diizinkan
						$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

						// validasi format file
						if(!in_array($type2, $tipe_diizinkan)){
							// jika format file tidak ada di dalam tipe diizinkan
							echo '<script>alert("Format file tidak diizinkan")</scrtip>';

						}else{
							// jika format file sesuai dengan yang ada di dalam array tipe diizinkan
							// proses upload file sekaligus insert ke database
							move_uploaded_file($tmp_name, './produk/'.$newname);

							$insert = mysqli_query($conn, "INSERT INTO barang VALUES (
										null,
										'".$nama."',
										'".$harga."',
										'".$deskripsi."',
										'".$hargajual."',
                    '".$stok."',
										'".$newname."',
                    '".$kategori."'
											) ");

							if($insert){
								echo '<script>alert("Tambah data berhasil")</script>';
								echo '<script>window.location="produk.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($conn);
							}

						}

						
						
					}
				?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 Disbar.</small>
		</div>
	</footer>
	<script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
</body>
</html>