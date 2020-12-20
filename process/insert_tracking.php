<?php
	include "koneksi.php";
	$awb=$_POST["awb"];
	$services=$_POST["services"];
	$dos=$_POST["dos"];
	$origin=$_POST["origin"];
	$destination=$_POST["destination"];
	$shipper=$_POST["shipper"];
	$consignee=$_POST["consignee"];
	$time=$_POST["time"];
	$position=$_POST["position"];
	$status=$_POST["status"];

	if(isset($_POST['submit'])){

	$cekdata = mysqli_query($conn,"SELECT * FROM tracking where no_awb = '$_POST[awb]'");
		if(mysqli_num_rows($cekdata)>0){ 	
		echo "<script language='javascript'>
			alert('No AWB sudah tersedia, gagal menambahkan data !');
			window.location='../tracking_input.php';
				</script>";	
		} else {	
			mysqli_query($conn,"insert into tracking (no_awb,service,date_of_shipment,origin,destination,shipper,consignee,time_track,position,status) values
			('$awb','$services','$dos','$origin','$destination','$shipper','$consignee','$time','$position','$status')");	
			echo "<script language='javascript'>
			alert('Data berhasil ditambahkan !');
			window.location='../tracking_input.php';
			</script>";
		}
	}

?>