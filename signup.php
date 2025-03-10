<div class="container d-flex align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h1 class="h3">Daftar</h1>
                        <p class="text-muted">Silakan isi form di bawah ini untuk mendaftar.</p>
                    </div>
                    <?php if ($_POST) include 'aksi.php'; ?>
                    <form method="post">
                        <div class="form-group mb-3" hidden>
                            <label for="inputKode">Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="inputKode" name="kode" value="<?= set_value('kode_user', kode_oto('kode_user', 'tb_admin', 'U', 3)) ?>" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputNama">Nama Lengkap <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="inputNama" name="nama" placeholder="Nama Lengkap" autofocus />
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputUsername">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="user" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputPassword">Password <span class="text-danger">*</span></label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
                        </div>
                        <div class="form-group mb-3">
                            <input type="hidden" name="level" value="user">
                            <!-- <label for="inputLevel">Level</label>
                                <select class="form-control" id="inputLevel" name="level">
                                    <option value="">&nbsp;</option>
                                    <?= get_level_option('level') ?>
                                </select> -->
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-user-share">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h3" />
                                        <path d="M16 22l5 -5" />
                                        <path d="M21 21.5v-4.5h-4.5" />
                                    </svg>
                                </span>
                                Daftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>