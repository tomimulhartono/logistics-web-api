<?php
    $servername = "localhost";
    $username = "id15481466_logisticommerce";
    $password = "Ecommerceeai123!";
    $databasename = "id15481466_db_logistic";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Koneksi Gagal!");
    }

    $query = "SELECT * FROM jadwal_pengiriman";
    $result = mysqli_query($conn, $query);
    while($data = mysqli_fetch_array($result)){
        
        $item[] = array(
            'id'=>$data["id_jadwal"],
            'id pengiriman'=>$data["id_pengiriman"],
            'tanggal'=>$data["tanggal"],
            'pengirim'=>$data["nama_pengirim"],
            'alamat'=>$data["alamat"],
            'penerima'=>$data["nama_penerima"], 
        );
    }

    $response = array(
        'status'=>'berhasil!',
        'data'=>$item
    );

    echo json_encode($response);
?>