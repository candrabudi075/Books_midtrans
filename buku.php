<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <?php
    include "koneksi.php"; //memanggil file connection php
    $query = mysqli_query($koneksi, "SELECT isbn, judul, tahun, harga_pinjam FROM buku");
    ?>
    <div class="container card mt-5">
        <div class="card-body ">
            <!-- <a href="#" Class="btn btn-primary mt-3 mb-3">Tambah Data</a> -->
            <table class="table" id="example">
                <thead>
                    <tr class="text-center">
                        <th>id</th>
                        <th>isbn</th>
                        <th>judul</th>
                        <th>tahun</th>
                        <th>harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (mysqli_num_rows($query) > 0) { //untuk mengetahui berapa jumlah baris di dalam tabel 
                    ?>
                        <?php
                        $no = 1;
                        while ($value = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $value["isbn"]; ?></td>
                                <td><?php echo $value["judul"]; ?></td>
                                <td><?php echo $value["tahun"]; ?></td>
                                <td>RP.<?php echo $value["harga_pinjam"]; ?></td>
                                <td>
                                    <!-- <a class="btn btn-warning" href='edit.php?id_penerbit=<?php echo $value["id_penerbit"] ?>'>Edit</a> -->
                                    <a class="btn btn-danger" href='dalete_buku.php?isbn=<?php echo $value["isbn"] ?>'>Delete</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        } ?>
                    <?php } ?>
                </tbody>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="penjualan.php">BELI BUKU</a>
                        <a class="btn btn-primary" href="tambah_buku.php">Tambah Buku</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="home.php">Kembali</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>