<?php
    $servername="localhost";
    $username = "id15481466_logisticommerce";
    $password = "Ecommerceeai123!";
    $database = "id15481466_db_logistic";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Koneksi Gagal!");
    }

    $awb = $_POST['awb'];
    $services = $_POST['services'];
    $dos = $_POST['dos'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $shipper = $_POST['shipper'];
    $consignee = $_POST['consignee'];
    $time = $_POST['time'];
    $position = $_POST['position'];
    $status = $_POST['status'];
 
    if(isset($_POST['submit'])) {  

    mysqli_query($conn, "UPDATE tracking SET time_track = '$time', position = '$position', status ='$status' WHERE no_awb = '$awb'");
    echo "<script language='javascript'>
      alert('Update Tracking Berhasil');
    window.location='../tracking_update.php';
    </script>";
} 

    ?>