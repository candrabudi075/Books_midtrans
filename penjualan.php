<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAYMENT GATEWAY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h1>FORMULIR PEMBAYARAN Buku </h1>
                    <br>
                    <form action="proses_penjual.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">NAMA LENGKAP PESERTA</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" id="nama" name="email" placeholder="Email Anda" required="">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Peserta</label>
                            <textarea class="form-control required=" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="judul">Judul Buku</label>
                            <select class="form-control" id="isbn" name="isbn">
                            <?php
                                include('koneksi.php');
                                $data_buku = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($data_buku)) {
                            ?>   
                            <option value="<?= $buku['judul'] ?>"><?= $buku['judul'] ?></option>
                            <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Biaya</label>
                            <input type="number" class="form-control" id="biaya" name="biaya" placeholder="Biaya" required="">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="biaya">Judul Buku</label>
                            <select class="form-control" id="biaya" name="biaya">
                            <?php
                                include('koneksi.php');
                                $data_biaya = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($biaya = mysqli_fetch_array($data_biaya)) {
                            ?>   
                            <option value="<?= $biaya['judul'] ?>"><? echo $harga_pinjam ?></option>
                            <?php
                                }
                                ?>
                            </select>
                        </div> -->
                        <button type="submit" class="btn btn-primary">PAYMENT REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>