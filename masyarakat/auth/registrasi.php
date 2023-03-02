<?php require 'core/db.php';

$tittle = "Registrasi🚀";

require 'templates/header.php';

?>
<!-- Content -->
<div class="container-xxl ">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo Gitlab Cuyy-->
                    <div class="app-brand justify-content-center">
                        <span>
                            <svg width="50" height="50" viewBox="0 0 380 390" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e24329;
                                        }

                                        .cls-2 {
                                            fill: #fc6d26;
                                        }

                                        .cls-3 {
                                            fill: #fca326;
                                        }
                                    </style>
                                </defs>
                                <g id="LOGO">
                                    <path class="cls-1" id="path-1" d="M282.83,170.73l-.27-.69-26.14-68.22a6.81,6.81,0,0,0-2.69-3.24,7,7,0,0,0-8,.43,7,7,0,0,0-2.32,3.52l-17.65,54H154.29l-17.65-54A6.86,6.86,0,0,0,134.32,99a7,7,0,0,0-8-.43,6.87,6.87,0,0,0-2.69,3.24L97.44,170l-.26.69a48.54,48.54,0,0,0,16.1,56.1l.09.07.24.17,39.82,29.82,19.7,14.91,12,9.06a8.07,8.07,0,0,0,9.76,0l12-9.06,19.7-14.91,40.06-30,.1-.08A48.56,48.56,0,0,0,282.83,170.73Z" />
                                    <path class="cls-2" id="path-3" d="M282.83,170.73l-.27-.69a88.3,88.3,0,0,0-35.15,15.8L190,229.25c19.55,14.79,36.57,27.64,36.57,27.64l40.06-30,.1-.08A48.56,48.56,0,0,0,282.83,170.73Z" />
                                    <path class="cls-3" id="path-4" d="M153.43,256.89l19.7,14.91,12,9.06a8.07,8.07,0,0,0,9.76,0l12-9.06,19.7-14.91S209.55,244,190,229.25C170.45,244,153.43,256.89,153.43,256.89Z" />
                                    <path class="cls-2" id="path-5" d="M132.58,185.84A88.19,88.19,0,0,0,97.44,170l-.26.69a48.54,48.54,0,0,0,16.1,56.1l.09.07.24.17,39.82,29.82s17-12.85,36.57-27.64Z" />
                                </g>
                            </svg>
                        </span>
                        <h5 class="mb-1">PENGADUAN</h5>
                    </div>

                    <?php if (isset($_POST['registrasi'])) {

                        if (registrasi($_POST) > 0) {

                            // jika data berhasil di tambah
                            echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
                                    Berhasil, redirect..
                                <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
                                </div>

                                <script>
                                setInterval( () => {
                                    window.location.href = 'login';
                                }, 3000);
                                </script>";
                        } else {
                            echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
                                            Gagal Masukan Data Dengan Benar!!
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
                                            </div>";
                        }
                    }
                    ?>
                    <!-- /Logo -->

                    <!-- judul -->
                    <h5 class="mb-2 text-center">Pendaftaran Akun🚀</h5>
                    <!-- /judul -->

                    <!-- form membuat akun -->
                    <form id="formAuthentication" class="mb-4" action="" method="POST">

                        <!-- form nik -->
                        <div class="mb-3">
                            <label for="nik" class="form-label">
                                Masukan Nik
                            </label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" autofocus />
                        </div>
                        <!-- /nik -->

                        <!-- form nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">
                                Masukan Nama
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" autofocus />
                        </div>
                        <!-- /nama -->

                        <!-- form username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                Masukan Username
                            </label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" autofocus />
                        </div>
                        <!-- /username -->

                        <!-- form telepon -->
                        <div class="mb-3">
                            <label for="telp" class="form-label">
                                No.Telepon
                            </label>
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="08xxxxxxx" autofocus />
                        </div>
                        <!-- /telepon -->

                        <!-- form passwords -->
                        <div class="mb-3 form-password-toggle">
                            <label for="telp" class="form-label">Password</label>

                            <div class="input-group input-group-merge">

                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label for="telp" class="form-label">konfirmasi Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password_1" placeholder="konfirmasi Password" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <!-- /password -->
                        <div class="mb-3">
                        </div>

                        <!-- Button Kirim -->
                        <div>
                            <button type="submit" class="btn btn-danger d-grid w-100 load" name="registrasi">
                                kirim
                            </button>

                        </div><br>
                        <!-- /button -->
                    </form>
                    <p class="text-center">
                        <span>Memiliki Akun?</span>
                        <a href="login">
                            <span class="text-danger">Login</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<?php require 'views/footer.php'; ?>

