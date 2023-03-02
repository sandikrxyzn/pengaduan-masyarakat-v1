<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: /sandi/login");
}

require 'core/db.php';

$tittle = 'Pengaduan🚀';

require 'templates/header.php';
?>
<nav class="layout-navbar container-xxl navbar navbar-expand-xl  align-items-center bg-navbar-theme" id="layout-navbar">

    <div class="container-fluid">
        <a class="navbar-brand" href="/sandi">Home </a>
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <div class="widget">
                </a>
            </div>
            <!-- User -->
            <?php require 'profile.nav.php' ?>
            <!--/ User -->
        </ul>
    </div>
</nav>
<?php require 'profile.php'; ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
       <?php
       if (isset($_POST['submit'])) {
           $date = date('Y-m-d');
           $nik = $_POST['nik'];
           $lapor = $_POST['lapor'];
           $status = $_POST['status'] = "0";
       
           $gambar = upload();
       
           if (!$gambar) { return false; }
       
           // insert data
           $query = "INSERT INTO pengaduan 
           VALUES
           ('','$date','$nik', '$lapor','$gambar','$status')";
       
           if (mysqli_query($conn, $query)) {
               echo "<div class='alert alert-primary alert-dismissible' role='alert'>
               Laporan Berhasil Dikirim..
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>
                           
           <script>
               setTimeout(function () {
                   window.location.href = '/sandi/pengaduan';              
               }, 3000); 
           </script>";
           } else {
               echo "<div class='alert alert-danger alert-dismissible' role='alert'>
               Laporan Gagal Dikirim..
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>";
           }
       }
       ?>
       
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home /</span> Pengaduan
        </h4>
        <form class="mb-4" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">

                        <h5 class="card-header">Selamat Datang
                            <img src="assets/svg/logo.svg" alt="" class="w-px-15 h-auto rounded-circle">
                        </h5>
                        <div class="card-body">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Nik
                                </label>

                                <input minlength="16" type="text" class="form-control" id="defaultFormControlInput" placeholder="Masukan NIK" aria-describedby="defaultFormControlHelp" name="nik" />

                                <div id="defaultFormControlHelp" class="form-text" name="nik">
                                    Masukan NIK Anda
                                </div><br>
                                <div class="mb-3 row">
                                    <!-- <label for="html5-date-input" class="form-label">Tanggal</label> -->

                                    <!-- Tempat Upload Files / gambar -->
                                    <div class=" mb-3">
                                        <div class="col-md-15"><br>
                                            <label for="formFile" class="form-label">Masukan Foto Anda</label>
                                            <input class="form-control" type="file" id="formFile" name="foto" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Masukan Pengaduan Anda</h5>
                        <div class="card-body">
                            <textarea class="form-control" aria-label="With textarea" name="lapor"></textarea><br>
                            <button class="btn btn-primary" name="submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- / Content -->
    </div>
</div>
</div>
</div>
</div>

<!-- Footer -->
<?php

require 'templates/footer.php';
