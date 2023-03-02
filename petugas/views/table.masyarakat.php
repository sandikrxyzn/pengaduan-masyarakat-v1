<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Daftar Akun Masyarakat</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        List of Accounts
                    </caption>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($masyarakat as $row) : ?>

                            <tr>
                                <td></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?= $row['nama']; ?></strong></td>
                                <td><?= $row['username']; ?></td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="../assets/img/avatars/sandi.svg" alt="Avatar" class="rounded-circle" />
                                        </li>

                                    </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="hapus.php?nik=<?= $row['nik']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>