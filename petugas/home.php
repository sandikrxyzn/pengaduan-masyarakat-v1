<?php

session_start();

if (!isset($_SESSION['level'])) {
    header("Location: /sandi/admin/login");
}

// Fix Admin Lewat URL
if ($_SESSION['level'] == 'admin') {
    header('location: /sandi/admin');
    return false;
}
require '../core/db.php';
require 'templates/header.php'; //Header
require 'templates/menu.php'; //Menu


// parameter
$op = isset($_GET['us']) ? $_GET['us'] : '';

switch ($op) {
    case '':
        normal();
        break;

    case 'tanggapan':
        tanggapan();
        break;

    case 'pengaduan':
        laporan();
        break;

    default:
        normal();
        break;
}



// halaman default
function normal()
{
    global $listUser, $listPengaduan, $conn;
    $data = count($listUser);
    $pengaduan = count($listPengaduan);
    $masyarakat = query("SELECT * FROM masyarakat");
    require 'views/normal.php';
    print_r($_SESSION);
}


// Tanggapan
function tanggapan()
{
    require 'views/tanggapan.php';
}



// Data Laporan Masuk
function laporan()
{
    global $conn;
    $laporan = mysqli_query($conn, "SELECT * FROM pengaduan");
    require 'views/table.pengaduan.php';
}





// verifikasi pengaduan
function verifikasi()
{
    require 'views/verifikasi.php';
}


require 'templates/footer.php';
