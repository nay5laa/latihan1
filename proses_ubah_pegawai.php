<?php

    if ($_POST) {
        $id_pegawai = $_POST['id_pegawai'];
        $nik = $_POST['nik'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $no_telp = $_POST['no_telp'];
        $id_jabatan = $_POST['id_jabatan'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty ($nik)) {
            echo "<script> alert ('NIK tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }

        else if (empty ($nama_pegawai)) {
            echo "<script> alert ('Nama Pegawai tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }

        else if (empty ($username)) {
            echo "<script> alert ('Username tidak boleh kosong.');location.href='tambah_pegawai.php';</script>";
        }

        else {
            include "connection.php";

            if (empty ($password)) {
                $update = mysqli_query ($conn, "update pegawai set nik='".$nik"', nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', gender='".$gender."', no_telp='".$no_telp."', id_jabatan='".$id_jabatan."', username='".$username."' where id_pegawai = '".$id_pegawai."'") die (mysqli_error($conn));

                    if ($update) {
                        echo "<script> alert ('Sukses update Pegawai.');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
                    }

                    else {
                        echo "<script> alert ('Gagal update Pegawai.');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
                    }
            }
            
            else {
                $update = mysqli_query($conn, "update pegawai set nik='".$nik"', nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', gender='".$gender."', no_telp='".$no_telp."', id_jabatan='".$id_jabatan."', username='".$username."', password='".md5($password)."' where id_pegawai = '".$id_pegawai."'") die (mysqli_error($conn));

                    if ($update) {
                        echo "<script>alert('Sukses update Pegawai.');location.href='tampil_pegawai.php';</script>";
                    }

                    else {
                        echo "<script>alert('Gagal update Pegawai.');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
                    }
            }
        }
    }

?>