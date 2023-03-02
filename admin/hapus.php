<?php

$koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

require '../core/db.php';

$id = $_GET['id'];
// agar tidak bisa di iject
$id = mysqli_real_escape_string($koneksi, $id);

if (hapusPengaduan($id) > 0 ){
    echo "<script>alert('berhasil di hapus');
    document.location.href = '/sandi/admin/?us=pengaduan';
    </script>";
} else {
    // echo "<script>alert('gagal di hapus')</script>";
    echo mysqli_error($koneksi);
}
