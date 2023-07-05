<?php
    $isbn =$_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $harga_pinjam = $_POST['harga_pinjam'];

    include("koneksi.php");
    mysqli_query($koneksi, "INSERT INTO `buku` (`isbn`,`judul`,`tahun`, `harga_pinjam`) 
    VALUES ('$isbn','$judul','$tahun', '$harga_pinjam');");
    header("Location:buku.php");
?>