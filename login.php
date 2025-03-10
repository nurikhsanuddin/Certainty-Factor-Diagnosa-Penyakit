<div class="container d-flex align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h1 class="h3">Masuk</h1>
                        <p class="text-muted">Sistem Pakar Diagnosa Penyakit Sapi Simental</p>
                    </div>
                    <?php if ($_POST) include 'aksi.php'; ?>
                    <form method="post">
                        <div class="form-group mb-3">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="user" autofocus />
                        </div>
                        <div class="form-group mb-3">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass" />
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                        <path d="M21 12h-13l3 -3" />
                                        <path d="M11 15l-3 -3" />
                                    </svg>
                                </span>
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>