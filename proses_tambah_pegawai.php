<?php

    if($_POST) {
        $nik = $_POST['nik'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $no_telp = $_POST['no_telp'];
        $id_jabatan = $_POST['id_jabatan'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty ($nik)) {
            echo "<script>alert('NIK tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }
        
        else if (empty ($nama_pegawai)) {
            echo "<script>alert('Nama Pegawai tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }

        else if (empty ($username)) {
            echo "<script>alert('Username tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }

        else if (empty ($password)) {
            echo "<script>alert('Password tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }
 
        else {
            include "connection.php";
            $insert = mysqli_query($conn, "insert into pegawai (nik, nama_pegawai, alamat, gender, no_telp, id_jabatan, username, password) value ('".$nik."', '".$nama_pegawai."', '".$alamat."', '".$gender."', '".$no_telp."',,'".$id_jabatan."', '".$username."', '".md5($password)."')") or die (mysqli_error($conn));

                if ($insert) {
                    echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
                }

                else {
                    echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
                }
        }
    }
?>