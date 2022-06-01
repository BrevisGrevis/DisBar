<?php

include '../config.php';

if(isset($_GET{'id'}) ){
    $delete = mysqli_query($conn, "DELETE FROM category WHERE id = '".$_GET{'id'} ."'  ");
    echo '<script> window.location="kategory.php" </script>';

}
?>