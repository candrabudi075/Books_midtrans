<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Tambah Buku</title>
</head>

<body>
    <form id="form-buku" action="prosestambah_buku.php" method="post">
        <table class="table table-striped">
            <tr>
                <td>ISBN</td>
                <td>
                    <input type="text" id="input-isbn" name="isbn">
                    <p id="text-error-isbn"></p>
                </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>
                    <input type="text" id="input-judul" name="judul">
                    <p id="text-error-judul"></p>
                </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="date" id="input-tahun" name="tahun">
                    <p id="text-error-tahun"></p>

                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" id="input-harga_pinjam" name="harga_pinjam">
                    <p id="text-error-harga_pinjam"></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button id="my-button" type="button" class="btn btn-primary">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>

<script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#input-judul').val().length == 0 || $('#input-tahun').val().length == 0 || $('#input-harga_pinjam').val().length == 0) {
            $('#input-judul, #input-tahun , #input-harga_pinjam').css({
                "backgroundColor": "#ff00002b"
            });
            $('#text-error-judul, #text-error-tahun, #text-error-harga_pinjam').text('Silahkan isi terlebih dahulu');
        } else {
            $('#form-buku').submit();
        }
    });
</script>