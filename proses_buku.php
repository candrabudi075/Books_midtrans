<?php
    
     $judul = $_POST['judul'];
     $tahun = $_POST['tahun'];
     $harga_pinjam = $_POST['harga_pinjam'];
     
     include("koneksi.php");
     mysqli_query($koneksi, "INSERT INTO 
     `buku` (`judul`, `tahun`, `harga_pinjam`) 
     VALUES ('$judul' , '$tahun' ,'$harga_pinjam');");
    header("Location:buku.php");
?>