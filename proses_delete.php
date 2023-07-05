<?php
     include("koneksi.php");
     $id_penerbit = $_GET['id_penerbit'];
 
     mysqli_query($koneksi, "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'");
 
     header("Location:index.php");
?>