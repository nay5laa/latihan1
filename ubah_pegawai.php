<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php 
    include "connection.php";

    $qry_get_pegawai=mysqli_query($conn, "select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $dt_pegawai=mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_siswa.php" method="post">
        <input type="hidden" name="id_pegawai" value="<?=$dt_pegawai['id_pegawai']?>">
        
        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="<?=$dt_pegawai['nama_pegawai']?>" class="form-control">
        <br>

        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_pegawai['alamat']?></textarea>
        <br>

        Gender : 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if ($key_gender==$dt_pegawai['gender']) {
                    $selek="selected";
                }
                
                else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        <br>

        No Telepon :
        <input type="text" name="no_telp" value="<?=$dt_pegawai['no_telp']?>" class="form-control">

        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "connection.php";
            $qry_jabatan=mysqli_query($conn, "select * from jabatan");
            while ($dt_jabatan=mysqli_fetch_array($qry_jabatan)) {
                if ($dt_jabatan['id_jabatan']==$dt_pegawai['id_jabatan']) {
                    $selek="selected";
                }
                
                else {
                    $selek="";
                }
            echo '<option value="'.$dt_jabatan['id_jabatan'].'" '.$selek.'>'.$dt_jabatan['nama_jabatan'].'</option>';   
            }
            ?>
        </select>
        <br>

        Username : 
        <input type="text" name="username" value="<?=$dt_pegawai['email']?>" class="form-control">
        <br>

        Password : 
        <input type="password" name="password" value="" class="form-control">

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
