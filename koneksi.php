<?php 
		$host 	= "localhost";
		$user 	= "root";
		$pass 	= "";
		$db 	= "pc_stkipmuh";

		$koneksi = mysqli_connect($host, $user, $pass, $db);

		if(!$koneksi) {
			die("Koneksi gagal : ".mysql_connect_error());
		}

	// $host 	= "localhost";
	// $user 	= "stkipmu1_admin";
	// $pass 	= "ghmm6-yMUiOL";
	// $db 	= "stkipmu1_stkipmuhlmj";

	// $koneksi = mysqli_connect($host, $user, $pass, $db);

	// if(!$koneksi) {
	// 	die("Koneksi gagal : ".mysql_connect_error());
	// }
?>