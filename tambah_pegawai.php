<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        NIK :
        <input type="text" name="nik_pegawai" value="" class="form-control">
        <br>

        Nama Pegawai : 
        <input type="text" name="nama_pegawai" value="" class="form-control">
        <br>

        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <br>

        Gender :
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>

        No Telepon :
        <input type="text" name="no_telp" value="" class="form-control">
        <br>
        
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php
                include "connection.php";
                $qry_jabatan = mysqli_query($conn, "select * from jabatan");
                while ($data_jabatan = mysqli_fetch_array ($qry_jabatan)) {
                    echo '<option value = "'.$data_jabatan['id_jabatan'].'"> '.$data_jabatan['nama_jabatan'].'</option>';
                }
            ?>
        </select>
        <br>
        
        Username : 
        <input type="text" name="username" value="" class="form-control">
        <br>

        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <br>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>