<?php
    $servername="localhost";
    $username = "id15481466_logisticommerce";
    $password = "Ecommerceeai123!";
    $database = "id15481466_db_logistic";

    $conn = mysqli_connect($servername,$username,$password,$database);
        if(mysqli_connect_errno())
        {
            echo'Koneksi Gagal:'.mysqli_connect_error();
        }
        else {
        }
    error_reporting(0);
?>
