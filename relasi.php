<div class="page-header">
    <h1>Relasi</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="relasi" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>
            <div class="row my-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <button class="btn btn-success w-100"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                </svg>
                            </span> Refresh</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <a class="btn btn-primary w-100" href="?m=relasi_tambah"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-table-plus">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                                    <path d="M3 10h18" />
                                    <path d="M10 3v18" />
                                    <path d="M16 19h6" />
                                    <path d="M19 16v6" />
                                </svg>
                            </span> Tambah</a>
                    </div>
                </div>
            </div>


        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Gejala</th>
                    <th>CF</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));
            $rows = $db->get_results("SELECT r.ID, r.kode_gejala, d.kode_diagnosa, r.cf, g.nama_gejala, d.nama_diagnosa 
                FROM tb_relasi r INNER JOIN tb_diagnosa d ON d.`kode_diagnosa`=r.`kode_diagnosa` INNER JOIN tb_gejala g ON g.`kode_gejala`=r.`kode_gejala`
                WHERE r.kode_gejala LIKE '%$q%'
                    OR r.kode_diagnosa LIKE '%$q%'
                    OR g.nama_gejala LIKE '%$q%'
                    OR d.nama_diagnosa LIKE '%$q%' 
                ORDER BY r.kode_diagnosa, r.kode_gejala");
            $no = 0;

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td>[<?= $row->kode_diagnosa . '] ' . $row->nama_diagnosa ?></td>
                    <td>[<?= $row->kode_gejala . '] ' . $row->nama_gejala ?></td>
                    <td><?= $row->cf ?></td>
                    <td class="nw">
                        <a class="btn btn-sm w-100 m-1 btn-warning" href="?m=relasi_ubah&ID=<?= $row->ID ?>"><span class="glyphicon glyphicon-edit">Edit</span></a>
                        <a class="btn btn-sm w-100 m-1 btn-danger" href="aksi.php?act=relasi_hapus&ID=<?= $row->ID ?>" onclick="return confirm('Hapus data?')">Hapus<span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>