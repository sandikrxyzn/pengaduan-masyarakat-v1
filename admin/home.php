<?php
/*

Kode ini adalah skrip PHP yang memeriksa apakah sesi telah dimulai dan apakah pengguna memiliki 'level' yang disetel ke 'petugas'. Jika ya, mereka dialihkan ke petugas halaman. Ini kemudian membutuhkan berbagai file seperti koneksi database, header, menu, dan table.penguntung.php. Itu kemudian mengatur pernyataan switch berdasarkan parameter 'us' di URL dan memanggil berbagai fungsi berdasarkan parameter itu. Fungsi termasuk normal(), tanggapan(), kartu(), tableSocietyAccounts(), TableAccountsperson(), laporan(), passwordCheck(), verifikasi(). Akhirnya, perlu footer. php di akhir skrip.

*/

/*

Kode ini akan mengoptimalkan sesi saat ini untuk performa yang lebih baik,
 dengan menyetel hanya cookie yang akan digunakan 
 untuk sesi dan kemudian membuat ulang id sesi.

*/
session_start();
ob_start();

session_regenerate_id(true);

 // Start a session

if (!isset($_SESSION['level'])) {
    header("location: /sandi/admin/login");
}

if ($_SESSION['level'] === 'petugas') {
    header('location: /sandi/petugas');
    exit;
}

require '../core/db.php';
require 'templates/header.php';
require 'templates/menu.php';
require 'views/table.pengaduan.php';


// parameter
/* // ? Kode ini memeriksa nilai kunci 'us' di array $_GET. Jika diset, ia memberikan nilainya ke variabel $op. Jika tidak, itu memberikan string kosong ke $op. Kemudian menggunakan pernyataan switch untuk menjalankan fungsi yang berbeda tergantung pada nilai $op. Jika $op adalah string kosong, normal() akan dieksekusi. Jika $op sama dengan 'login', login() akan dieksekusi. Jika $op sama dengan 'logout', logout() akan dieksekusi. Jika tidak, notfound() akan dieksekusi.
*/
$op = isset($_GET['us']) ? $_GET['us'] : '';

switch ($op) {
    case '':
        normal();
        break;

    case 'tanggapan':
        tanggapan();
        break;

    case 'card':
        card();
        break;
        
    case 'tableUser':
        tableAkunMasyarakat();
        break;

    case 'tablePetugas':
        TableAkunpetugas();
        break;

    case 'pengaduan':
        tablePengaduan();
        break;

    case 'laporan':
        laporan();
        break;
    
    case 'password-check':
        passwordCheck();
        break;

    case 'verifikasi':
        verifikasi();
        break;

    default:
        normal();
        break;
}

// halaman default
function normal()
{
    global $conn;
    // global $listUser, $listPengaduan, $conn;
    // $data = count($listUser);
    // $pengaduan = count($listPengaduan);
    $masyarakat = mysqli_query($conn,"SELECT * FROM pengaduan ORDER BY id_pengaduan DESC LIMIT 1");
    $data = mysqli_fetch_assoc($masyarakat);
    require 'views/normal.php';
    // print_r($_SESSION);//
}


/* ? Semua Fungsi ini digunakan untuk meminta file yang berisi kode yang akan digunakan untuk menampilkan respon kepada admin. 
*/
// Tanggapan

function tanggapan()
{
    require 'views/tanggapan.php';
}



// akun masyarakat
function tableAkunMasyarakat()
{
    global $conn;
    $masyarakat = query("SELECT * FROM masyarakat");
    require 'views/table.masyarakat.php';
}

// Data Laporan Masuk
function laporan()
{
    global $conn;
    $laporan = mysqli_query($conn, "SELECT * FROM pengaduan");
    require 'views/laporan.php';
}


// Table AKun Petugas
function TableAkunpetugas()
{
    global $conn;
    $Petugas = query("SELECT * FROM petugas");
    require 'views/table.akun.petugas.php';
}


// tools password check
function passwordCheck(){
    require 'views/password.check.php';
}


function card(){
    require 'views/laporan.card.php';

}


// verifikasi pengaduan
function verifikasi(){
    require 'views/verifikasi.php';
}


require 'templates/footer.php';
