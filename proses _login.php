<?php
    include "koneksi.php";
    $user = $_POST['user'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "SELECT * FROM login WHERE use");
?>