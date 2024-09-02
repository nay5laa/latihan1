<?php

    if ($_POST) {
        $nama_jabatan = $_POST['nama_jabatan'];
        $gaji_pokok = $_POST['gaji_pokok'];
        $tunjangan = $_POST['tunjangan'];

        if (empty ($nama_jabatan)) {
            echo "<script>alert('Nama Jabatan tidak boleh kosong.');location.href='tambah_jabatan.php';</script>";
        }

        else if (empty ($gaji_pokok)) {
            echo "<script>alert('Gaji Pokok tidak boleh kosong.');location.href='tambah_jabatan.php';</script>";
        }

        else if (empty ($tunjangan)) {
            echo "<script>alert('Tunjangan tidak boleh kosong.');location.href='tambah_jabatan.php';</script>";
        }

        else {
            include "connection.php";
            $insert = mysqli_query($conn, "insert into jabatan (nama_jabatan, gaji_pokok, tunjangan) value ('".$nama_jabatan."', '".$gaji_pokok."', '".$tunjangan."')");

            if ($insert) {
                echo "<script>alert('Sukses menambahkan Jabatan');location.href='tambah_jabatan.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan Jabatan');location.href='tambah_jabatan.php';</script>";
            }
        }
    }

?>