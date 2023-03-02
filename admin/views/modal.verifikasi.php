<div class="modal fade" id="verifikasi<?= $row['id_pengaduan'] ?>" tabindex="-1" aria-hidden="true">
    <!-- Modal Verifikasi -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Verifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Account -->
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                            <form action="" method="post">
                            
                            <input type="text" value="<?= $row['id_pengaduan'] ?>" name="ok" hidden>
                            <!-- selesai -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="selesai" id="defaultCheck2"
                                    name="status[]"/>
                                <label class="form-check-label" for="defaultCheck2">
                                    Selesai </label>
                            </div>
                            <!-- /Selesai -->
                            
                            <!-- Proses -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="proses" id="defaultCheck3"
                                    name="status[]" />
                                <label class="form-check-label" for="defaultCheck3">
                                    Proses</label>
                            </div>
                            <!-- /proses -->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" name="verifikasi">Save changes</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>