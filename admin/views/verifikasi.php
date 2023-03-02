<?php

global $conn;
$pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan");

?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php

        if (isset($_POST['verifikasi'])) {
            if (verifikasiLaporan($_POST) > 0) {
                echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Berhasil Verfikasi..
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>
        <script>
        setInterval( () => {
            window.location.href = '?us=verifikasi';
        }, 2000);
        </script>";
            }
        }
        ?>
        <h4 class="fw-bold py-3 mb-4">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Verfikasi</li>
            </ol>
        </h4>
        <div class="card">
            <h5 class="card-header">Daftar Pengaduan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        List of Accounts
                    </caption>
                    <thead>
                        <tr>
                            <th>Nik</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Bukti</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengaduan as $row) : ?>

                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?= $row['nik']; ?></td>
                                <td><?= $row['tgl_pengaduan']; ?></td>
                                <td class="me-3">
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" data-bs-toggle="modal" data-bs-target="#foto<?= $row['id_pengaduan'] ?>" title="gambar">
                                            <img src="../uploads/images/<?= $row['foto'] ?>" alt="Avatar" class="rounded-circle" /> <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#foto<?= $row['id_pengaduan'] ?>">
                                                Lihat Foto
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                                <td></td>
                                <td><span class="badge bg-label-primary me-1"><?= $row['status']; ?></span></td>
                                <!-- <td><a href="?us=laporan">Isi Laporan</a></td> -->
                                <td>
                                    <!-- <a href="views/proses.php?id=">Verifikasi</a> -->
                                    <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#verifikasi<?= $row['id_pengaduan'] ?>">
                                        Verifikasi
                                    </button>
                                    <!-- Modal Verifikasi -->
                                    <?php require 'modal.verifikasi.php'; ?>
                                    <!-- Akhir Modal -->
                                </td>
                                <div class="modal" id="foto<?= $row['id_pengaduan'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Laporan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="row mb-5">
                                                <!-- <div class="card h-100"> -->
                                                <img class="card-img-top" src="../uploads/images/<?= $row['foto'] ?>" alt="Card image cap" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td>
                                    <!-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>-->
                                    <a class="text-primary" href="hapus.php?id=<?= $row['id_pengaduan']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>