<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ./aa/main.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ./aa/main.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DisBar</title>
    <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      .border1{
        width: 250px;
        height: 150px;
      }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 50%;
        background-color: black;
        color: white;
        border-radius: 5px;
        font-weight: bold;
      }
      .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
      img{
      }
    </style>
</head>
<body>
<section class="form my-5 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-7 text-center">
          </div>
          <div class="col-5 px-5 pt-5">
            <div class="">
            </div>
            <h3 class="my-3">Masuk</h3>
            <form action="" method="POST">
              <div class="form-row">
                <div class="col-lg-8">
                  <input type="email" class="form-control my-3 p-2" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <input type="password" class="form-control p-2" placeholder="Password" name="password">
                </div>
              </div>
            <div class="input-group">
                <button name="submit" class="btn1 mt-3 mb-4">Masuk</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="daftar.php">Register</a></p>
        </form>
    </div>
</body>
</html>