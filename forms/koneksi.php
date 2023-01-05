<?php 
$koneksi = mysqli_connect("localhost","root","","myblock");

if (mysqli_connect_errno()) {
	echo "<div class='alert alert-danger' role='alert'> Koneksi kedatabase Gagal</div>";
}
 ?>