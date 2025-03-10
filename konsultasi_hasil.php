<?php
$rows = $db->get_results("
SELECT * 
FROM tb_gejala 
WHERE kode_gejala IN (SELECT kode_gejala FROM tb_konsultasi WHERE jawaban IN ('Ya', 'Yakin', 'Cukup Yakin', 'Sedikit Yakin'))
");
if (!$rows) :
    print_msg('Belum ada gejala terpilih!', 'warning');
    echo '<p><a class="btn btn-primary" href="aksi.php?m=konsultasi&act=new">Konsultasi Lagi</a></p>';
else :

?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Gejala Terpilih</h3>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Gejala</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_gejala ?></td>
                </tr>
            <?php endforeach;
            ?>
        </table>
    </div>
    <?php
    // Tentukan bobot untuk masing-masing jawaban
    $bobot_jawaban = [
        'Ya' => 1,
        'Yakin' => 0.8,
        'Cukup Yakin' => 0.6,
        'Sedikit Yakin' => 0.4,
        'Tidak' => 0,
    ];

    // Ambil hasil konsultasi dengan jawaban dan gejala
    $rows = $db->get_results("
    SELECT r.*, d.*, k.jawaban 
    FROM tb_relasi r 
    INNER JOIN tb_diagnosa d ON d.kode_diagnosa = r.kode_diagnosa      
    INNER JOIN tb_konsultasi k ON k.kode_gejala = r.kode_gejala
    WHERE k.jawaban IN ('Ya', 'Yakin', 'Cukup Yakin', 'Sedikit Yakin')
    ORDER BY r.kode_diagnosa, r.kode_gejala
");

    $diagnosa = array();
    foreach ($rows as $row) {
        // Ambil bobot berdasarkan jawaban
        $bobot = isset($bobot_jawaban[$row->jawaban]) ? $bobot_jawaban[$row->jawaban] : 0;

        // Jika kode_diagnosa belum ada di array, inisialisasi cf
        if (!isset($diagnosa[$row->kode_diagnosa]['cf'])) {
            $diagnosa[$row->kode_diagnosa]['cf'] = 0;
        }

        // Hitung nilai cf dengan memperhitungkan bobot jawaban
        $diagnosa[$row->kode_diagnosa]['cf'] = $diagnosa[$row->kode_diagnosa]['cf'] + $row->cf * $bobot * (1 - $diagnosa[$row->kode_diagnosa]['cf']);
    }
    ?>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Hasil Analisa</h3>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Kepercayaan</th>

                </tr>
            </thead>
            <?php
            $no = 1;
            function ranking($array)
            {
                $new_arr = array();
                foreach ($array as $key => $value) {
                    $new_arr[$key] = $value['cf'];
                }
                arsort($new_arr);

                $result = array();
                $no = 0;
                foreach ($new_arr as $key => $value) {
                    $result[$key] = ++$no;
                }
                return $result;
            }

            $rank = ranking($diagnosa);

            foreach ($rank as $key => $value) : ?>
                <tr class="<?= ($value == 1) ? 'text-primary' : '' ?>">
                    <td><?= $no++ ?></td>
                    <td><?= $DIAGNOSA[$key]->nama_diagnosa ?></td>
                    <td><?= round($diagnosa[$key]['cf'] * 100, 2) ?>%</td>
                </tr>
            <?php endforeach;
            reset($rank);
            ?>
        </table>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <td>Diagnosa</td>
                    <td><?= $DIAGNOSA[key($rank)]->nama_diagnosa ?></td>
                </tr>
                <tr>
                    <td>Solusi</td>
                    <td><?= $DIAGNOSA[key($rank)]->keterangan ?></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><img src="<?= $DIAGNOSA[key($rank)]->gambar ?>" alt="Gambar Diagnosa" class="img-fluid" style="max-width: 200px; height: auto;"></td>

                </tr>
            </table>

            <p>
                <a class="btn btn-primary" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Konsultasi Lagi</a>
                <a class="btn btn-default" href="cetak.php?m=konsultasi" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
            </p>
        </div>
    </div>
<?php endif; ?>