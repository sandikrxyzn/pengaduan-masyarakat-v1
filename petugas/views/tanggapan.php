<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
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
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Masukan NIK" aria-describedby="defaultFormControlHelp" name="nik" />
                                <div id="defaultFormControlHelp" class="form-text" name="nik">
                                    Masukan NIK Anda
                                </div><br>
                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="form-label">Tanggal</label>
                                    <div class="col-md-15">
                                        <input class="form-control" type="date" value="2023-16-18" id="html5-date-input" name="tgl_pengaduan" />
                                        <div id="defaultFormControlHelp" class="form-text">
                                            Masukan Tanggal Pengaduan
                                        </div>
                                    </div>

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