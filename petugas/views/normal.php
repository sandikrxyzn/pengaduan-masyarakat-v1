<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-16 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang <?= ucwords($_SESSION['username']) ?>! 🚀</h5>
                                <p class="mb-4">
                                    Anda masuk sebagai<span class="fw-bold"> ADMIN</span> Dengan Kekuatan <span class="fw-bold"> OPEN POWER</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/Saly-43.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-black"> Total User & Pengaduan</h3>
            <div class="col-lg-2 mb-4 order-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Masyarakat!</h5>
                        <p class="mb-4 text-center">
                        <h3 class="text-center"><?= $data ?></h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4 order-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pengaduan!</h5>
                        <p class="mb-4 text-center">
                        <h3 class="text-center"><?= $pengaduan ?></h3>
                        </p>
                    </div>
                </div>
            </div>