<?php

if (isset($_POST['ubah_profile'])) {
  if (ubahProfile($_POST) > 0) {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Berhasil Update Profile..
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>
        <script>
         setInterval( () => {
            window.location.href = '/sandi';
          }, 2000);
          </script>";
  } else {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Gagal Update Profile..
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>";
  }
}

?>


  <form action="" method="post">
    <div class="modal fade" id="modalCenter<?php $data['username']; ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="modalCenterTitle">Profile Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="assets/svg/sandi.svg" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                  <i class="bx bx-reset d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Username</label>
                <input type="text" id="nameWithTitle" class="form-control" value="<?= $data['username'] ?>" disabled/>
              </div>
              <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Nama Lengkap</label>
                <input type="text" id="nameWithTitle" class="form-control" value="<?= $data['nama'] ?>" name="nama" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Telepon</label>
                <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Telepon" value="<?= $data['telp'] ?>" name="telp" />
              </div>
            </div>
            <div class="col mb-0">
              <label for="dobWithTitle" class="form-label">Status</label>
              <input type="text" id="dobWithTitle" class="form-control" placeholder="Active" disabled />
            </div>
            <div class="row g-2">
              <div class="col mb-0">
                <input type="text" id="nik" class="form-control" value="<?= $data['nik'] ?>" name="nik" hidden />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary" name="ubah_profile">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </form>