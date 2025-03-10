<div class="page-header fw-bolder text-center mt-5">
    <h1 class="entry-title" style="font-size: 50px;">SISTEM PAKAR PENYAKIT SAPI SIMENTAL</h1>
</div>
<style>
    h1 {
        font-size: 60px;
    }
</style>
<div class="entry-body flex-grow-1 px-3 mt-5">
    <h2 class="text-center">
        SISTEM PAKAR DIAGNOSIS PENYAKIT SAPI SIMENTAL
        MENGGUNAKAN METODE CERTAINTY FACTOR
        DAN FORWARD CHAINING
    </h2>
    <div class="text-center mt-4">
        <img class="img-fluid" style="max-width: 500px; height: auto;" src="assets/images/main.webp" alt="Diagnosa Penyakit Sapi Simental">
    </div>
    <div class="container-lg text-left">
        <p>
            Penyakit pada sapi Simental adalah gangguan kesehatan yang dapat disebabkan oleh berbagai faktor seperti bakteri, virus, parasit, atau kondisi lingkungan yang tidak ideal. Banyak peternak menghadapi tantangan dalam mendeteksi dini penyakit pada sapi mereka, yang sering kali disebabkan oleh kurangnya akses ke tenaga ahli dan dokter hewan, serta waktu yang dibutuhkan untuk berkonsultasi secara langsung. Oleh karena itu, sistem pakar berbasis web ini dirancang untuk membantu peternak dalam mendiagnosis penyakit sapi Simental secara mandiri dan cepat dengan memanfaatkan metode *certainty factor* yang mengandalkan keyakinan dari pakar dalam kondisi yang tidak pasti.
        </p>
        <h3>
            Temukan Gejala Penyakit Sapi Anda
        </h3>
        <p>
            Pahami gejala penyakit pada sapi Simental dan ketahui apakah kondisi sapi Anda memerlukan penanganan segera.
        </p>

        <div class="mt-4">
            <h4><b>Memungkinkan Anda untuk mendiagnosa penyakit sapi dengan akurat</b></h4>
            <p>Kami mendukung peternak dalam mengidentifikasi penyakit pada sapi Simental melalui sistem pakar berbasis web yang menggunakan metode Certainty Factor. Sistem ini memberikan diagnosis berdasarkan gejala yang terdeteksi, dengan rekomendasi yang dapat diandalkan untuk perawatan yang tepat.</p>
            <p>Dengan menggunakan metode Certainty Factor, sistem kami dapat mengukur tingkat kepastian dari diagnosis yang diberikan, membantu peternak membuat keputusan yang lebih informasional dan akurat mengenai kesehatan sapi mereka.</p>
        </div>

        <div class="mt-4">
            <h4><b>Memberikan informasi kesehatan hewan yang ahli untuk semua peternak</b></h4>
            <p>Informasi kesehatan hewan berbasis bukti harus mudah diakses oleh setiap peternak. Kami bekerja sama dengan ahli veteriner dan organisasi peternakan untuk menyediakan informasi kesehatan yang terpercaya dan berguna untuk pemeliharaan sapi Simental.</p>
            <p>Sistem kami dilengkapi dengan database informasi penyakit yang komprehensif, termasuk gejala, penyebab, dan perawatan. Selain itu, kami juga menyediakan artikel dan panduan dari para ahli untuk mendukung peternak dalam merawat sapi mereka dengan cara yang paling efektif.</p>
        </div>

        <!-- <div class="row">
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card">
                    <?php
                    $q = esc_field(_get('q'));
                    $rows = $db->get_results("SELECT * FROM tb_gejala WHERE nama_gejala LIKE '%$q%' ORDER BY kode_gejala");
                    $jumlah_gejala = count($rows);
                    ?>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Jumlah Gejala</div>

                        </div>
                        <h1><?php echo $jumlah_gejala; ?></h1>
                        <div class="d-flex mb-2">
                            <h2>Data Gejala Sapi</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card">
                    <?php
                    $q = esc_field(_get('q'));
                    $rows = $db->get_results("SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%$q%' ORDER BY kode_diagnosa");
                    $jumlah_penyakit = count($rows);
                    ?>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Jumlah Gejala</div>

                        </div>
                        <h1><?php echo $jumlah_penyakit; ?></h1>
                        <div class="d-flex mb-2">
                            <h2>Data Penyakit Sapi</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="aksi.php?m=konsultasi&act=new" class="btn btn-outline-dark  w-100 py-3 h3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-activity">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                        </svg>
                    </span>
                    Konsultasi Sekarang</a>
            </div>
        </div>
    </div>
</div>