<?php
	include 'koneksi.php';
	
	class form{}
	
	$merk_kendaraan = $_POST["merk_kendaraan"];
	$type_kendaraan = $_POST["type_kendaraan"];
	$deskripsi_kerusakan = $_POST["deskripsi_kerusakan"];
	
	if ((empty($merk_kendaraan))) { 
		$response = new form();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	} else if ((empty($type_kendaraan))) { 
		$response = new form();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	} else {

			
				$query = mysql_query("INSERT INTO form (merk_kendaraan, type_kendaraan,deskripsi_kerusakan) VALUES('".$merk_kendaraan."','".$type_kendaraan."','".$deskripsi_kerusakan."')");

				if ($query){
					$response = new form();
					$response->success = 1;
					$response->message = "Berhasil Mengirim.";
					die(json_encode($response));}
			
		}

	mysql_close();

?>	