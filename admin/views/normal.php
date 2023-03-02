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
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Transactions</span>
                        <h3 class="card-title mb-2">$14,857</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <!-- <a href="javascript:void(0);" class="flex-column text"> -->
                                <div class="flex-column">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/svg/sandi.svg" alt="Credit Card" class="rounded" />
                                </div><br>
                                <div class="d-flex justify-content-between w-100">
                                    <h6><?= $data['nik'] ?></h6>
                                    <small> <?= $data['tgl_pengaduan'] ?></small>
                                </div>
                                <p class="mb-1 text-primary">
                                    <?= $data['isi_laporan'] ?>
                                </p>
                                <small>Pengaduan Masuk Terakhir</small>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">