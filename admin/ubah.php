<?php


$koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


if(isset($_POST['update'])){
    $data = $_POST['selesai'];
    $simpan = mysqli_query($koneksi, "UPDATE pengaduan
    SET status = '$data' WHERE id_pengaduan = '$_POST[id_pengaduan]'");
}