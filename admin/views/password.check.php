<form action="" method="POST">
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <form class="mb-4" action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">

                            <h5 class="card-header">Cek Apakah Password Sesuai
                                <img src="assets/svg/logo.svg" alt="" class="w-px-15 h-auto rounded-circle">
                            </h5>
                            <div class="card-body">
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Masukan Password Tanpa Hash
                                    </label>
                                    <input type="text" class="form-control" id="defaultFormControlInput"
                                        placeholder="Masukan text" aria-describedby="defaultFormControlHelp"
                                        name="password" />
                                    <div id="defaultFormControlHelp" class="form-text">
                                        contoh : sandi
                                    </div><br>
                                    <div class="mb-3 row">
                                        <label for="html5-date-input" class="form-label">Masukan Password Hash</label>
                                        <div class="col-md-15">
                                            <input class="form-control" type="text" name="hash" />
                                            <div id="defaultFormControlHelp" class="form-text">
                                                contoh : $2y$10$Kz6owxxxxxxxxxxxxxxxxxxxxxx
                                            </div><br>
                                            <button class="btn btn-primary" name="test">Kirim</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <?php
            if (isset($_POST['test'])) {

                $check = $_POST['hash'];
                $password = $_POST['password'];
                if (password_verify($password, $check)) {
                    echo 'Password is valid!';
                } else {
                    echo 'Invalid password.';
                }
            }
            ?>