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

    $query = "SELECT * FROM jadwal_pengiriman";
    $result = mysqli_query($conn, $query);
    while($data = mysqli_fetch_array($result)){
        
        $item[] = array(
            'No. Jadwal'=>$data["id_jadwal"],
            'Tanggal'=>$data["tgl_pengiriman"],
            'Nama Pengirim'=>$data["nama_pengirim"],
            'Alamat'=>$data["alamat"],
            'Nama Penerima'=>$data["nama_penerima"]
        );
    }

    $response = array(
        'status'=>'Berhasil!',
        'data'=>$item
    );

    echo json_encode($response);
?>