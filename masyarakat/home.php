<?php

// ? start the session
session_start();

// ? gunakan array untuk menyimpan informasi sesi
$session_storage = array();

// ! periksa apakah pengguna sudah masuk
if(!isset($_SESSION['username'])) {
    // ! redirect ke halaman login jika pengguna tidak login
    header("Location:  /sandi/login");
}	

// ? simpan data sesi dalam larik $session_storage
$session_storage['username'] = $_SESSION['username'];

// ! tulis semua data sesi ke file
// ? mengurangi beban server xixi
file_put_contents('session.data', serialize($session_storage));


require 'core/db.php';

$tittle = "Landing Page🚀";

require 'templates/header.php';

?>


<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl  align-items-center bg-navbar-theme" id="layout-navbar">

    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Home </a>
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <div class="widget"><i class="bx bx-moon"></i>
                </a>
            </div>

            <!-- User -->
            <?php require 'pengaduan/profile.nav.php' ?>
            <!-- /user -->
            
        </ul>
    </div>
</nav>

<?php require 'pengaduan/profile.php'; ?>

<!--/ User -->
</ul>
</div>
</nav>
<!-- Content -->
<div class="layout-wrapper layout-content-navbar">
    <div class="content-wrapper">
        <div class="">
            <section class="bg-white dark:bg-gray-900">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="mr-auto  lg:col-span-7">

                        <h1 color="black" class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">

                            Hey, I'm Sandi from planet Earth🌍.</h1>

                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            The world is a <span class="badge bg-label-warning">“dangerous place”</span>
                            ,Elliot,not because they are the ones who commit crimes, but because they just watch and
                            do nothing.
                        </p>
                        <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                            <a href="pengaduan" class="btn btn-primary" id="pengaduan">
                                Pengaduan
                            </a>
                            <div class="app-brand justify-content-center">
                                <span>
                                    <div id="svg"></div>
                                </span>

                                <h5 class="mb-1" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-code-alt bx-xs' ></i> <span>leave me, i'm at bad treating people</span>">
                                    sandimlnfzn_</h5>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <!-- <img src="assets/img/illustrations/sandii.png" alt="hero image"> -->
                        <!-- Bootstrap carousel -->


                        <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/img/illustrations/sandii.png" alt="First slide" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- <h3>First slide</h3>
                                <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p> -->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/illustrations/Saly-41.png" alt="Second slide" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- <h3>Second slide</h3>
                                <p>In numquam omittam sea.</p> -->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/illustrations/Saly-43.png" alt="Third slide" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- <h3>Third slide</h3>
                                <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p> -->
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>



<!-- Start block -->



<?php

require 'templates/footer.php';
