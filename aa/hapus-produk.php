<?php

include '../config.php';

if(isset($_GET{'id'}) ){
    $delete = mysqli_query($conn, "DELETE FROM barang WHERE id = '".$_GET{'id'} ."'  ");
    echo '<script> window.location="produk.php" </script>';

}
?>