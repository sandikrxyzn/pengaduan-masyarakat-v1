<?php

function tablePengaduan()
{
    global $conn;
    $pengaduan = mysqli_query($conn,"SELECT * FROM pengaduan");
?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Daftar Pengaduan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        List of Accounts
                    </caption>
                    <thead>
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Nik</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Isi Laporan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengaduan as $row) : ?>

                        <tr>
                            <!-- <td></td>s -->
                            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?= $row['nik']; ?></td>
                            <td><?= $row['tgl_pengaduan']; ?></td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="gambar">
                                        <!-- <img src="assets/img/avatars/sandi.svg" alt="Avatar" class="rounded-circle" /> -->
                                        <img src="../uploads/images/<?= $row['foto'] ?>" alt="Avatar"
                                            class="rounded-circle" />
                                    </li>

                                </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1"><?= $row['status']; ?></span></td>
                            <!-- <td><a href="?us=laporan">Isi Laporan</a></td> -->
                            <td>
                                <button type="button" class="btn text-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalScrollable<?= $row['id_pengaduan'] ?>">
                                    laporan
                                </button>
                            </td>
                            <div class="modal" id="modalScrollable<?= $row['id_pengaduan'] ?>" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Laporan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="detail_data">
                                            <p style="white-space: pre-line;"><?= $row['isi_laporan'] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <!-- <button type="button" class="btn btn-primary">Selesai</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <td>
                                <!-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>-->
                                <a class="text-primary" href="hapus.php?id=<?= $row['id_pengaduan']; ?>"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                            </td>
                            <td>
                            <a class="text-primary" href=""><i
                                        class="bx bx-mail-send me-1"></i> Tanggapi</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                
                &nbsp&nbsp&nbsp&nbsp <button class="btn btn-primary">Verifikasi</button><br><br>
            </div>
        </div>
    </div>
</div>
</div>

<?php
}