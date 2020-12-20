<?php
	include "koneksi.php";
	$id_jadwal=$_POST["id_jadwal"];
	$id_pengiriman=$_POST["id_pengiriman"];
	$tanggal=$_POST["tanggal"];
	$nama_pengirim=$_POST["nama_pengirim"];
	$alamat=$_POST["alamat"];
	$nama_penerima=$_POST["nama_penerima"];

	if(isset($_POST['submit'])){

	$cekdata = mysqli_query($conn,"SELECT * FROM jadwal_pengiriman where id_jadwal = '$_POST[id_jadwal]' AND id_pengiriman = '$_POST[id_pengiriman]'");
		if(mysqli_num_rows($cekdata)>0){ 	
		echo "<script language='javascript'>
			alert('ID Jadwal sudah tersedia, gagal menambahkan data !');
			window.location='../jadwal_input.php';
				</script>";	
		} else {	
			$result= mysqli_query($conn,"insert into jadwal_pengiriman (id_jadwal,id_pengiriman,tanggal,nama_pengirim,alamat,nama_penerima) values
			('$id_jadwal','$id_pengiriman','$tanggal','$nama_pengirim','$alamat','$nama_penerima')");	
			
			if($result) {
				echo "<script language='javascript'>
				alert('Data berhasil ditambahkan !');
				window.location='../jadwal_input.php';
				</script>";
			}else {
				echo "<script language='javascript'>
				alert('ID Pengiriman belum tersedia');
				window.location='../jadwal_input.php';
				</script>";
			}
			
		}
	}

?>