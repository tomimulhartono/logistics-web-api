<?php
	include "koneksi.php";
	$id_pengiriman=$_POST["id_pengiriman"];
	$jenis_pengiriman=$_POST["jenis_pengiriman"];
	$nama_barang=$_POST["nama_barang"];
	$berat_barang=$_POST["berat_barang"];
	$jenis_barang=$_POST["jenis_barang"];
	$tujuan=$_POST["tujuan"];

	if(isset($_POST['submit'])){

	$cekdata = mysqli_query($conn,"SELECT * FROM pengiriman_barang where id_pengiriman = '$_POST[id_pengiriman]'");
		if(mysqli_num_rows($cekdata)>0){ 	
		echo "<script language='javascript'>
			alert('ID Pengiriman sudah tersedia, gagal menambahkan data !');
			window.location='../pengiriman_input.php';
				</script>";	
		} else {	
			mysqli_query($conn,"insert into pengiriman_barang (id_pengiriman,jenis_pengiriman,nama_barang,berat_barang,jenis_barang,tujuan) values
			('$id_pengiriman','$jenis_pengiriman','$nama_barang','$berat_barang','$jenis_barang','$tujuan')");	
			echo "<script language='javascript'>
			alert('Data berhasil ditambahkan !');
			window.location='../pengiriman_input.php';
			</script>";
		}
	}

?>