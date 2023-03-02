<?php require 'core/db.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-../assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Registrasi🚀</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/svg/favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body>
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

                        <?php if (isset($_POST['registrasi_admin'])) {

                            if (registrasiAdmin($_POST) > 0) {

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
                            }
                        }
                        ?>
                        <!-- /Logo -->

                        <!-- judul -->
                        <h5 class="mb-2 text-center">Pendaftaran Akun Admin🚀</h5>
                        <!-- /judul -->

                        <!-- form membuat akun -->
                        <form id="formAuthentication" class="mb-4" action="" method="POST">


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
                                <button type="submit" class="btn btn-danger d-grid w-100 load" name="registrasi_admin">
                                    kirim
                                </button>

                            </div><br>
                            <!-- /button -->
                            <p class="text-center">
                                <span>Memiliki Akun?</span>
                                <a href="login">
                                    <span class="text-danger">Login</span>
                                </a>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- javascript -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        $(function() {

            var kirim = document.querySelector('.load');

            kirim.addEventListener("click", function() {
                // animasi
                kirim.innerHTML = "<center><div class='loader'></div></center>";


                var loaded = setInterval(() => {
                    // menambah terus menghapus
                    kirim.innerHTML = kirim.innerHTML + ""
                }, 1000);

                setTimeout(
                    function() {
                        // mengahapus animasi ..
                        clearInterval(loaded)
                        kirim.classList.remove('loader');
                        kirim.innerHTML = "Berhasil";
                    }, 3000);
            }, false);

        });
    </script>
</body>

</html>