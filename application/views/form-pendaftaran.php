<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/nav-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/form-style.css">
</head>
<body>
    <header>
        <nav>
            <img src="<?= base_url() ?>/assets/img/logo.jpg" alt="logo">
            <div class="brand">
                <h3>Penerimaan Mahasiswa Baru</h3>
                <h3>Poltekkes Kemenkes Palembang</h3>
            </div>
        </nav>
    </header>
    <main>
        <div class="form-data">
            <div class="data pribadi active">
                <h2>Data Pribadi</h2>
            </div>
            <div class="data sekolah">
                <h2>Data Sekolah</h2>
            </div>
            <div class="form">
                <form action="<?= base_url() ?>/Daftar_Controller/form_pendaftaran" method="POST" enctype="multipart/form-data">
                    <div class="table-form siswa active">
                        <table>
                            <input type="hidden" name="jalur_pendaftaran" id="jalur_pendaftaran" value="<?= $this->input->get('jalur') ?>">
                            <tr>
                                <td><label for="nama_lengkap">Nama Lengkap</label></td>
                                <td><input type="text" class="text" name="nama_lengkap" id="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" autofocus></td>
                            </tr>
                            <tr>
                                <td><label for="alamat">Alamat Sesuai KTP</label></td>
                                <td><input type="text" class="text area" name="alamat" id="alamat" value="<?= set_value('alamat') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="kode_pos">Kode Pos</label></td>
                                <td><input type="text" class="text" name="kode_pos" id="kode_pos" value="<?= set_value('kode_pos') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="no_telepon">No.Telp/HP</label></td>
                                <td><input type="text" class="text" class="text" placeholder="*Disarankan memiliki whatsapp" name="no_telepon" id="no_telepon" value="<?= set_value('no_telepon') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="nisn">Nomor Induk Siswa Nasional (NISN)</label></td>
                                <td><input type="text" class="text" name="nisn" id="nisn" value="<?= set_value('nisn') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                                <td>
                                    <input type="radio" value="Pria" name="jenis_kelamin" id="jenis_kelamin"><span class="radio">Pria</span>
                                    <input type="radio" value="Wanita" name="jenis_kelamin"><span class="radio">Wanita</span>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="tinggi_badan">Tinggi Badan</label></td>
                                <td><input type="number" min="0" class="text" name="tinggi_badan" id="tinggi_badan" value="<?= set_value('tinggi_badan') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="berat_badan">Berat Badan</label></td>
                                <td><input type="text" min="0" class="text" name="berat_badan" id="berat_badan" value="<?= set_value('berat_badan') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                                <td><input type="text" class="text" name="tempat_lahir" id="tempat_lahir" value="<?= set_value('tempat_lahir') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                                <td><input type="date" class="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="pas_foto">Pas Foto Terbaru</label></td>
                                <td><input type="file" name="pas_foto" id="pas_foto" accept=".jpg, .jpeg, .png" value="<?= set_value('pas_foto') ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-form sekolah">
                        <table>
                            <tr>
                                <td><label for="jenis_pendidikan_menengah">Jenis Pendidikan Menengah</label></td>
                                <td>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="Sekolah Menengah Atas (SMA)">Sekolah Menengah Atas (SMA) <br>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="Madrasah Aliyah (MA)">Madrasah Aliyah (MA) <br>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="Sekolah Menengah Kejuruan (SMK)">Sekolah Menengah Kejuruan (SMK) <br>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="Madrasah Aliyah Kejuruan (MAK)">Madrasah Aliyah Kejuruan (MAK) <br>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="Kelompok Belajar Paket C">Kelompok Belajar Paket C <br>
                                    <input type="radio" class="radio down" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah">Lainnya... <br>
                                    <input type="text" class="text other_opt disabled" name="jenis_pendidikan_menengah" id="jenis_pendidikan_menengah" value="<?= set_value('jenis_pendidikan_menengah') ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="jurusan">Jurusan</label></td>
                                <td>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="IPA">IPA <br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="IPS">IPS <br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="SMK Keperawatan">SMK Keperawatan <br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="SMK Farmasi">SMK Farmasi <br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="SMK Analisis Kesehatan">SMK Analisis Kesehatan<br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan" value="SMK Keperawatan Gigi">SMK Keperawatan Gigi<br>
                                    <input type="radio" class="radio down" name="jurusan" id="jurusan">Lainnya... <br>
                                    <input type="text" class="text other_opt disabled" name="jurusan" id="jurusan" value="<?= set_value('jurusan') ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="nama_sekolah">Nama Sekolah</label></td>
                                <td><input type="text" class="text" name="nama_sekolah" id="nama_sekolah" value="<?= set_value('nama_sekolah') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="jenis_sekolah">Jenis Sekolah</label></td>
                                <td>
                                    <input type="radio" value="Negeri" name="jenis_sekolah" id="jenis_sekolah"><span class="radio">Negeri</span>
                                    <input type="radio" value="Swasta" name="jenis_sekolah" id="jenis_sekolah"><span class="radio">Swasta</span>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="provinsi_asal_sekolah">Provinsi Asal Sekolah</label></td>
                                <td><input type="text" class="text" name="provinsi_asal_sekolah" id="provinsi_asal_sekolah" value="<?= set_value('provinsi_asal_sekolah') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="kota_kabupaten_asal_sekolah">Kota/Kabupaten Asal Sekolah</label></td>
                                <td><input type="text" class="text" name="kota_kabupaten_asal_sekolah" id="kota_kabupaten_asal_sekolah" value="<?= set_value('kota_kabupaten_asal_sekolah') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="akreditasi_sekolah">Akreditasi Sekolah</label></td>
                                <td>
                                    <input type="radio" value="A" name="akreditasi_sekolah" id="akreditasi_sekolah"><span class="radio">A</span>
                                    <input type="radio" value="B" name="akreditasi_sekolah" id="akreditasi_sekolah"><span class="radio">B</span>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="tahun_lulus">Tahun Lulus/Tamat</label></td>
                                <td><input type="number" min="2000" max="<?= date('Y') ?>" class="text" name="tahun_lulus" id="tahun_lulus" value="<?= set_value('tahun_lulus') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="rekap_nilai_rapot">Rekap Nilai Rapot</label></td>
                                <td><input type="file" name="rekap_nilai_rapot" id="rekap_nilai_rapot" accept=".pdf" value="<?= set_value('rekap_nilai_rapot') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="rata_rata_nilai_rapot">Rata-Rata Nilai Rapot</label></td>
                                <td><input type="number" min="0" max="100" step="0.1" class="text" name="rata_rata_nilai_rapot" id="rata_rata_nilai_rapot" value="<?= set_value('rata_rata_nilai_rapot') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="semester_1">Peringkat Semester 1</label></td>
                                <td><input type="number" min="1" class="text" name="semester_1" id="semester_1" value="<?= set_value('semester_1') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="semester_2">Peringkat Semester 2</label></td>
                                <td><input type="number" min="1" class="text" name="semester_2" id="semester_2" value="<?= set_value('semester_2') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="semester_3">Peringkat Semester 3</label></td>
                                <td><input type="number" min="1" class="text" name="semester_3" id="semester_3" value="<?= set_value('semester_3') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="semester_4">Peringkat Semester 4</label></td>
                                <td><input type="number" min="1" class="text" name="semester_4" id="semester_4" value="<?= set_value('semester_4') ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="semester_5">Peringkat Semester 5</label></td>
                                <td><input type="number" min="1" class="text" name="semester_5" id="semester_5" value="<?= set_value('semester_5') ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="btn">
                        <button class="btn btn-back"><a href="<?= base_url(); ?>">Kembali</a></button>
                        <button type="submit" class="btn">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="<?= base_url(); ?>/assets/scripts/form-script.js"></script>
</body>
</html>