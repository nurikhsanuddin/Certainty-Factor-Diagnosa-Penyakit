<div class="page-header">
    <h1>Daftar Pengguna</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="user" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>


            <div class="row my-3">
                <div class="col-md-1">
                    <div class="form-group">
                        <button class="btn w-100 btn-success"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                </svg>
                            </span> Refresh</button>
                    </div>
                </div>

                <div class="col-md-1">
                    <div class="form-group">
                        <a class="btn w-100 btn-primary" href="cetak.php?m=user" target="_blank"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                    <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </span> Cetak</a>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>User</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));

            $rows = $db->get_results("SELECT * FROM tb_admin WHERE nama_user LIKE '%$q%' ORDER BY kode_user");
            $no = 0;

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->kode_user ?></td>
                    <td><?= $row->nama_user ?></td>
                    <td><?= $row->user ?></td>
                    <td><?= $row->level ?></td>
                    <td class="nw text-center">
                        <a class="btn btn-sm w-50 m-1 btn-danger" href="aksi.php?act=user_hapus&ID=<?= $row->kode_user ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash">Hapus</span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>