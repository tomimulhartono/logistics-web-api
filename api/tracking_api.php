<?php
    $servername = "localhost";
    $username = "id15481466_logisticommerce";
    $password = "Ecommerceeai123!";
    $databasename = "id15481466_db_logistic";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Koneksi Gagal!");
    }

    $query = "SELECT * FROM tracking";
    $result = mysqli_query($conn, $query);
    while($data = mysqli_fetch_array($result)){
        
        $item[] = array(
            'no. awb'=>$data["no_awb"],
            'service'=>$data["service"],
            'tanggal pengiriman'=>$data["date_of_shipment"],
            'asal'=>$data["origin"],
            'tujuan'=>$data["destination"],
            'pengirim'=>$data["shipper"],
            'penerima'=>$data["consignee"],
            'tanggal'=>$data["time_track"],
            'posisi'=>$data["position"],
            'status'=>$data["status"]
        );
    }

    $response = array(
        'status'=>'berhasil!',
        'data'=>$item
    );

    echo json_encode($response);
?>