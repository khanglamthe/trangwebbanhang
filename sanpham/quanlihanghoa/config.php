<?php
	$servername = "localhost";
		$database = "quanlybanhang";
		$username = "root";
		$password = "";
// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
		if (!$conn) {
			exit('Kết nối không thành công!');
}
?>