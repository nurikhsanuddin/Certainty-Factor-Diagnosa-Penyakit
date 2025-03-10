<?php
$terjawab = get_terjawab();
$relasi = get_relasi($terjawab);
$kode_gejala = get_next_gejala($relasi);

$success = _get('success');
$row = $db->get_row("SELECT * FROM tb_gejala WHERE kode_gejala='$kode_gejala'");

$count = $db->get_var("SELECT COUNT(*) FROM tb_konsultasi");

if (!$row) {
    $success = true;
}
?>
<div class="page-header">
    <h1>Konsultasi</h1>
</div>

<?php if ($success) : ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Riwayat Pertanyaan</h3>
        </div>
        <div class="list-group list-group-flush">
            <?php
            $rows = $db->get_results("SELECT * FROM tb_konsultasi k INNER JOIN tb_gejala g ON g.kode_gejala=k.kode_gejala");
            foreach ($rows as $row) : ?>
                <div class="list-group-item">
                    <?= $row->ID ?>. Apakah <?= strtolower($row->nama_gejala) ?>?
                    <strong><?= $row->jawaban ?></strong>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php include 'konsultasi_hasil.php'; ?>
<?php else : ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jawablah pertanyaan berikut ini [<?= $row->kode_gejala ?>]</h3>
        </div>
        <div class="card-body">
            <h3>Apakah <?= strtolower($row->nama_gejala) ?>?</h3>
            <form action="aksi.php?m=konsultasi" method="post">
                <input type="hidden" name="kode_gejala" value="<?= $row->kode_gejala ?>" />
                <div class="form-group mt-3">
                    <label class="form-label" for="jawaban">Pilih jawaban Anda:</label>
                    <select type="text" name="jawaban" id="jawaban" class="form-select tomselected ts-hidden-accessible">
                        <option disabled selected>-Pilih-</option>
                        <option value="Ya">Ya</option>
                        <option value="Yakin">Yakin</option>
                        <option value="Cukup Yakin">Cukup Yakin</option>
                        <option value="Sedikit Yakin">Sedikit Yakin</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary ">Lanjut <span class="ps-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7l5 5l-5 5" />
                                        <path d="M13 7l5 5l-5 5" />
                                    </svg>
                                </span></button>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        <?php if ($count) : ?>
                            <div class="mt-3">
                                <a class="btn btn-outline-warning" href="?m=konsultasi&success=1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </span>
                                    Lihat Hasil</a>
                                <a class="btn btn-outline-danger" href="aksi.php?m=konsultasi&act=new">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-cancel">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M18.364 5.636l-12.728 12.728" />
                                        </svg>
                                    </span>
                                    Batal
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>



            </form>
        </div>
    </div>
<?php endif ?>