<div class="page-header text-center">
    <h1 class="entry-title">Sistem Pakar Penyakit Kulit</h1>
</div>

<div class="enrty-body flex-grow-1 px-3">
    <h3 class="text-center">
        SISTEM PAKAR DIAGNOSIS PENYAKIT KULIT
        MENGGUNAKAN METODE CERTAINTY FACTOR
        DAN FORWARD CHAINING
    </h3>

    <div class="container-lg text-center">

        <p>
            Penyakit kulit adalah kelainan kulit yang di sebabkan oleh jamur, bakteri, parasite, virus, maupun infeksi. Banyak orang menganggap sepele penyakit kulit, karena mereka cenderung kurang memperhatikan kesehatan kulit serta sering merasa malu jika harus melakukan konsul secara tatap muka mengenai masalah penyakit kulit sehingga penderita kesulitan dalam mengidentifikasi berbagai jenis penyakit kulit dan gejala yang bervariasi. Untuk mengetahui apakah seseorang mungkin terkena penyakit kulit atau tidak, masyarakat membutuhkan bantuan dokter spesialis kulit. Tetapi, pada kenyataannya, masyarakat sering menghadapi berbagai masalah seperti keterbatasan jumlah dokter , antrian pasien yang panjang, dan jarak yang jauh ke fasilitas kesehatan, sehingga mereka sering menunda untuk berobat ke rumah sakit. Oleh karena itu maka diperlukan adanya sistem pakar untuk mendiagnosa penyakit kulit dan mempermudah penderita untuk mengetahui penyakit beserta gejalanya. Dalam situasi yang tidak pasti, metode certainty factor bisa dipakai karena bergantung pada tingkat keyakinan yang dimiliki oleh pakar. Hasil perancangan sistem pakar pada diagnosis penyakit kulit dengan metode certainty factor berbasis web berguna untuk membantu dan memudahkan masyarakat dalam mengetahui gejala dan penyakit kulit sehingga dapat dilakukan penanganan segera. </p>
        <h3>
            Temukan Gejala Penyakit Kulit Anda
        </h3>
        <p>
            Pahami gejala penyakit kulit,lalu ketahui apakah kondisi yang Anda alami normal.
        </p>
        <div class="row">
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary css-selector shadow">
                    <div class="py-2"></div>
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start my-auto">
                        <?php
                        $q = esc_field(_get('q'));
                        $rows = $db->get_results("SELECT * FROM tb_gejala WHERE nama_gejala LIKE '%$q%' ORDER BY kode_gejala");
                        $jumlah_gejala = count($rows);
                        ?>
                        <h1><?php echo $jumlah_gejala; ?></h1>
                        <h2>Data Gejala</h2>
                    </div>
                    <div class="py-2"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary css-selector shadow">
                    <div class="py-2"></div>
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <?php
                        $q = esc_field(_get('q'));
                        $rows = $db->get_results("SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%$q%' ORDER BY kode_diagnosa");
                        $jumlah_penyakit = count($rows);
                        ?>
                        <h1><?php echo $jumlah_penyakit; ?></h1>
                        <h2>Data Penyakit</h2>
                    </div>
                    <div class="py-2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text center">
                <a href="aksi.php?m=konsultasi&act=new" class="btn btn-dark w-100 py-3 h3"><i class="fas fa-list me-2"></i>Konsultasi Sekarang</a>
            </div>
            <div class="col-md-6 text center">
                <a href="https://wa.me/+6281243828001" target="_blank" class="btn btn-dark w-100 py-3 h3"><i class="fas fa-phone me-2"></i>Hubungi Kami</a>
            </div>
        </div>
        <div class="row">
            <h1 class="mt-5">Hubungi Kami Melalui Kontak Di Bawah </h1>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 text-left">
                <h3>DIAGSKUL</h3>
                <p>Website diagnosa penyakit kulit membantu pengguna untuk
                    mengidentifikasi dan mendiagnosispenyakit kuli.
                    pengguna memasukkan gejala dan sistem akan memberikan
                    diagnosa dan solusi sementara, tetap lakukan konsultasi
                    ke dokter untuk solusi penyakit kulit yang lebih akurat
                </p>
                <div class="fs-2 d-flex align-item-center">
                    <p> <i class="fab fa-whatsapp me-2 fs-1"></i>
                        081243828001</p>
                </div>
                <div class="fs-2 d-flex align-item-center">
                    <p> <i class="fas fa-map-marker me-2 fs-1"></i>
                        Cuplik, Sukoharjo</p>
                </div>
                <div class="fs-2 d-flex align-item-center">
                    <p> <i class="fas fa-envelope  me-2 fs-1"></i>
                        diagskul@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3130899610114!2d110.77191641530615!3d-7.558697694546616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1696a3a5e835%3A0x400cfcd15c45210!2sCuplik%2C%20Cuplik%2C%20Bendosari%2C%20Sukoharjo%20Sub-District%2C%20Sukoharjo%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1627646322612!5m2!1sen!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
</div>