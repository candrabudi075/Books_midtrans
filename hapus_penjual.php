<?php
include "koneksi.php";
$id = $_GET['id'];

$query = "SELECT * FROM peserta WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql); 

$query2 = "DELETE FROM peserta WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2); 

if($sql2){ 
	header("location: data_penjual.php"); 
}else{
	echo "Data gagal dihapus. <a href='data_penjual.php'>Kembali</a>";
}
?>

