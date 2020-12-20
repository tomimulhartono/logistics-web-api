<?php

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\libraries\REST_Controller;


    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "db_logistic";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Koneksi Gagal!");
    }

    $query = "SELECT * FROM pengiriman_barang";
    $result = mysqli_query($conn, $query);
    while($data = mysqli_fetch_array($result)){
        
        $item[] = array(
            'No. Resi'=>$data["id_pengiriman"],
            'Jenis Pengiriman'=>$data["jenis_pengiriman"],
            'Nama Barang'=>$data["nama_barang"],
            'Berat Barang'=>$data["berat_barang"],
            'Jenis Barang'=>$data["jenis_barang"],
            'Tujuan'=>$data["tujuan"]
        );
    }

    $response = array(
        'status'=>'Berhasil!',
        'data'=>$item
    );

    echo json_encode($response);
?>