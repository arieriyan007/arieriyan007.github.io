<?php 
include 'koneksi.php';


$nama = $_POST['nama'];
$telp = $_POST['telp'];
$sub = $_POST['subject'];
$pesan = $_POST['pesan'];

$kirim = mysqli_query($koneksi, "INSERT INTO kontak VALUES ('','$nama','$telp','$sub','$pesan','"date(format)"')");

if ($kirim) {
	header("location:../index.html?pesan=terkirim");
} else {
 	header("location:../index.html?pesan=gagalterkirim");
}
 ?>
