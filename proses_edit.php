<?php

    include("koneksi.php");
    $id_penerbit = $_GET['id_penerbit'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $result = mysqli_query($koneksi, "UPDATE penerbit SET id_penerbit = '$id_penerbit', 
    nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', 
    alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");

    header("Location:index.php");
?>