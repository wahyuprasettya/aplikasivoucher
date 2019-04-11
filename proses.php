<?php

session_start();
if (isset($_POST['proses'])) {
	
	$kode = $_POST['kode'];
	$jumlbyar = $_POST['jumlbyar'];
	$kv= "dibayarinwahyu";
	$hasil="";




if ($kode== "") {
		echo "Total bayar = "; echo $jumlbyar;
		$_SESSION['tanpadis'] = $jumlbyar; 
		header("location: hasiltanpadiskon.php");
}else if ($kv != $kode) {

	 header("location:form-basic.php?kodevoucher=salah");
}elseif ($jumlbyar <= 500) {
	 header("location:form-basic.php?harga=salah");
}else {
	$hasil= $jumlbyar - 500;
	$_SESSION['jumlahbyr'] = $hasil; 
	header("location: hasildiskon.php");
}

}

