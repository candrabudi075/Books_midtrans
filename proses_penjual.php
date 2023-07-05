<?php
// Load file koneksi.php
include "koneksi.php";
// 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$biaya = $_POST['biaya'];;
$order_id= rand();
$transaction_status= 1;
$transaction_id="";
$isbn=$_POST['isbn'];
// menginput data ke database
mysqli_query($koneksi,"insert into peserta  values('','$nama','$alamat','$biaya','$order_id','$transaction_status','$transaction_id','$email','$isbn')");
 
// mengalihkan halaman kembali ke index.php
header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>


