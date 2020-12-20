<?php
    $servername = "localhost";
    $username = "id15481466_logisticommerce";
    $password = "Ecommerceeai123!";
    $databasename = "id15481466_db_logistic";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Koneksi Gagal!");
    }

    $query = "SELECT * FROM pengiriman_barang";
    $result = mysqli_query($conn, $query);
    while($data = mysqli_fetch_array($result)){
        
        $item[] = array(
            'id'=>$data["id_pengiriman"],
            'jenis pengiriman'=>$data["jenis_pengiriman"],
            'nama barang'=>$data["nama_barang"],
            'berat'=>$data["berat_barang"],
            'jenis barang'=>$data["jenis_barang"],
            'tujuan'=>$data["tujuan"]
        );
    }

    $response = array(
        'status'=>'berhasil!',
        'data'=>$item
    );

    echo json_encode($response);
?>