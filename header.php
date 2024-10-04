<?php
    session_start();
        if ($_SESSION['status_login']!=true) {
            header('location: login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-200 border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <span class="self-center text-4xl font-extrabold whitespace-nowrap dark:text-white">Kantor</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="logout.php" class="text-sm font-semibold text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
            </div>
        </div>
    </nav>
    <nav class="bg-gray-200 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="home.php" class="text-gray-900 font-semibold dark:text-white hover:underline" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="tampil_pegawai.php" class="text-gray-900 font-semibold dark:text-white hover:underline">Data Pegawai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
