<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran | POLTEKKES KEMENKES PALEMBANG</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/nav-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/form-style.css">
    <script defer src="<?= base_url() ?>assets/scripts/jquery-3.6.0.min.js"></script>
    <!-- http://api.iksgroup.co.id/lokasi/demolokasi -->
    <script defer src="<?= base_url() ?>assets/scripts/lokasiapi.js"></script>
    <script defer src="<?= base_url() ?>assets/scripts/form-script.js"></script>
    <script defer src="<?= base_url() ?>assets/scripts/nav-script.js"></script>
</head>
<body>
    <div class="container">
    <div class="block"></div>
    <header>
        <nav>
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="logo">
            <div class="brand">
                <h3>Penerimaan Mahasiswa Baru</h3>
                <h3>Poltekkes Kemenkes Palembang</h3>
            </div>
        </nav>
    </header>
    <main>
        <div class="form-data">
            <div class="data pribadi active" id="siswa">
                <h2>Data Pribadi</h2>
            </div>
            <div class="data sekolah" id="sekolah">
                <h2>Data Sekolah</h2>
            </div>
            <div class="data prodi" id="prodi">
                <h2>Program Studi</h2>
            </div>
            <div class="data prestasi" id="prestasi">
                <h2>Data Prestasi</h2>
            </div>
            <div class="form">
                <form action="form-pendaftaran?jalur=<?= $this->input->get('jalur'); ?>" method="POST" enctype="multipart/form-data">
                    <?= validation_errors() ?>
                    <div class="confirm-alert" id="confirm-alert">
                        <div class="ca-head">
                            <svg xmlns="http://www.w3.org/2000/svg" height="46px" viewBox="0 0 24 24" width="46px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <h2>Konfirmasi</h2>
                        </div>
                        <div class="ca-body">
                            <p>Pastikan data yang anda masukkan sudah sesuai. Apakah anda sudah yakin dengan data yang telah diinputkan? Pilih simpan untuk melanjutkan</p>
                            <div class="ca-button">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a class="a-btn btn-danger batal-simpan" id="ca-cancel">Batal</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-form siswa active" id="siswa">
                        <span class="label-input"><label class="form-label" for="nama_lengkap">Nama Lengkap</label></span>
                        <input type="text" class="text" name="nama_lengkap" id="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" autofocus>
                        <span class="label-input"><label class="form-label" for="alamat">Alamat Sesuai KTP</label></span>
                        <textarea class="text area" name="alamat" id="alamat"><?= set_value('alamat') ?></textarea>
                        <span class="label-input"><label class="form-label" for="kode_pos">Kode Pos</label></span>
                        <input type="text" class="text" name="kode_pos" id="kode_pos" value="<?= set_value('kode_pos') ?>" placeholder="xxxxx">
                        <span class="label-input"><label class="form-label" for="nisn">Nomor Induk Siswa Nasional (NISN)</label></span>
                        <input type="text" class="text" name="nisn" id="nisn" value="<?= set_value('nisn') ?>">
                        <span class="label-input"><label class="form-label" for="no_telepon">No.Telp/HP</label></span>
                        <input type="text" class="text" class="text" placeholder="*Disarankan memiliki whatsapp" name="no_telepon" id="no_telepon" value="<?= set_value('no_telepon') ?>">
                        <span class="label-input"><label class="form-label" for="jenis_kelamin">Jenis Kelamin</label></span>
                        <div class="radio-hz">
                            <input type="radio" value="Pria" name="jenis_kelamin" id="jenis_kelamin rad-pria" <?= set_radio('jenis_kelamin', 'Pria') ?> >
                            <span class="radio"><label for="jenis_kelamin rad-pria">Pria</label></span>
                            <input type="radio" value="Wanita" name="jenis_kelamin" id="jenis_kelamin rad-wanita" <?= set_radio('jenis_kelamin', 'Wanita') ?> >
                            <span class="radio"><label for="jenis_kelamin rad-wanita">Wanita</label></span>
                        </div>
                        <span class="label-input"><label class="form-label" for="tinggi_badan">Tinggi Badan</label></span>
                        <input type="number" min="0" class="text" name="tinggi_badan" id="tinggi_badan" value="<?= set_value('tinggi_badan') ?>">
                        <span class="label-input"><label class="form-label" for="berat_badan">Berat Badan</label></span>
                        <input type="number" min="0" class="text" name="berat_badan" id="berat_badan" value="<?= set_value('berat_badan') ?>">
                        <span class="label-input"><label class="form-label" for="tempat_lahir">Tempat Lahir</label></span>
                        <input type="text" class="text" name="tempat_lahir" id="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" list="daftar_tempat_lahir" placeholder="*Mohon isi sendiri jika tidak ada!">
                        <datalist id="daftar_tempat_lahir">
                            <?= daftar_tempat_lahir() ?>
                        </datalist>
                        <span class="label-input"><label class="form-label" for="tanggal_lahir">Tanggal Lahir</label></span>
                        <input type="date" class="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                        <span class="label-input"><label class="form-label" for="pas_foto">Pas Foto Terbaru</label></span>
                        <input type="file" name="pas_foto" id="pas_foto" accept=".jpg, .jpeg, .png">
                        <span class="input-file">
                            <label class="input-file" for="pas_foto">Upload Foto<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                            <input type="text" class="text-file pas_foto" readonly>
                        </span>
                        <div class="btn-page">
                            <a class="a-btn btn-success btn-page" id="sekolah">Selanjutnya</a>
                        </div>
                    </div>
                    <div class="table-form sekolah" id="sekolah">
                        <span class="label-input"><label class="form-label" for="jenis_pendidikan_menengah">Jenis Pendidikan Menengah</label></span>
                        <div class="radio-vr">
                            <input type="radio" class="radio down jpm_fixed" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah jpm-sma" value="Sekolah Menengah Atas (SMA)" <?= set_radio('jenis_pendidikan_menengah', 'Sekolah Menengah Atas (SMA)') ?> >
                            <label for="jenis_pendidikan_menengah jpm-sma">Sekolah Menengah Atas (SMA)</label><br>
                            <input type="radio" class="radio down jpm_fixed" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah jpm-ma" value="Madrasah Aliyah (MA)" <?= set_radio('jenis_pendidikan_menengah', 'Madrasah Aliyah (MA)') ?> >
                            <label for="jenis_pendidikan_menengah jpm-ma">Madrasah Aliyah (MA)</label> <br>
                            <input type="radio" class="radio down jpm_fixed" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah jpm-smk" value="Sekolah Menengah Kejuruan (SMK)" <?= set_radio('jenis_pendidikan_menengah', 'Sekolah Menengah Kejuruan (SMK)') ?> >
                            <label for="jenis_pendidikan_menengah jpm-smk">Sekolah Menengah Kejuruan (SMK)</label><br>
                            <input type="radio" class="radio down jpm_fixed" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah jpm-mak" value="Madrasah Aliyah Kejuruan (MAK)" <?= set_radio('jenis_pendidikan_menengah', 'Madrasah Aliyah Kejuruan (MAK)') ?> >
                            <label for="jenis_pendidikan_menengah jpm-mak">Madrasah Aliyah Kejuruan (MAK)</label><br>
                            <input type="radio" class="radio down jpm_fixed" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah jpm-kbpc" value="Kelompok Belajar Paket C" <?= set_radio('jenis_pendidikan_menengah', 'Kelompok Belajar Paket C') ?> >
                            <label for="jenis_pendidikan_menengah jpm-kbpc">Kelompok Belajar Paket C</label><br>
                            <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah lainnya1"
                            <?php if (
                                set_value('jenis_pendidikan_menengah') != '' &&
                                set_value('jenis_pendidikan_menengah') != 'Sekolah Menengah Atas (SMA)' &&
                                set_value('jenis_pendidikan_menengah') != 'Madrasah Aliyah (MA)' &&
                                set_value('jenis_pendidikan_menengah') != 'Sekolah Menengah Kejuruan (SMK)' &&
                                set_value('jenis_pendidikan_menengah') != 'Madrasah Aliyah Kejuruan (MAK)' &&
                                set_value('jenis_pendidikan_menengah') != 'Kelompok Belajar Paket C'
                            ): ?>
                                checked
                            <?php endif; ?> >
                            <label for="jenis_pendidikan_menengah lainnya1">Lainnya...</label><br>
                            <input type="text" class="text other_opt
                            <?php if (
                                set_value('jenis_pendidikan_menengah') == '' ||
                                (
                                    set_value('jenis_pendidikan_menengah') == 'Sekolah Menengah Atas (SMA)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Madrasah Aliyah (MA)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Sekolah Menengah Kejuruan (SMK)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Madrasah Aliyah Kejuruan (MAK)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Kelompok Belajar Paket C'
                                )
                            ): ?>
                                disabled
                            <?php endif; ?>"
                            name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah disabled" value="<?= set_value('jenis_pendidikan_menengah') ?>"
                            <?php if (
                                set_value('jenis_pendidikan_menengah') == '' ||
                                (
                                    set_value('jenis_pendidikan_menengah') == 'Sekolah Menengah Atas (SMA)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Madrasah Aliyah (MA)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Sekolah Menengah Kejuruan (SMK)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Madrasah Aliyah Kejuruan (MAK)' &&
                                    set_value('jenis_pendidikan_menengah') == 'Kelompok Belajar Paket C'
                                )
                            ): ?>
                                disabled
                            <?php endif; ?> >
                        </div>
                        <span class="label-input"><label class="form-label" for="jurusan">Jurusan</label></span>
                        <div class="radio-vr">
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan ipa" value="IPA" <?= set_radio('jurusan', 'IPA') ?> >
                            <label for="jurusan ipa">IPA</label><br>
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan ips" value="IPS" <?= set_radio('jurusan', 'IPS') ?> >
                            <label for="jurusan ips">IPS</label> <br>
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan SMKPer" value="SMK Keperawatan" <?= set_radio('jurusan', 'SMK Keperawatan') ?> >
                            <label for="jurusan SMKPer">SMK Keperawatan</label><br>
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan SMKFar" value="SMK Farmasi" <?= set_radio('jurusan', 'SMK Farmasi') ?> >
                            <label for="jurusan SMKFar">SMK Farmasi</label><br>
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan SMKAnkes" value="SMK Analisis Kesehatan" <?= set_radio('jurusan', 'SMK Analisis Kesehatan') ?> >
                            <label for="jurusan SMKAnkes">SMK Analisis Kesehatan</label><br>
                            <input type="radio" class="radio down jurusan_fixed" name="jurusan" id="jurusan SMKPergi" value="SMK Keperawatan Gigi" <?= set_radio('jurusan', 'SMK Keperawatan Gigi') ?> >
                            <label for="jurusan SMKPergi">SMK Keperawatan Gigi</label><br>
                            <input type="radio" class="radio down" name="jurusan" id="jurusan lainnya2"
                            <?php if (
                                set_value('jurusan') != '' &&
                                set_value('jurusan') != 'IPA' &&
                                set_value('jurusan') != 'IPS' &&
                                set_value('jurusan') != 'SMK Keperawatan' &&
                                set_value('jurusan') != 'SMK Farmasi' &&
                                set_value('jurusan') != 'SMK Analisis Kesehatan' &&
                                set_value('jurusan') != 'SMK Keperawatan Gigi'
                            ): ?>
                                checked
                            <?php endif; ?> >
                            <label for="jurusan lainnya2">Lainnya...</label><br>
                            <input type="text" class="text other_opt
                            <?php if (
                                set_value('jurusan') == '' ||
                                (
                                    set_value('jurusan') == 'IPA' &&
                                    set_value('jurusan') == 'IPS' &&
                                    set_value('jurusan') == 'SMK Keperawatan' &&
                                    set_value('jurusan') == 'SMK Farmasi' &&
                                    set_value('jurusan') == 'SMK Analisis Kesehatan' &&
                                    set_value('jurusan') == 'SMK Keperawatan Gigi'
                                )
                            ): ?>
                                disabled
                            <?php endif; ?>
                            "name="jurusan" id="jurusan disabled" value="<?= set_value('jurusan') ?>"
                            <?php if (
                                set_value('jurusan') == '' ||
                                (
                                    set_value('jurusan') == 'IPA' &&
                                    set_value('jurusan') == 'IPS' &&
                                    set_value('jurusan') == 'SMK Keperawatan' &&
                                    set_value('jurusan') == 'SMK Farmasi' &&
                                    set_value('jurusan') == 'SMK Analisis Kesehatan' &&
                                    set_value('jurusan') == 'SMK Keperawatan Gigi'
                                )
                            ): ?>
                                disabled
                            <?php endif; ?> >
                        </div>
                        <span class="label-input"><label class="form-label" for="nama_sekolah">Nama Sekolah</label></span>
                        <input type="text" class="text" name="nama_sekolah" id="nama_sekolah" value="<?= set_value('nama_sekolah') ?>">
                        <span class="label-input"><label class="form-label" for="jenis_sekolah">Jenis Sekolah</label></span>
                        <div class="radio-hz">
                            <input type="radio" value="Negeri" name="jenis_sekolah" id="jenis_sekolah negeri" <?= set_radio('jenis_sekolah', 'Negeri') ?> >
                            <span class="radio"><label for="jenis_sekolah negeri">Negeri</label></span>
                            <input type="radio" value="Swasta" name="jenis_sekolah" id="jenis_sekolah swasta" <?= set_radio('jenis_sekolah', 'Swasta') ?> >
                            <span class="radio"><label for="jenis_sekolah swasta">Swasta</label></span>
                        </div>
                        <span class="label-input"><label class="form-label" for="provinsi_asal_sekolah">Provinsi Asal Sekolah</label></span>
                        <select name="provinsi_asal_sekolah" id="provinsi_asal_sekolah">
							<option disabled selected>--Pilih Provinsi--</option>
							<?= daftar_provinsi(); ?>
						</select>
                        <span class="label-input"><label class="form-label" for="kota_kabupaten_asal_sekolah">Kota/Kabupaten Asal Sekolah</label></span>
                        <select name="kota_kabupaten_asal_sekolah" id="kota_kabupaten_asal_sekolah"></select>
                        <select class="select-hidden" id="kecamatan_asal_sekolah"></select>
                        <select class="select-hidden" id="kelurahan_asal_sekolah"></select>
                        <span class="label-input"><label class="form-label" for="akreditasi_sekolah">Akreditasi Sekolah</label></span>
                        <div class="radio-hz">
                            <input type="radio" value="A" name="akreditasi_sekolah" id="akreditasi_sekolah a" <?= set_radio('akreditasi_sekolah', 'A') ?> >
                            <span class="radio"><label for="akreditasi_sekolah a">A</label></span>
                            <input type="radio" value="B" name="akreditasi_sekolah" id="akreditasi_sekolah b" <?= set_radio('akreditasi_sekolah', 'B') ?> >
                            <span class="radio"><label for="akreditasi_sekolah b">B</label></span>
                        </div>
                        <span class="label-input"><label class="form-label" for="tahun_lulus">Tahun Lulus/Tamat</label></span>
                        <input type="number" min="2000" max="<?= date('Y') ?>" list="daftar_tahun_lulus" name="tahun_lulus" id="tahun_lulus" class="text" value="<?= set_value('tahun_lulus') ?>" placeholder="*Mohon isi sendiri jika tidak ada!">
                        <datalist id="daftar_tahun_lulus">
                        <?= daftar_tahun_lulus(); ?>
                        </datalist>
                        <span class="label-input"><label class="form-label"for="rekap_nilai_rapot">Rekap Nilai Rapot</label></span>
                        <input type="file" name="rekap_nilai_rapot" id="rekap_nilai_rapot" accept=".xls, .xlsx">
                        <span class="input-file">
                            <label class="input-file" for="rekap_nilai_rapot">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                            <input type="text" class="text-file rekap_nilai_rapot" readonly>
                        </span>
                        <span class="label-input"><label class="form-label" for="rata_rata_nilai_rapot">Rata-Rata Nilai Rapot</label></span>
                        <input type="number" min="0" max="100" step="0.1" class="text" name="rata_rata_nilai_rapot" id="rata_rata_nilai_rapot" value="<?= set_value('rata_rata_nilai_rapot') ?>" placeholder="xx,x">
                        <span class="label-input"><label class="form-label" for="peringkat_semester_1">Peringkat Semester 1</label></span>
                        <input type="number" min="1" class="text" name="peringkat_semester_1" id="peringkat_semester_1" value="<?= set_value('peringkat_semester_1') ?>">
                        <span class="label-input"><label class="form-label" for="peringkat_semester_2">Peringkat Semester 2</label></span>
                        <input type="number" min="1" class="text" name="peringkat_semester_2" id="peringkat_semester_2" value="<?= set_value('peringkat_semester_2') ?>">
                        <span class="label-input"><label class="form-label"for="peringkat_semester_3">Peringkat Semester 3</label></span>
                        <input type="number" min="1" class="text" name="peringkat_semester_3" id="peringkat_semester_3" value="<?= set_value('peringkat_semester_3') ?>">
                        <span class="label-input"><label class="form-label" for="peringkat_semester_4">Peringkat Semester 4</label></span>
                        <input type="number" min="1" class="text" name="peringkat_semester_4" id="peringkat_semester_4" value="<?= set_value('peringkat_semester_4') ?>">
                        <span class="label-input"><label class="form-label" for="peringkat_semester_5">Peringkat Semester 5</label></span>
                        <input type="number" min="1" class="text" name="peringkat_semester_5" id="peringkat_semester_5" value="<?= set_value('peringkat_semester_5') ?>">
                        <div class="btn-page">
                            <a class="a-btn btn-primary btn-page" id="siswa">Sebelumnya</a>
                            <a class="a-btn btn-success btn-page" id="prodi">Selanjutnya</a>
                        </div>
                    </div>
                    <div class="table-form prodi" id="prodi">
                        <h3>Prodi yang ada di Politeknik Kesehatan Palembang (Informasi masing-masing Prodi dapat dilihat di <a href="http://www.poltekkespalembang.ac.id">www.poltekkespalembang.ac.id</a>)</h3>
                        <div class="list prodi">
                            <ol class="num-list">
								<?= daftar_program_studi('li'); ?>
                            </ol>
                        </div>
                        <div class="list harga">
                            <p>Besar Biaya Pendaftaran</p>
                            <ul class="dot-list">
                                <li>1 Pilihan Rp 100.000,-</li>
                                <li>2 Pilihan Rp 125.000,-</li>
                            </ul>
                        </div>
                        <span class="label-input"><label class="form-label" for="bukti_pembayaran">Upload Bukti Pembayaran</label></span>
                        <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept=".jpg, .jpeg, .png">
                        <span class="input-file">
                            <label class="input-file" for="bukti_pembayaran">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                            <input type="text" class="text-file bukti_pembayaran" readonly>
                        </span>
                        <span class="label-input"><label for="program_studi_pilihan_1" class="form-label">Program Studi Pilihan 1</label></span>
						<select name="program_studi_pilihan_1" id="program_studi_pilihan_1">
							<option disabled selected>--Pilih program studi--</option>
							<?= daftar_program_studi('option', 'program_studi_pilihan_1'); ?>
						</select>
                        <span class="label-input"><label for="program_studi_pilihan_2" class="form-label">Program Studi Pilihan 2</label></span>
						<select name="program_studi_pilihan_2" id="program_studi_pilihan_2">
							<option value="<?= null ?>">--Lewati jika hanya membayar 1 pilihan--</option>
							<?= daftar_program_studi('option', 'program_studi_pilihan_2'); ?>
						</select>
                        <div class="btn-page">
                            <a class="a-btn btn-primary btn-page" id="sekolah">Sebelumnya</a>
                            <a class="a-btn btn-success btn-page" id="prestasi">Selanjutnya</a>
                        </div>
                    </div>
                    <div class="table-form prestasi" id="prestasi">
                        <h3>Prestasi yang pernah diraih meliputi :</h3>
                        <div class="paragraph">
                            <h4>1. Prestasi Akademik</h4>
                            <p><span class="indent-line">Prestasi</span> akademik misal sebagai pemenang kompetisi ilmu pengetahuan (bidang akademik) minimal pada tingkat kabupaten yang diperoleh selama berada pada jenjang SMA/MA (dibuktikan dengan setifikat, piagam, atau penghargaan yang dilegalisir oleh kepala sekolah</p>
                            <span class="space"></span>
                            <h4>2. Prestasi Non-Akademik</h4>
                            <p>a. Prestasi Bahasa Inggris
                                <span class="indent">Memiliki prestasi sebagai pemenang kompetisi bidang bahasa Inggris yang diraih minimal pada tingkat kabupaten selama berada pada jenjang SMA/MA sederajat (dibuktikan dengan sertifikat/piagam penghargaan dari instansi yang berwenang yang dilegalisir oleh kepala sekolah)</span>
                            </p>
                            <p>b. Prestasi Bidang keagamaan
                                <span class="indent">Menyerahkan rekomendasi dari lembaga yang berwenang terkait dengan prestasinya</span>
                            </p>
                            <p>c. Prestasi Bidang Olahraga atau Seni
                                <span class="indent">Memiliki prestasi sebagai pemenang kompetisi bidang Olahraga dan Seni yang diarih minimal pada tingkat kabupaten selama berada pada jenjang SMA/MA sederajat (dibuktikan dengan sertifikat atau piagam penghargaan dari instansi berwenang dilegalisir oleh kepala sekolah)</span>
                            </p>
                            <p>d. Prestasi Unggulan Lainnya
                                <span class="indent">Memiliki prestasi sebagai pemenang kompetisi bidang Prestasi Unggulan lainnya diarih minimal pada tingkat kabupaten selama berada pada jenjang SMA/MA sederajat (dibuktikan dengan sertifikat atau piagam penghargaan dari instansi berwenang)</span>
                            </p>
                            <span class="space"></span>
                            <p>Jenis Prestasi yang pernah diraih I (Lampirkan Penjelasan Singkat menggunakan softcopy Microsoft Word dan di upload serta Upload Bukti sertifikat/piagam/pengahargaan). Kosongkan bila tidak ada</p>
                            <input type="file" name="prestasi_1" id="prestasi_1" accept=".pdf">
                            <span class="input-file" id="prestasi">
                                <label class="input-file" for="prestasi_1">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                                <input type="text" class="text-file prestasi_1" readonly>
                            </span>
                            <span class="space"></span>
                            <p>Jenis Prestasi yang pernah diraih II (Lampirkan Penjelasan Singkat menggunakan softcopy Microsoft Word dan di upload serta Upload Bukti sertifikat/piagam/pengahargaan). Kosongkan bila tidak ada</p>
                            <input type="file" name="prestasi_2" id="prestasi_2" accept=".pdf">
                            <span class="input-file" id="prestasi">
                                <label class="input-file" for="prestasi_2">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                                <input type="text" class="text-file prestasi_2" readonly>
                            </span>
                            <span class="space"></span>
                            <p>Jenis Prestasi yang pernah diraih III (Lampirkan Penjelasan Singkat menggunakan softcopy Microsoft Word dan di upload serta Upload Bukti sertifikat/piagam/pengahargaan). Kosongkan bila tidak ada</p>
                            <input type="file" name="prestasi_3" id="prestasi_3" accept=".pdf">
                            <span class="input-file" id="prestasi">
                                <label class="input-file" for="prestasi_3">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                                <input type="text" class="text-file prestasi_3" readonly>
                            </span>
                            <span class="space"></span>
                            <p>Jenis Prestasi yang pernah diraih IV (Lampirkan Penjelasan Singkat menggunakan softcopy Microsoft Word dan di upload serta Upload Bukti sertifikat/piagam/pengahargaan). Kosongkan bila tidak ada</p>
                            <input type="file" name="prestasi_4" id="prestasi_4" accept=".pdf">
                            <span class="input-file" id="prestasi">
                                <label class="input-file" for="prestasi_4">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                                <input type="text" class="text-file prestasi_4" readonly>
                            </span>
                            <span class="space"></span>
                            <p>Jenis Prestasi yang pernah diraih V (Lampirkan Penjelasan Singkat menggunakan softcopy Microsoft Word dan di upload serta Upload Bukti sertifikat/piagam/pengahargaan). Kosongkan bila tidak ada</p>
                            <input type="file" name="prestasi_5" id="prestasi_5" accept=".pdf">
                            <span class="input-file" id="prestasi">
                                <label class="input-file" for="prestasi_5">Upload File<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="10" width="10"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z"/></g></svg></label>
                                <input type="text" class="text-file prestasi_5" readonly>
                            </span>
                        </div>
                        <div class="btn-page">
                            <a class="a-btn btn-primary btn-page" id="prodi">Sebelumnya</a>
                            <a class="a-btn btn-success simpan-data">Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="scroll">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z"/></svg>
        </div>
    </main>
    </div>
</body>
</html>
