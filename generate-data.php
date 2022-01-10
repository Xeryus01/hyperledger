<?php
// Jika mendownload faker dengan composer
require_once 'vendor/autoload.php';

// inisialisasi faker
$faker = Faker\Factory::create('id_ID');
$nip_bps = 340000400;
$number = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010');
$jabatan1 = array("Kepala K.S Tk I (Tipe A)", "Kepala Wakil Kepala Biro Pusat Statistik", "Kepala Kepala Badan Pusat Statistik", "Kepala Biro Sosial Penduduk", "Kepala K.S Tk I (Tipe B)", " Tenaga Fungsional", "Kepala Deputi Perencanaan dan Analisa Statistik", "Peltu Deputi Statistik Distribusi Dan Neraca Nasional", "Kepala Fungsional", "Kepala Bidang Statistik Produksi", "Kepala BPS Kabupaten", "Kepala BPS Propinsi", "Staf Tenaga Fungsional STIS", "Lektor Kepala Tenaga Fungsional", "Staf Tenaga Fungsional", "Staf Subbagian Kepegawaian & Hukum", "Kepala Wakil Kepala Badan Pusat Statistik", "Kepala Deputi Bidang Neraca dan Analisis Statistik", "Kepala BPS Kabupaten/Kota", "Kepala Bidang Statistik Kependudukan", "Kepala Deputi Bidang Statistik Sosial", "Kepala Sekretariat Utama", "Kepala Sekolah Tinggi Ilmu Statistik", "Kepala Deputi Bidang Statistik Produksi", "Staf BPS Propinsi", "Kepala Subdirektorat Statistik Politik dan Keamanan", "Kepala Bid Pengolahan Data", "Kepala Deputi Bidang Metodologi dan Informasi Statistik", "Kepala Bagian Administrasi Umum", "Kepala Subdirektorat Statistik Perhubungan", "Kepala Inspektorat", "Kepala Bagian Mutasi Pegawai", "Kepala Bagian Tata Usaha", "Kepala Subdirektorat Statistik Holtikultura", "Kepala Bagian Program Terapan Statistik Distribusi Dan Neraca", "Staf Belum Penempatan", "Kepala Pensiun/Meninggal/Berhenti", "Kepala Sub Anal Sos Sus", "Staf BPS Kabupaten/Kota", "Kepala Bidang Statistik Distribusi", "Kepala Bidang Statistik Sosial", "Staf Direktorat Analisis dan Pengembangan Statistik", "Kepala Bagian Statistik Kesehatan, Kesejahteraan Sosial Dan Perumahan", "Staf Bidang Statistik Sosial", "Kepala Direktorat Statistik Tanaman Pangan, Hortikultura, dan Perkebunan", "Kepala Biro Kepegawaian", "Staf Subbagian Administrasi Kepegawaian", "Kepala Direktorat Statistik Industri", "Staf Seksi Evaluasi dan Pelaporan Statistik Ketahanan Wilayah", "Widyaiswara Utama Diperbantukan/Dipekerjakan", "Staf Subbagian Tata Usaha", "Kepala Subdirektorat Publikasi Statistik", "Staf Seksi Neraca Produksi", "Kepala Bidang Integrasi Pengolahan dan Disemina", "Staf Bidang Statistik Distribusi", "Staf MPP", " Diperbantukan/Dipekerjakan", "Kepala Deputi Bidang Statistik Distribusi dan Jasa", "Kepala Subdirektorat Statistik Peternakan dan Perikanan", "Kepala Bidang Pengolahan, Neraca Wilayah dan Analisis", "Kepala Biro Keuangan", "Peneliti Madya Pejabat Fungsional", "Lektor Kepala Tenaga Fungsional STIS", "Kepala Bidang Neraca Wilayah dan Analisis Stati", "Kepala Seksi Statistik Sosial", "Kepala Seksi Pengelolaan Perpustakaan", "Kepala Seksi Pengolahan Statistik Ekspor", "Peltu BPS Kabupaten/Kota", "Kepala Subbagian Tata Usaha", "Staf Subbagian Mutasi Pegawai I", "Peneliti Utama Pejabat Fungsional", "Staf Bidang Statistik Produksi", "Kepala Inspektorat Utama", "Kepala Bidang Neraca Wilayah dan Analisis Statistik", "Kepala Seksi Integrasi Pengolahan dan Diseminas", "Staf Seksi Penyiapan Statistik Ketahanan Wilayah", "Kepala Biro Analisis dan Pengembangan Statistik", "Kepala Seksi Statistik Harga Konsumen dan Harga", "Kepala Seksi Statistik Produksi", "Staf Seksi Pengolahan Statistik Pendidikan dan Kesejahteraan Sosial", "Kepala Seksi Neraca Wilayah dan Analisis Statistik", "Kepala Direktorat Statistik Peternakan, Perikanan, dan Kehutanan", "Staf Seksi Statistik Sosial", "Kepala Seksi Diseminasi dan Layanan Statistik", "Kepala Seksi Statistik Niaga dan Jasa", "Kepala Seksi Statistik Kesejahteraan Rakyat", "Kepala Bagian Penggandaan", "Kepala Subdirektorat Statistik Harga Pedesaan", "Kepala Subdirektorat Statistik Harga Perdagangan Besar", "Staf Seksi Statistik Pertanian", "Staf Seksi Evaluasi dan Pelaporan Statistik Pendidikan dan Kesejahteraan Sosial", "Kepala Subdirektorat Statistik Impor", "Kepala Bidang Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Statistik Distribusi", "Staf Bagian Administrasi Akademik dan Kemahasiswaan", "Staf Inspektorat Wilayah I", "Staf Subbagian Tata Usaha Umum", "Staf Subbagian Rencana Kegiatan Non Teknis Statistik", "Kepala Bagian Jabatan Fungsional", "Staf Subbagian Penjilidan", "Staf Diperbantukan", "Staf Seksi Statistik Niaga dan Jasa", "Kepala Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Konsolidasi Neraca Produksi Tahunan", "Kepala Bidang Pendidikan dan Pelatihan Teknis dan Fungsional", "Staf Diperbantukan/Dipekerjakan", "Staf Seksi Analisis Statistik Sosial", "Kepala Bagian Akuntansi", "Staf Seksi Statistik Industri", "Kepala Seksi Neraca Institusi Nirlaba", "Kepala Seksi Penyiapan Statistik Harga Konsumen", "Kepala Direktorat Statistik Kesejahteraan Rakyat", "Statistisi Pelaksana Seksi Konsistensi Statistik Sosial", "Kepala Seksi Statistik Distribusi", "Kepala Subbagian Keuangan", "Staf Seksi Statistik Produksi", "Staf Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Kepala Seksi Statistik Pertambangan, Energi dan Konstruksi", "Statistisi Utama Pejabat Fungsional", "Kepala Seksi Statistik Industri", "Kepala Inspektorat Wilayah II", "Kepala BPS Kabupaten/Kotamadya", "Lektor Kepala Pejabat Fungsional STIS", "Kepala Politeknik Statistika STIS", "Koordinator Statistik Kecamatan KSK", "Kepala Bagian Administrasi Keuangan", "Kepala Seksi Dokumentasi Statistik", "Kepala Bagian Pencetakan, Arsip, dan Ekspedisi", "Staf Seksi Statistik Pertambangan, Energi dan Konstruksi", "Pengelola Barang Milik Negara Subbagian Rumah Tangga", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Sosial", "Kepala Inspektorat Wilayah III", "Kepala Direktorat Statistik Ketahanan Sosial", "Staf Seksi Penyiapan Statistik Demografi", "Staf Subbagian Kepegawaian", "Kepala Pusat Pendidikan dan Pelatihan", "Kepala Subdirektorat Neraca Rumah Tangga dan Institusi Nirlaba", "Kepala Subdirektorat Rujukan Statistik", "Kepala Biro Bina Program", "Staf Subbagian Administrasi Akademik dan Kerjasama", "Staf Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Distribusi dan Jasa", "Kepala Seksi Evaluasi dan Pelaporan Statistik Pertambangan dan Energi", "Kepala Subdirektorat Statistik Industri Kecil dan Rumah Tangga", "Penugasan Statistisi Pertama Seksi Statistik Industri", "Penugasan Statistisi Pelaksana Seksi Statistik Sosial", "Kepala Biro Umum", "Staf Subbagian Umum", "Analis Monitoring dan Evaluasi Program Subbagian Evaluasi dan Pelaporan", "Kepala Seksi Statistik Keuangan Dan Harga Produsen", "Statistisi Penyelia Seksi Neraca Pertanian", "Staf Subbagian Urusan Dalam", "Kepala Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Kepala Subbagian Statistik Lingkungan Hidup", "Kepala Seksi Evaluasi dan Pelaporan Statistik Demografi", "Kepala Subdirektorat Statistik Industri Besar dan Sedang", "Kepala Subdirektorat Neraca Pemerintah dan Badan Usaha", "Staf Seksi Penyiapan Statistik Kesehatan dan Perumahan", "Kepala Subdirektorat Statistik Pendidikan dan Kesejahteraan Sosial", "Pranata Komputer Utama Pejabat Fungsional", "Kepala Subdirektorat Statistik Transportasi", "Kepala Subdirektorat Statistik Lingkungan Hidup", "Staf Subbagian Pertimbangan dan Dokumentasi Hukum", "Staf Seksi Statistik Kesejahteraan Rakyat", "Kepala Seksi Neraca Konsumsi", "Widyaiswara Utama Tenaga Fungsional", "Pranata Komputer Pertama Diperbantukan/Dipekerjakan", "Staf Seksi Statistik Ketahanan Sosial", "Statistisi Madya BPS Propinsi", "Peltu Seksi Statistik Distribusi", "Kepala Bidang Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Perdagangan Dalam Negeri", "Pengelola Surat dan Dokumen Subbagian Kepegawaian & Hukum", "Kepala Subdirektorat Statistik Pertambangan dan Energi", "Kepala Direktorat Statistik Keuangan, Teknologi Informasi, dan Pariwisata", "Kepala BPS Kotamadya", "Staf Subbidang Penyelenggaraan Pendidikan dan Pelatihan Teknis dan Fungsional", "Staf Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Kepala Subdirektorat Neraca Barang", "Staf Seksi Evaluasi dan Pelaporan Statistik Perdagangan Dalam Negeri", "Pranata Komputer Utama Direktorat Pengembangan Metodologi Sensus dan Survei", "Staf Seksi Pengelolaan Data dan Perangkat Lunak", "Staf Seksi Konsolidasi Neraca Jasa Regional", "Statistisi Madya Seksi Statistik Kependudukan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Industri Kecil dan Rumah Tangga", "Statistisi Madya Seksi Diseminasi dan Layanan Statistik", "Auditor Pertama Inspektorat Wilayah III", "Arsiparis Madya Pejabat Fungsional", "Kepala Subdirektorat Statistik Keuangan", "Lektor Kepala Wakil Direktur", "Statistisi Madya Pejabat Fungsional", "Kepala Subdirektorat Konsistensi Statistik", "Lektor Pejabat Fungsional STIS", "Staf Seksi Konsistensi Statistik Sosial", "Staf Seksi Analisis Statistik Ekonomi", "Staf Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Distribusi dan Jasa", "Auditor Madya Inspektorat Wilayah I", "Kepala Direktorat Neraca Produksi", "Kepala Subdirektorat Statistik Hortikultura", "Kepala Subbagian Pembuatan Daftar Gaji", "Statistisi Madya Seksi Analisis Statistik Lintas Sektor", "Kepala Subbagian Penyimpanan", "Kepala Bagian Administrasi Akademik dan Kemahasiswaan", "Kepala Subdirektorat Pengembangan Pemetaan Statistik", "Kepala Inspektorat Wilayah I", "Kepala Seksi Evaluasi dan Pelaporan Statistik Komunikasi dan Teknologi Informasi", "Kepala Subdirektorat Neraca Jasa", "Kepala Diperbantukan", "Staf Subbagian Protokol dan Persidangan", "Statistisi Muda Seksi Pengolahan Statistik Pertambangan dan Energi", "Kepala Seksi Jaringan dan Rujukan Statistik", "Statistisi Muda Seksi Penyiapan Statistik Pertambangan dan Energi", "Penugasan Statistisi Muda Seksi Neraca Wilayah dan Analisis Statistik", "Kepala Seksi Statistik Keuangan Pemerintah", "Staf Seksi Statistik Kerawanan Sosial Baru", "Statistisi Muda Seksi Statistik Sosial", "Kepala Seksi Pengolahan Statistik Konstruksi", "Kepala Seksi Pengolahan Statistik Harga Konsumen", "Staf Seksi Neraca Konsumsi", "Statistisi Penyelia BPS Kabupaten/Kota", "Statistisi Penyelia KSK", "Widyaiswara Muda Tenaga Fungsional", "Kepala Subbagian Rumah Tangga", "Statistisi Muda Seksi Statistik Produksi", "Kepala Seksi Penyiapan Statistik Tanaman Pangan", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Demografi", "Statistisi Muda Seksi Pengolahan Statistik Impor", "Staf Seksi Integrasi Pengolahan Data", "Kepala Subdirektorat Statistik Konstruksi", "Kepala Subdirektorat Statistik Pariwisata", "Kepala Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Teknis dan Fungsional", "Pranata Komputer Madya Pejabat Fungsional", "Penugasan Analis Kepegawaian Pelaksana Lanjutan Subbagian Kepegawaian & Hukum", "Kepala Subbagian Arsip dan Ekspedisi", "KSK", "Kepala Biro Hubungan Masyarakat dan Hukum", "Kepala Seksi Penyiapan Statistik Impor", "Kepala Bagian Penyusunan Rencana", "Staf Seksi Penyiapan Statistik Perdagangan Dalam Negeri", "Peltu Bidang Statistik Produksi", "Statistisi Madya Bidang Statistik Sosial", "Lektor Tenaga Fungsional STIS", "Kepala Subdirektorat Statistik Upah dan Pendapatan", "Statistisi Muda Seksi Diseminasi dan Layanan Statistik", "Statistisi Penyelia Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Kepala Seksi Neraca Produksi", "Kepala Direktorat Statistik Distribusi", "Staf Subbagian Pengadaan Barang/Jasa", "Statistisi Penyelia Seksi Statistik Distribusi", "Kepala Subdirektorat Statistik Perdagangan Dalam Negeri", "Staf Subbagian Penyusunan Program", "Lektor Wakil Direktur", "Auditor Pelaksana Lanjutan Inspektorat Wilayah I", "Kepala Subdirektorat Statistik Harga Produsen", "Kepala Seksi Statistik Badan Usaha dan Pasar Modal", "Staf Seksi Statistik Keuangan dan Harga Produsen", "Kepala Seksi Evaluasi dan Pelaporan Statistik Kesehatan dan Perumahan", "Kepala Direktorat Statistik Kependudukan dan Ketenagakerjaan", "Kepala Seksi Integrasi Pengolahan Data", "Kepala Subdirektorat Statistik Ketahanan Wilayah", "Statistisi Pelaksana Lanjutan Seksi Statistik Sosial", "Staf Seksi Neraca Wilayah dan Analisis Statistik", "Kepala Subbagian Umum", "Statistisi Muda KSK", "Kepala Subdirektorat Statistik Peternakan", "Kepala Direktorat Neraca Pengeluaran", "Kepala Subbagian Pengelolaan Opini Publik", "Lektor Kepala Politeknik Statistika STIS", "Statistisi Muda Seksi Neraca Konsumsi", "Kepala Seksi Neraca Badan Usaha Pemerintah", "Penugasan Statistisi Pertama Seksi Statistik Kependudukan", "Kepala Seksi Pengolahan Statistik Impor", "Kepala Bagian Inventarisasi, Penyimpanan, dan Penghapusan", "Kepala Seksi Statistik Mobilitas Tenaga Kerja", "Staf Seksi Penyiapan Statistik Tanaman Pangan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Ekspor", "Statistisi Muda Seksi Statistik Niaga dan Jasa", "Staf Subbagian Pemantauan dan Evaluasi Pengadaan", "Statistisi Penyelia Seksi Statistik Kependudukan", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Tanaman Pangan", "Kepala Seksi Indikator Statistik Ekonomi", "Kepala Seksi Konsolidasi Neraca Lintas Regional", "Kepala Seksi Statistik Keuangan dan Harga Produsen", "Kepala Seksi Pengembangan Muatan Peta Wilayah", "Staf Subbagian Tata Usaha Kepegawaian", "Kepala Subdirektorat Perpustakaan dan Dokumentasi Statistik", "Kepala Seksi Pengolahan Statistik Ketenagakerjaan", "Staf Seksi Pengolahan Statistik Hortikultura", "Staf Seksi Diseminasi dan Layanan Statistik", "Statistisi Muda Seksi Pengolahan Statistik Transportasi", "Kepala Seksi Neraca Modal dan Akumulasi", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Kepala Diperbantukan/Dipekerjakan", "Statistisi Muda Seksi Neraca Wilayah dan Analisis Statistik", "Widyaiswara Muda Pejabat Fungsional", "Statistisi Muda Seksi Pengolahan Statistik Pariwisata", "Pranata Komputer Penyelia Seksi Integrasi Pengolahan Data Statistik Produksi", "Kepala Subbagian Urusan Dalam dan Pemeliharaan Kantor", "Statistisi Muda Seksi Pengolahan Statistik Peternakan", "Kepala Seksi Pengolahan Statistik Hortikultura", "Pranata Komputer Muda Seksi Statistik Lembaga Keuangan", "Statistisi Muda Seksi Statistik Keuangan Dan Harga Produsen", "Pranata Komputer Muda Seksi Pengembangan Standardisasi Statistik", "Kepala Seksi Evaluasi dan Pelaporan Statistik Pariwisata", "Auditor Pertama Inspektorat Wilayah I", "Kepala Subdirektorat Statistik Perikanan", "Kepala Subbidang Penyelenggaraan Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Statistisi Penyelia Seksi Statistik Sosial", "Kepala Seksi Neraca Pertanian", "Pranata Komputer Madya Pejabat Fungsional STIS", "Kepala Seksi Indikator Statistik Sosial", "Kepala Seksi Penyiapan Statistik Perdagangan Dalam Negeri", "Kepala Subdirektorat Statistik Harga Konsumen", "Staf Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Sosial", "Kepala Subdirektorat Neraca Modal dan Luar Negeri", "Staf Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Produksi", "Penugasan Statistisi Pelaksana Seksi Diseminasi dan Layanan Statistik", "Penugasan Analis Kepegawaian Penyelia Subbagian Kepegawaian & Hukum", "Kepala Direktorat Analisis dan Pengembangan Statistik", "Staf Seksi Analisis Statistik Lintas Sektor", "Kepala Subbagian Kepegawaian & Hukum", "Statistisi Muda Seksi Statistik Distribusi", "Statistisi Muda Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Kepala Seksi Statistik Ketahanan Sosial", "Kepala Subbagian Perencanaan dan Informasi Kepegawaian", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Pertambangan dan Energi", "Statistisi Muda Seksi Penyiapan Statistik Peternakan", "Staf Subbagian Evaluasi dan Pelaporan Program", "Staf Seksi Statistik Pendapatan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Tanaman Perkebunan", "Kepala Subdirektorat Statistik Kerawanan Sosial", "Kepala Direktorat Pengembangan Metodologi Sensus dan Survei", "Kepala Subdirektorat Statistik Ketenagakerjaan", "Statistisi Muda Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Produksi", "Kepala Seksi Pengolahan Statistik Komunikasi dan Teknologi Informasi", "Kepala Subbagian Bina Program", "Kepala Seksi Pengolahan Statistik Harga Perdagangan Besar", "Kepala Subdirektorat Statistik Ekspor", "Bendahara Pengeluaran Daerah Subbagian Tata Usaha", "Kepala Seksi Penyiapan Statistik Industri Kecil dan Rumah Tangga", "Kepala Seksi Analisis Statistik Sosial", "Widyaiswara Madya Pejabat Fungsional", "Kepala Seksi Penyiapan Statistik Harga Pedesaan", "Kepala Subdirektorat Layanan dan Promosi Statistik", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Produksi", "Statistisi Penyelia Seksi Statistik Ketahanan Sosial", "Staf Seksi Jaringan dan Rujukan Statistik", "Arsiparis Muda Subbagian Pengadaan Barang/Jasa", "Kepala Direktorat Diseminasi Statistik", "Kepala Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Kepala Seksi Penyiapan Statistik Transportasi", "Kepala Subdirektorat Konsolidasi Neraca Pengeluaran", "Kepala Subdirektorat Statistik Rumah Tangga", "Kepala Seksi Penyiapan Statistik Konstruksi", "Kepala Seksi Neraca Arus Dana", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Komunikasi dan Teknologi Informasi", "Kepala Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Distribusi dan Jasa", "Kepala Subbidang Penyelenggara Pendidikan dan Pelatihan Teknis dan Fungsional", "Kepala Subdirektorat Pengembangan Kerangka Sampel", "Kepala Seksi Pengembangan Peta Statistik Wilayah Kecil", "Staf Subbagian Pengelolaan Opini Publik", "Kepala Seksi Evaluasi dan Pelaporan Statistik Transportasi", "Statistisi Muda Pejabat Fungsional", "Statistisi Pertama Seksi Statistik Produksi", "Kepala Seksi Statistik Kependudukan", "Kepala Subdirektorat Pengelolaan Teknologi Informasi", "Staf Seksi Pengembangan Klasifikasi Statistik", "Staf Seksi Statistik Kependudukan", "Penugasan Pranata Komputer Muda Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Penugasan Statistisi Muda Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Madya Seksi Statistik Niaga dan Jasa", "Kepala Seksi Penyiapan Statistik Ketenagakerjaan", "Analis Kepegawaian Muda Subbagian Penilaian dan Pengembangan Jabatan Fungsional", "Pranata Keuangan APBN Penyelia Subbagian Perbendaharaan I", "Staf Seksi Evaluasi dan Pelaporan Statistik Ekspor", "Kepala Seksi Penyiapan Statistik Perikanan", "Kepala Subbagian Layanan Pengadaan", "Kepala Seksi Pengembangan Standardisasi Statistik", "Staf Seksi Penyiapan Statistik Impor", "Kepala Seksi Pengolahan Statistik Harga Produsen", "Statistisi Muda Seksi Konsistensi Statistik Ekonomi", "Pranata Komputer Muda Seksi Layanan Jaringan Komunikasi Data");
$jabatan2 = array("Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Ekspor", "Statistisi Muda Seksi Statistik Kerawanan Sosial Baru", "Statistisi Muda Seksi Pengolahan Statistik Kesehatan dan Perumahan", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Impor", "Kepala Seksi Statistik Kerawanan Sosial Baru", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Perikanan", "Staf Seksi Pengolahan Statistik Kesehatan dan Perumahan", "Kepala Seksi Integrasi Pengolahan Data Statistik Sosial", "Kepala Seksi Penyiapan Statistik Peternakan", "Pranata Komputer Muda Seksi Integrasi Pengolahan Data Statistik Sosial", "Pranata Komputer Muda Seksi Pemeliharaan Jaringan Komunikasi Data", "Kepala Seksi Analisis Statistik Lintas Sektor", "Statistisi Madya Bidang Statistik Produksi", "Penugasan Statistisi Muda Seksi Statistik Produksi", "Statistisi Pertama Seksi Statistik Distribusi", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Ketahanan Sosial", "Statistisi Muda Seksi Analisis Statistik Lintas Sektor", "Penyelenggara Program Pendidikan dan Pelatihan Subbidang Penyelenggara Pendidikan dan Pelatihan Teknis dan Fungsional", "Kepala Subbagian Administrasi Kemahasiswaan", "Staf Subbagian Rencana Kegiatan Teknis Statistik", "Statistisi Muda Diperbantukan/Dipekerjakan", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Rumah Tangga", "Statistisi Muda Seksi Pengolahan Statistik Konstruksi", "Kepala Direktorat Statistik Harga", "Kepala Subdirektorat Analisis Statistik", "Kepala Subdirektorat Konsolidasi Neraca Produksi Regional", "Staf Seksi Evaluasi dan Pelaporan Statistik Industri Kecil dan Rumah Tangga", "Kepala Subdirektorat Statistik Tanaman Pangan", "Kepala Seksi Penyiapan Statistik Tanaman Perkebunan", "Statistisi Madya Bidang Statistik Distribusi", "Kepala Subdirektorat Indikator Statistik", "Statistisi Pelaksana KSK", "Staf Seksi Pengolahan Statistik Rumah Tangga", "Statistisi Madya Seksi Statistik Keuangan Dan Harga Produsen", "Statistisi Muda Seksi Statistik Kesejahteraan Rakyat", "Statistisi Muda Seksi Statistik Ketahanan Sosial", "Statistisi Muda Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Kepala Subbagian Tata Usaha Kepegawaian", "Kepala Seksi Statistik Politik", "Analis Kepegawaian Madya Pejabat Fungsional", "Kepala Subbagian Perbendaharaan I", "Kepala Subdirektorat Statistik Kehutanan", "Staf Seksi Neraca Modal dan Akumulasi", "Kepala Subdirektorat Jaringan Komunikasi Data", "Kepala Subdirektorat Statistik Komunikasi dan Teknologi Informasi", "Kepala Bagian Kerja Sama, Protokol, dan Penyiapan Materi Pimpinan", "Widyaiswara Madya Diperbantukan/Dipekerjakan", "Penugasan Statistisi Pelaksana Lanjutan Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Penyiapan Statistik Pendidikan dan Kesejahteraan Sosial", "Penerjemah Madya Pejabat Fungsional", "Asisten Ahli Pejabat Fungsional STIS", "Mantis KSK", "Kepala Subdirektorat Pengembangan Desain Sensus dan Survei", "Kepala Seksi Pengembangan Klasifikasi Statistik", "Kepala Subdirektorat Statistik Mobilitas Penduduk dan Tenaga Kerja", "Statistisi Madya Seksi Statistik Industri", "Pranata Komputer Madya Seksi Jaringan dan Rujukan Statistik", "Statistisi Muda Seksi Statistik Pertanian", "Statistisi Muda Seksi Indikator Statistik Lintas Sektor", "Kepala Subbagian Pengadaan Barang/Jasa", "Statistisi Madya Seksi Neraca Konsumsi", "Staf Subbidang Penyelenggara Pendidikan dan Pelatihan Teknis dan Fungsional", "Kepala Seksi Jasa Perpustakaan", "Pranata Komputer Muda Seksi Integrasi Pengolahan Data", "Kepala Seksi Statistik Pertanian", "Statistisi Pertama Seksi Neraca Wilayah dan Analisis Statistik", " Seksi Jaringan dan Rujukan Statistik", " Seksi Statistik Kependudukan", "Kepala Subdirektorat Konsolidasi Neraca Produksi Nasional", "Statistisi Madya Seksi Statistik Pertanian", "Kepala Seksi Evaluasi dan Pelaporan Statistik Rumah Tangga", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Peternakan", "Statistisi Madya Seksi Statistik Ketahanan Sosial", "Kepala Seksi Neraca Pertambangan, Energi, dan Konstruksi", "Penugasan Statistisi Pelaksana Seksi Neraca Wilayah dan Analisis Statistik", "Kepala Seksi Statistik Pendapatan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Harga Pedesaan", "Peltu Seksi Statistik Sosial", "Staf Inspektorat Wilayah II", "Staf Seksi Statistik Harga Konsumen dan Harga", "Peneliti Muda Diperbantukan/Dipekerjakan", "Auditor Madya Inspektorat Wilayah III", "Kepala Subbagian Monitoring Program", "Kepala Seksi Penyiapan Statistik Ekspor", "Kepala Seksi Penyiapan Statistik Harga Produsen", "Statistisi Muda Seksi Statistik Kependudukan", "Kepala Subbagian Hubungan Media Massa", "Statistisi Muda Seksi Neraca Produksi", "Penugasan Analis Kepegawaian Pelaksana Lanjutan Subbagian Tata Usaha", "Kepala Seksi Statistik Lingkungan Hidup Binaan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Ketahanan Wilayah", "Statistisi Muda Pensiun/Meninggal/Berhenti", "Statistisi Penyelia Seksi Neraca Wilayah dan Analisis Statistik", "Statistisi Madya Subbagian Manajemen Perubahan", "Asisten Ahli Tenaga Fungsional STIS", "Analis Kepegawaian Muda Subbagian Tata Usaha Umum", "Staf Subbagian Mutasi Pegawai III", "Kepala Bagian Penyusunan Anggaran", "Staf Subbagian Bina Program", "Statistisi Madya Seksi Statistik Pertambangan, Energi dan Konstruksi", "Pranata Komputer Muda Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Pengolahan Statistik Pertambangan dan Energi", "Staf Seksi Neraca Pertanian", "Staf Seksi Evaluasi dan Pelaporan Statistik Harga Perdagangan Besar", " Seksi Pengolahan Statistik Impor", "Statistisi Muda Seksi Konsolidasi Neraca Produksi Triwulanan", "Staf Subbagian Tata Usaha dan Rumah Tangga", "Statistisi Muda Bidang Statistik Produksi", "Statistisi Madya Seksi Statistik Kesejahteraan Rakyat", "Penugasan Statistisi Pertama Seksi Statistik Distribusi", "Staf Seksi Integrasi Pengolahan dan Diseminas", "Staf Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Kepala Subdirektorat Statistik Demografi", "Kepala Subdirektorat Pengembangan Basis Data", "Kepala Seksi Statistik Upah", "Staf Seksi Promosi Statistik", "Kepala Subdirektorat Statistik Kesehatan dan Perumahan", "Kepala Subbagian Penyusunan Anggaran II", "Statistisi Muda Seksi Statistik Pertambangan, Energi dan Konstruksi", "Staf Seksi Konsolidasi Neraca Institusi", "Pranata Komputer Muda Seksi Pengelolaan Data dan Perangkat Lunak", "Pranata Komputer Muda Seksi Statistik Sosial", "Penugasan Statistisi Pelaksana Seksi Integrasi Pengolahan dan Diseminasi Statistik", " Subbagian Tata Usaha dan Rumah Tangga", "Kepala Seksi Evaluasi dan Pelaporan Statistik Ketenagakerjaan", "Pranata Komputer Madya Direktorat Diseminasi Statistik", "Staf Seksi Pengolahan Statistik Demografi", "Analis Pengelolaan Keuangan APBN Ahli Madya Subbagian Tata Usaha Umum", "Pengelola Pengadaan Barang dan Jasa Ahli Muda Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Teknis dan Fungsional", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Kerawanan Sosial Baru", "Staf Seksi Evaluasi dan Pelaporan Statistik Rumah Tangga", "Staf Seksi Penyiapan Statistik Hortikultura", "Kepala Seksi Pengolahan Statistik Harga Pedesaan", "Statistisi Muda Seksi Neraca Pertambangan, Energi, dan Konstruksi", "Staf Subbagian Perencanaan dan Informasi Kepegawaian", "Kepala Seksi Statistik Lembaga Keuangan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Harga Produsen", "Statistisi Madya Bidang Neraca Wilayah dan Analisis Statistik", "Staf Seksi Statistik Keuangan Dan Harga Produsen", "Statistisi Muda Seksi Pengolahan Statistik Harga Produsen", "Statistisi Madya Seksi Neraca Produksi", "Staf Subbidang Penyelenggaraan Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Kepala Seksi Indikator Statistik Lintas Sektor", "Statistisi Muda Seksi Penyiapan Statistik Transportasi", "Staf Subbagian Administrasi Kemahasiswaan", "Statistisi Muda Seksi Jaringan dan Rujukan Statistik", "Statistisi Pertama Seksi Statistik Sosial", "Statistisi Madya Seksi Pengolahan Statistik Pendidikan dan Kesejahteraan Sosial", "Pranata Komputer Muda Seksi Statistik Produksi", "Staf Seksi Neraca Badan Usaha Swasta", "Kepala Seksi Pemantauan dan Evaluasi Publikasi", "Kepala Seksi Penyiapan Statistik Pendidikan dan Kesejahteraan Sosial", "Pranata Humas Madya Subbagian Sosialisasi Kegiatan Statistik", "Kepala Seksi Kompilasi Laporan Statistik", "Pranata Komputer Muda Seksi Jaringan dan Rujukan Statistik", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Harga Produsen", "Kepala Seksi Neraca Pengeluaran Rumah Tangga", "Statistisi Madya Direktorat Statistik Tanaman Pangan, Hortikultura, dan Perkebunan", "Statistisi Muda BPS Kabupaten/Kota", "Kepala Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Sosial", "Kepala Seksi Evaluasi dan Pelaporan Statistik Konstruksi", "Staf Seksi Evaluasi dan Pelaporan Statistik Pariwisata", "Kepala Seksi Neraca Usaha Rumah Tangga", "Staf Seksi Pengembangan Basis Data Statistik", "Kepala Seksi Integrasi Pengolahan Data Statistik Produksi", "Kepala Subbagian Evaluasi dan Pelaporan Program", "Statistisi Muda Seksi Statistik Pertanian, Industri Kecil dan Kerajinan Rumah Tangga", "Kepala Subbagian Penyusunan Anggaran I", "Penugasan Statistisi Madya Bidang Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Muda Seksi Konsolidasi Neraca Institusi", "Statistisi Muda Seksi Integrasi Pengolahan Data", "Statistisi Muda Seksi Neraca Industri", "Statistisi Muda Seksi Penyiapan Statistik Impor", "Penugasan Statistisi Pertama Seksi Neraca Produksi", "Kepala Seksi Pengembangan Peta Wilayah", "Auditor Muda Inspektorat Wilayah II", "Staf Seksi Pengolahan Statistik Harga Pedesaan", "Kepala Seksi Evaluasi dan Pelaporan Statistik Peternakan", "Kepala Seksi Neraca Bank, Lembaga Keuangan Bukan Bank, dan Jasa Lainnya", "Pengelola Barang Milik Negara Subbagian Tata Usaha", "Perencana Madya Pejabat Fungsional", "Statistisi Pertama Seksi Statistik Pertanian", "Kepala Seksi Pengolahan Statistik Tanaman Perkebunan", "Kepala Subbagian Manajemen Perubahan", "Kepala Subbagian Keterpaduan Transformasi", "Kepala Bagian Transformasi Statistik", "Statistisi Muda Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Sosial", "Staf Seksi Pengolahan Statistik Tanaman Pangan", "Kepala Seksi Rekomendasi Kegiatan Statistik", "Kepala Seksi Statistik Mobilitas Penduduk", "Kepala Seksi Pengolahan Statistik Industri Kecil dan Rumah Tangga", "Statistisi Muda Bidang Neraca Wilayah dan Analisis Statistik", "Kepala Seksi Konsolidasi Neraca Pengeluaran Regional", "Penata Laporan Keuangan Subbagian Keuangan", "Peltu Seksi Statistik Produksi", "Penata Laporan Keuangan Subbagian Pelaporan Perbendaharaan", "Statistisi Pertama Seksi Statistik Ketahanan Sosial", "Staf Subbagian Keuangan", "Penugasan Statistisi Pertama Seksi Statistik Kesejahteraan Rakyat", "Staf Subbagian Penyiapan Materi Pimpinan", "Pranata Komputer Muda Seksi Pengembangan Basis Data Statistik", "Staf Seksi Neraca Perdagangan, Hotel, dan Restoran", "Statistisi Muda Seksi Pengelolaan Sistem Informasi Rujukan Statistik", "Kepala Seksi Konsolidasi Neraca Institusi", "Kepala Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Produksi", "Kepala Seksi Penyiapan Statistik Hortikultura", "Statistisi Muda Seksi Statistik Lembaga Keuangan", "Statistisi Muda Seksi Statistik Keuangan Pemerintah", "Pranata Komputer Muda Seksi Integrasi Pengolahan Data Statistik Distribusi dan Jasa", "Statistisi Muda Seksi Penyiapan Statistik Ketenagakerjaan", "Statistisi Muda Seksi Pengolahan Statistik Ketenagakerjaan", "Kepala Seksi Pengolahan Statistik Perdagangan Dalam Negeri", "Penugasan Pranata Komputer Pertama Seksi Integrasi Pengolahan Data", "Statistisi Muda Subbagian Administrasi Akademik dan Kerjasama", "Kepala Seksi Promosi Statistik", "Staf Seksi Penyiapan Statistik Kehutanan", "Penugasan Statistisi Pelaksana Seksi Statistik Pertambangan, Energi dan Konstruksi", "Statistisi Muda Seksi Konsolidasi Neraca Pengeluaran Regional", "Penugasan Statistisi Pertama Seksi Penyiapan Statistik Ketenagakerjaan", "Kepala Seksi Neraca Transportasi dan Komunikasi", "Peltu Seksi Integrasi Pengolahan Data", "Statistisi Muda Seksi Pengembangan Standardisasi Statistik", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Ketenagakerjaan", "Kepala Seksi Penyiapan Statistik Kesehatan dan Perumahan", "Penugasan Seksi Neraca Wilayah dan Analisis Statistik", " Seksi Evaluasi dan Pelaporan Statistik Demografi", "Kepala Subbagian Keterpaduan Rencana", "Kepala Seksi Analisis Statistik Ekonomi", "Pranata Komputer Muda Seksi Pengembangan Sistem Integrasi Statistik", "Statistisi Muda Seksi Konsistensi Statistik Sosial", "Kepala Subbagian Transformasi Proses Bisnis", "Statistisi Muda Seksi Neraca Transportasi dan Komunikasi", "Statistisi Muda Seksi Statistik Industri", " Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Statistisi Muda Seksi Neraca Bank, Lembaga Keuangan Bukan Bank, dan Jasa Lainnya", "Kepala Subbagian Rencana Kegiatan Teknis Statistik", "Kepala Subbagian Penyusunan Program", "Statistisi Muda Seksi Pengembangan Peta Wilayah", "Staf Seksi Pengelolaan Sistem Informasi Rujukan Statistik", "Statistisi Pertama Seksi Statistik Niaga dan Jasa", "Pelaksana Layanan Pengadaan Subbagian Pengadaan Barang/Jasa", "Statistisi Pertama Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Muda Seksi Penyiapan Statistik Hortikultura", "Kepala Seksi Pengolahan Statistik Rumah Tangga", "Statistisi Muda Seksi Penyiapan Statistik Kesehatan dan Perumahan", "Kepala Subbagian Keterpaduan Anggaran", "Staf Seksi Pemantauan dan Evaluasi Publikasi", "Kepala Seksi Pengolahan Statistik Kesehatan dan Perumahan", "Staf Seksi Penyiapan Statistik Tanaman Perkebunan", "Statistisi Pertama KSK", "Penugasan Statistisi Pelaksana Pemula Seksi Statistik Produksi", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Pendidikan dan Kesejahteraan Sosial", "Kepala Seksi Penyiapan Statistik Demografi", "Statistisi Pertama Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar", "Staf Inspektorat Wilayah III", "Statistisi Muda Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Distribusi dan Jasa", "Pranata Keuangan APBN Penyelia Subbagian Keuangan", " Seksi Neraca Wilayah dan Analisis Statistik", "Statistisi Muda Seksi Statistik Upah", "Penugasan Statistisi Pertama Seksi Statistik Sosial", "Staf Subbagian Mutasi Pegawai II", "Statistisi Muda Seksi Konsultasi Statistik", "Statistisi Muda Seksi Neraca Perdagangan, Hotel, dan Restoran", " Seksi Statistik Produksi", " Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Kepala Seksi Pemeliharaan Jaringan Komunikasi Data", "Peltu Pensiun/Meninggal/Berhenti", "Statistisi Muda Seksi Pengolahan Statistik Komunikasi dan Teknologi Informasi", "Seksi Statistik Industri", "Penerjemah Muda Subbagian Kerjasama dan Hubungan Kelembagaan", "Kepala Seksi Pengemasan Informasi Statistik", "Statistisi Muda Seksi Pengolahan Statistik Harga Konsumen", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Pariwisata", "Statistisi Pelaksana Seksi Neraca Wilayah dan Analisis Statistik", "Koordinator Statistik Kecamatan ", "Penugasan Pranata Komputer Pertama Seksi Pengembangan Jaringan Komunikasi Data", "Pranata Komputer Muda Seksi Pengembangan Basis Data Manajemen", "Penugasan Statistisi Pertama Seksi Statistik Ketahanan Sosial", "Statistisi Muda Seksi Pengolahan Statistik Demografi", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Kesehatan dan Perumahan", "Kepala Seksi Konsistensi Statistik Ekonomi", " Subbagian Administrasi Kemahasiswaan", "Pranata Komputer Muda Seksi Perekaman Data", " Seksi Statistik Niaga dan Jasa", "Penugasan Statistisi Pertama Seksi Neraca Wilayah dan Analisis Statistik", "Staf Seksi Integrasi Pengolahan Data Statistik Sosial", "Statistisi Muda Seksi Statistik Lingkungan Hidup Sosial", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Harga Konsumen", "Analis Anggaran Ahli Muda Subbagian Keterpaduan Transformasi", "Staf Seksi Konsolidasi Neraca Sosial Ekonomi", "Staf Seksi Statistik Upah", "Pranata Humas Muda Subbagian Pengelolaan Opini Publik", "Staf Subbagian Layanan Pengadaan", "Pranata Komputer Muda Seksi Pengelolaan Sistem Informasi Rujukan Statistik", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Transportasi", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Impor", "Staf Seksi Konsultasi Statistik", "Pranata Komputer Pertama Seksi Perekaman Data", " Seksi Statistik Sosial", "Peltu Seksi Neraca Wilayah dan Analisis Statistik", "Statistisi Muda Seksi Pengolahan Statistik Industri Kecil dan Rumah Tangga", "Pranata Komputer Muda Seksi Pengemasan Informasi Statistik", "Statistisi Muda Seksi Statistik Badan Usaha dan Pasar Modal", " Seksi Statistik Kesejahteraan Rakyat", "Penugasan Statistisi Muda Seksi Statistik Sosial", "Statistisi Pertama Seksi Statistik Kesejahteraan Rakyat", "Statistisi Muda Seksi Statistik Lingkungan Hidup Binaan", "Kepala Seksi Pengembangan Jaringan Komunikasi Data", "Statistisi Pertama Seksi Analisis Statistik Lintas Sektor", "Kepala Seksi Pengolahan Statistik Tanaman Pangan", "Statistisi Muda Seksi Neraca Modal dan Akumulasi", "Statistisi Pertama Seksi Konsolidasi Neraca Produksi Triwulanan", "Statistisi Muda Subbagian Keterpaduan Transformasi", "Kepala Seksi Neraca Luar Negeri", "Statistisi Pertama Seksi Statistik Kemiskinan", "Statistisi Muda Subbagian Penyiapan Materi Pimpinan", "Kepala Seksi Integrasi Pengolahan Data Statistik Distribusi dan Jasa", "Staf Seksi Perekaman Data", "Penugasan Statistisi Pertama Seksi Pengolahan Statistik Ketahanan Wilayah", "Statistisi Pertama Seksi Konsolidasi Neraca Jasa Regional", "Kepala Seksi Layanan Jaringan Komunikasi Data", "Pranata Komputer Muda Seksi Pengembangan Jaringan Komunikasi Data", " Seksi Penyiapan Statistik Demografi", "Penugasan Statistisi Pelaksana Lanjutan Seksi Pengolahan Statistik Rumah Tangga", "Pranata Komputer Pertama Seksi Pengelolaan Data dan Perangkat Lunak", "Pranata Komputer Pertama Seksi Pengelolaan Perangkat Keras", "Staf Subbagian Keterpaduan Rencana", "Pranata Komputer Pertama Seksi Integrasi Pengolahan Data Statistik Produksi", "Statistisi Pertama Seksi Indikator Statistik Sosial", "Pranata Komputer Muda Seksi Pengelolaan Perangkat Keras", " Subbagian Penghapusan", "Staf Seksi Pengolahan Statistik Harga Produsen", "Kepala Seksi Konsolidasi Neraca Barang Regional", "Staf Seksi Penyiapan Statistik Ketenagakerjaan", "Statistisi Pertama Seksi Konsolidasi Neraca Lintas Sektor", "Statistisi Pertama Seksi Integrasi Pengolahan Data", "Staf Seksi Statistik Lingkungan Hidup Binaan", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Industri Besar dan Sedang", "Penugasan Statistisi Pelaksana Lanjutan Seksi Penyiapan Statistik Peternakan", "Penugasan Pranata Komputer Pertama Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Muda Seksi Pengolahan Statistik Ekspor", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Harga Pedesaan", "Statistisi Pertama Seksi Neraca Produksi", "Perencana Muda Subbagian Keterpaduan Rencana", "Analis Pengelolaan Keuangan APBN Ahli Muda Inspektorat Wilayah II", "Statistisi Muda Seksi Konsolidasi Neraca Sosial Ekonomi", "Pranata Komputer Muda Seksi Jasa Perpustakaan", " Seksi Konsistensi Statistik Ekonomi", "Pengelola Pengadaan Barang dan Jasa Ahli Muda Subbagian Pemantauan dan Evaluasi Pengadaan", " Seksi Penyiapan Statistik Harga Pedesaan", "Statistisi Pertama Seksi Analisis Statistik Sosial");
$jabatan3 = array("Perencana Muda Subbagian Rencana Kegiatan Teknis Statistik", "Kepala Seksi Konsolidasi Neraca Produksi Triwulanan", "Pranata Komputer Pertama Seksi Integrasi Pengolahan Data Statistik Sosial", "Pranata Komputer Pertama Seksi Pengelolaan Sistem Informasi Rujukan Statistik", "Staf Seksi Evaluasi dan Pelaporan Statistik Perikanan", "Statistisi Pertama Seksi Pengembangan Model Statistik Sosial", "Statistisi Pertama Seksi Penyiapan Statistik Perdagangan Dalam Negeri", "Kepala Subbagian Administrasi Akademik dan Kerjasama", "Statistisi Muda Seksi Statistik Kemiskinan", "Penugasan Statistisi Pertama Seksi Pengolahan Statistik Konstruksi", "Statistisi Muda Seksi Statistik Mobilitas Tenaga Kerja", "Staf Seksi Pengolahan Statistik Harga Konsumen", "Statistisi Pertama Seksi Konsultasi Statistik", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Pariwisata", "Kepala Seksi Evaluasi dan Pelaporan Statistik Tanaman Pangan", "Pengembang Teknologi Pembelajaran Ahli Muda Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Prajabatan dan Kepemimpinan", "Kepala Seksi Statistik Kemiskinan", "Statistisi Pertama Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Sosial", "Statistisi Muda Seksi Pengembangan Klasifikasi Statistik", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Ekspor", "Statistisi Muda Seksi Promosi Statistik", "Pengelola Pengadaan Barang dan Jasa Ahli Muda Subbagian Layanan Pengadaan", "Statistisi Muda Seksi Pengembangan Model Statistik Sosial", "Staf Seksi Pengembangan Model Statistik Sosial", "Statistisi Pertama Seksi Statistik Kependudukan", "Penugasan Statistisi Pertama Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Pertama Seksi Neraca Konsumsi", "Statistisi Pertama Subbagian Transformasi Proses Bisnis", "Statistisi Pertama Seksi Penyiapan Statistik Konstruksi", "Statistisi Muda Seksi Neraca Badan Usaha Swasta", "Statistisi Muda Subbagian Rencana Kegiatan Teknis Statistik", "Statistisi Pertama Seksi Statistik Pertambangan, Energi dan Konstruksi", "Statistisi Pertama Seksi Statistik Kesejahteraan rakyat", "Statistisi Muda Bidang Statistik Sosial", "Statistisi Muda Seksi Statistik Industri Besar dan Sedang", "Statistisi Muda Seksi Statistik Politik", "Statistisi Pertama Seksi Diseminasi dan Layanan Statistik", "Statistisi Muda Subbagian Keterpaduan Rencana", "Staf Subbagian Pengembangan Pegawai", "Perencana Muda Subbagian Rencana Kegiatan Non Teknis Statistik", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Tanaman Perkebunan", "Pranata Komputer Pertama Seksi Jaringan dan Rujukan Statistik", " Subbagian Tata Usaha", "Statistisi Pertama Seksi Penyiapan Statistik Rumah Tangga", "Statistisi Muda Bidang Statistik Distribusi", "Pranata Komputer Pertama Seksi Pemeliharaan Jaringan Komunikasi Data", "Auditor Pertama Inspektorat Wilayah II", "Kepala Seksi Penyiapan Statistik Pariwisata", " Seksi Statistik Distribusi", "Statistisi Pertama Seksi Statistik Keuangan Dan Harga Produsen", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Harga Konsumen", "Pranata Komputer Pertama Seksi Pengembangan Basis Data Statistik", "Pelaksana Monitoring Anggaran Subbagian Bina Program", "Pranata Komputer Pertama Seksi Pengembangan Jaringan Komunikasi Data", "Statistisi Muda Seksi Neraca Luar Negeri", "Staf Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Teknis dan Fungsional", " Subbagian Tata Usaha Umum", "Statistisi Pertama Seksi Pengolahan Statistik Pertambangan dan Energi", "Pranata Komputer Pertama Seksi Integrasi Pengolahan Data Statistik Distribusi dan Jasa", "Staf Subbagian Monitoring Program", "Staf Seksi Jasa Perpustakaan", "Statistisi Pertama Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Produksi", "Staf Seksi Pengelolaan Perangkat Keras", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Tanaman Perkebunan", "Statistisi Pertama Seksi Pengembangan Model Statistik Ekonomi", "Analis Kepegawaian Pertama Subbagian Mutasi Pegawai III", "Statistisi Pertama Seksi Pengemasan Informasi Statistik", "Statistisi Pertama Seksi Inventarisasi Kegiatan dan Produk Statistik", "Statistisi Muda Seksi Indikator Statistik Sosial", "Statistisi Pertama Seksi Pengolahan Statistik Perikanan", "Staf Subbagian Manajemen Perubahan", "Staf Subbagian Keterpaduan Transformasi", "Statistisi Muda Seksi Neraca Institusi Nirlaba", " Seksi Evaluasi dan Pelaporan Statistik Perdagangan Dalam Negeri", "Staf Subbagian Perbendaharaan II", "Analis Pengelolaan Keuangan APBN Ahli Muda Seksi Perekaman Data", "Pranata Komputer Pertama Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Statistisi Pertama Seksi Neraca Pertambangan, Energi, dan Konstruksi", "Pranata Komputer Pertama Seksi Layanan Jaringan Komunikasi Data", "Pranata Komputer Pertama Seksi Pengembangan Basis Data Manajemen", "Pengelola Unit Layanan Pengadaan Subbagian Pengadaan Barang/Jasa", "Analis Anggaran Ahli Muda Subbagian Transformasi Proses Bisnis", "Statistisi Muda Seksi Rekomendasi Kegiatan Statistik", "Statistisi Pertama Seksi Neraca Badan Usaha Pemerintah", "Statistisi Pertama Seksi Penyiapan Statistik Pertambangan dan Energi", "Statistisi Pertama Subbagian Tata Usaha", "Statistisi Pertama Seksi Penyiapan Statistik Tanaman Pangan", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Pendidikan dan Kesejahteraan Sosial", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Harga Pedesaan", "Penugasan Pranata Komputer Pelaksana Lanjutan Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Statistik Lingkungan Hidup Sosial", "Statistisi Pertama Seksi Konsolidasi Neraca Institusi", "Statistisi Pertama Seksi Neraca Usaha Rumah Tangga", "Statistisi Pertama Seksi Neraca Pertanian", "Penata Laksana Barang Penyelia Subbagian Inventarisasi", "Staf Seksi Neraca Pemerintahan Umum", "Statistisi Pertama Seksi Statistik Industri", "Statistisi Pertama Seksi Penyiapan Statistik Harga Konsumen", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Kesehatan dan Perumahan", "Penugasan Statistisi Pertama Seksi Pengolahan Statistik Tanaman Pangan", "Staf Seksi Neraca Bank, Lembaga Keuangan Bukan Bank, dan Jasa Lainnya", "Staf Seksi Integrasi Pengolahan Data Statistik Distribusi dan Jasa", "Penugasan Statistisi Pertama Seksi Konsistensi Statistik Sosial", "Penugasan Statistisi Pelaksana Lanjutan Seksi Pengolahan Statistik Ketenagakerjaan", "Penugasan Pranata Komputer Pertama Seksi Integrasi Pengolahan Data Statistik Produksi", "Statistisi Pertama Seksi Statistik Lingkungan Hidup Binaan", "Pranata Komputer Muda Seksi Inventarisasi Kegiatan dan Produk Statistik", "Statistisi Pertama Seksi Statistik Mobilitas Tenaga Kerja", "Staf Seksi Konsolidasi Neraca Pengeluaran Regional", "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Distribusi", "Staf Seksi Neraca Usaha Rumah Tangga", "Pranata Komputer Pertama Seksi Integrasi Pengolahan Data", " Seksi Evaluasi dan Pelaporan Statistik Harga Pedesaan", "Statistisi Pertama Seksi Pengolahan Statistik Harga Perdagangan Besar", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Harga Perdagangan Besar", "Statistisi Pertama Seksi Statistik Badan Usaha dan Pasar Modal", "Staf Seksi Neraca Industri", "Pranata Komputer Muda Subbagian Pemeliharaan Perlengkapan", "Statistisi Pertama Seksi Pengolahan Statistik Harga Konsumen", "Statistisi Pertama Seksi Pengolahan Statistik Perdagangan Dalam Negeri", "Statistisi Pertama Subbagian Keuangan", "Statistisi Pertama Seksi Jaringan dan Rujukan Statistik", "Statistisi Pertama Seksi Neraca Transportasi dan Komunikasi", "Staf Seksi Evaluasi dan Pelaporan Statistik Harga Konsumen", "Pranata Komputer Muda Subbagian Tata Usaha", "Statistisi Muda Seksi Neraca Arus Dana", "Statistisi Pertama Seksi Penyiapan Statistik Impor", "Pranata Komputer Pertama Seksi Neraca Pengeluaran Rumah Tangga", "Pranata Komputer Muda Subbagian Layanan Pengadaan", "Staf Subbagian Rumah Tangga", "Statistisi Pertama Seksi Konsolidasi Neraca Produksi Tahunan", "Statistisi Pertama Seksi Promosi Statistik", "Statistisi Pertama Seksi Indikator Statistik Ekonomi", "Pranata Komputer Pertama Seksi Rekomendasi Kegiatan Statistik", "Statistisi Muda Seksi Konsolidasi Neraca Lintas Sektor", "Staf Subbagian Evaluasi dan Pelaporan", "Penugasan Statistisi Pelaksana Lanjutan Seksi Evaluasi dan Pelaporan Statistik Demografi", "Penugasan Statistisi Pertama Seksi Analisis Statistik Lintas Sektor", "Penugasan Statistisi Pelaksana Seksi Statistik Produksi", "Statistisi Pertama Seksi Konsolidasi Neraca Barang Regional", "Statistisi Pertama Seksi Pengolahan Statistik Industri Kecil dan Rumah Tangga", " Seksi Pengembangan Basis Data Manajemen", "Pranata Komputer Muda Subbagian Tata Administrasi Jabatan Fungsional", "Staf Seksi Pengembangan Standardisasi Statistik", "Staf Seksi Pengemasan Informasi Statistik", "Statistisi Pertama Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Distribusi dan Jasa", "Staf Seksi Pengolahan Statistik Perikanan", "Penata Laksana Barang Mahir Subbagian Inventarisasi", "Penata Usaha Penyimpanan Barang Subbagian Tata Usaha", "Statistisi Pertama Subbidang Program dan Evaluasi Pendidikan dan Pelatihan Teknis dan Fungsional", "Statistisi Pertama Seksi Penyiapan Statistik Pendidikan dan Kesejahteraan Sosial", "Statistisi Pertama Seksi Statistik Mobilitas Penduduk", "Statistisi Pertama Seksi Pengolahan Statistik Tanaman Pangan", "Statistisi Pertama Seksi Neraca Luar Negeri", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Demografi", "Statistisi Muda Seksi Statistik Mobilitas Penduduk", "Pranata Komputer Muda Subbagian Urusan Dalam dan Pemeliharaan Kantor", "Pranata Komputer Pertama Seksi Pengembangan Sistem Integrasi Statistik", "Staf Subbagian Evaluasi dan Pelaporan Keuangan", "Statistisi Pertama Seksi Pengembangan Kerangka Sampel Survei Bidang Statistik Distribusi dan Jasa", "Statistisi Pertama Seksi Pengembangan Standardisasi Statistik", "Pranata Komputer Pertama Seksi Pemantauan dan Evaluasi Publikasi", "Pranata Komputer Pertama Seksi Pengemasan Informasi Statistik", "Penugasan Pranata Komputer Pertama Seksi Jaringan dan Rujukan Statistik", "Pranata Komputer Pertama Seksi Neraca Modal dan Akumulasi", "Statistisi Pertama Subbagian Rencana Kegiatan Teknis Statistik", "Pranata Humas Pertama Subbagian Pengelolaan Opini Publik", "Statistisi Pertama Seksi Pengolahan Statistik Komunikasi dan Teknologi Informasi", "Penugasan Statistisi Pertama Seksi Statistik Produksi", "Penata Naskah Publikasi Seksi Neraca Wilayah dan Analisis Statistik", "Statistisi Pertama Seksi Penyiapan Statistik Harga Perdagangan Besar", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Kehutanan", "Perencana Pertama Subbagian Rencana Kegiatan Teknis Statistik", "Staf Seksi Pengolahan Statistik Kehutanan", "Statistisi Pertama BPS Kabupaten/Kota", "Statistisi Muda Seksi Neraca Pengeluaran Rumah Tangga", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Pertambangan dan Energi", "Staf Seksi Penyiapan Statistik Komunikasi dan Teknologi Informasi", "Statistisi Muda Seksi Neraca Badan Usaha Pemerintah", "Staf Subbagian Penyusunan Anggaran I", "Statistisi Pertama Seksi Pengembangan Klasifikasi Statistik", "Subbagian Tata Usaha Kepegawaian", "Statistisi Pertama Seksi Analisis Statistik Ekonomi", "Statistisi Pertama Seksi Indikator Statistik Lintas Sektor", "Pranata Keuangan APBN Mahir Subbagian Perbendaharaan I", "Statistisi Pertama Seksi Konsistensi Statistik Ekonomi", "Statistisi Pertama Seksi Penyiapan Statistik Demografi", "Staf Subbagian Penghapusan", "Statistisi Pertama Seksi Statistik Keamanan", "Statistisi Pertama Seksi Neraca Bank, Lembaga Keuangan Bukan Bank, dan Jasa Lainnya", "Staf Subbagian Keterpaduan Anggaran", "Pranata Komputer Pertama Seksi Diseminasi dan Layanan Statistik", "Staf Subbagian Verifikasi Anggaran", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Ketahanan Wilayah", "Staf Seksi Evaluasi dan Pelaporan Statistik Komunikasi dan Teknologi Informasi", "Statistisi Pertama Seksi Pengolahan Statistik Harga Pedesaan", "Statistisi Pertama Seksi Konsolidasi Neraca Pengeluaran Regional", "Statistisi Pertama Seksi Neraca Institusi Nirlaba", "Statistisi Pertama Seksi Pengolahan Statistik Harga Produsen", "Staf Seksi Rekomendasi Kegiatan Statistik", "Statistisi Muda Seksi Evaluasi dan Pelaporan Statistik Harga Perdagangan Besar", "Staf Seksi Penyiapan Statistik Rumah Tangga", "Staf Subbagian Tata Administrasi Jabatan Fungsional", "Statistisi Muda Seksi Konsolidasi Neraca Produksi Tahunan", "Statistisi Pertama Subbagian Bina Program", "Analis Kepegawaian Pertama Subbagian Tata Usaha Kepegawaian", "Statistisi Pertama Seksi Pengolahan Statistik Transportasi", "Statistisi Pertama Seksi Pengolahan Statistik Demografi", "Staf Seksi Statistik Keuangan Pemerintah", "Staf Seksi Pengembangan Sistem Integrasi Statistik", "Statistisi Pertama Seksi Statistik Politik", "Statistisi Pertama Seksi Statistik Kerawanan Sosial Baru", "Staf Seksi Pembakuan dan Perwajahan Publikasi", "Pranata Keuangan APBN Mahir Subbagian Perbendaharaan II", "Penugasan Statistisi Pelaksana Lanjutan Seksi Neraca Konsumsi", "Pranata Komputer Pertama Subbagian Kerjasama dan Hubungan Kelembagaan", "Statistisi Pertama Seksi Pengolahan Statistik Ketenagakerjaan", "Statistisi Pertama Seksi Dokumentasi Statistik");
$jabatan4 = array("Statistisi Pertama Seksi Penyiapan Statistik Industri Besar dan Sedang", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Transportasi", "Analis Monitoring dan Evaluasi Program Subbagian Penyusunan Akuntabilitas", "Statistisi Pertama Seksi Neraca Industri", "Staf Seksi Kompilasi Laporan Statistik", "Pranata Komputer Pertama Seksi Pengembangan Muatan Peta Wilayah", "Penugasan Statistisi Pelaksana Lanjutan Seksi Neraca Wilayah dan Analisis Statistik", "Staf Seksi Pengolahan Statistik Transportasi", "Statistisi Pertama Bidang Neraca Wilayah dan Analisis Statistik", "Staf Subbagian Bantuan dan Penyuluhan Hukum", "Analis Pengelolaan Keuangan APBN Ahli Pertama Subbagian Evaluasi dan Pelaporan Keuangan", "Statistisi Pertama Seksi Konsolidasi Neraca Sosial Ekonomi", "Staf Subbagian Organisasi dan Tatalaksana", "Staf Seksi Evaluasi dan Pelaporan Statistik Peternakan", "Statistisi Pertama Seksi Pengolahan Statistik Industri Besar dan Sedang", "Pranata Komputer Pertama Seksi Pengelolaan Perpustakaan", "Statistisi Pertama Seksi Neraca Pengeluaran Rumah Tangga", "Arsiparis Muda Subbagian Inventarisasi", "Statistisi Pertama Seksi Pemeliharaan Jaringan Komunikasi Data", "Staf Subbagian Hubungan Media Massa", "Penugasan Statistisi Pelaksana Lanjutan Seksi Integrasi Pengolahan Data", "Statistisi Pertama Seksi Neraca Arus Dana", "Staf Seksi Evaluasi dan Pelaporan Statistik Hortikultura", "Statistisi Pertama Seksi Pengolahan Statistik Kesehatan dan Perumahan", " Subbagian Pengadaan Barang/Jasa", "Pranata Komputer Muda BPS Kabupaten/Kota", "Statistisi Pertama Seksi Penyiapan Statistik Industri Kecil dan Rumah Tangga", "Statistisi Pertama Seksi Neraca Badan Usaha Swasta", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Konstruksi", "Penyusun Bahan Perencanaan Program dan Kegiatan Subbagian Keterpaduan Transformasi", "Staf Seksi Indikator Statistik Ekonomi", "Statistisi Pertama Seksi Penyiapan Statistik Hortikultura", "Staf Seksi Neraca Luar Negeri", "Pengelola Unit Layanan Pengadaan Subbagian Layanan Pengadaan", "Analis Kepegawaian Pertama Subbagian Kepegawaian & Hukum", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Tanaman Pangan", "Staf Seksi Neraca Institusi Nirlaba", "Pranata Keuangan APBN Mahir Subbagian Tata Usaha Umum", "Staf Seksi Pengolahan Statistik Impor", "Penugasan Seksi Statistik Distribusi", " Subbagian Kesejahteraan dan Disiplin Pegawai", "Pranata Humas Pertama Subbagian Hubungan Media Massa", "Peltu Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Konsistensi Statistik Ekonomi", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Perdagangan Dalam Negeri", "Statistisi Muda Seksi Konsolidasi Neraca Lintas Regional", "Pranata Komputer Muda Subbagian Manajemen Perubahan", "Statistisi Pertama Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Sosial", "Statistisi Pertama Seksi Pengembangan Peta Wilayah", "Statistisi Pertama Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Produksi", "Staf Seksi Pengelolaan Perpustakaan", "Staf Seksi Pengembangan Basis Data Manajemen", "Penugasan Statistisi Pelaksana Lanjutan Seksi Pengolahan Statistik Pendidikan dan Kesejahteraan Sosial", " Seksi Analisis Statistik Lintas Sektor", "Staf Seksi Layanan Jaringan Komunikasi Data", "Statistisi Pertama Seksi Neraca Perdagangan, Hotel, dan Restoran", "Penyusun Bahan Perencanaan Anggaran Subbagian Bina Program", "Statistisi Pertama Seksi Konsistensi Statistik Sosial", "Penugasan Statistisi Pelaksana Pemula Seksi Statistik Distribusi", "Pelaksana Layanan Pengadaan Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Penyusun Bahan Perencanaan Program dan Kegiatan Subbagian Manajemen Perubahan", "Pengelola Barang Milik Negara Subbagian Inventarisasi", "Analis Kepegawaian Pertama Subbagian Tata Administrasi Jabatan Fungsional", "Staf Seksi Pengembangan Model Statistik Ekonomi", "Penugasan Pranata Komputer Pelaksana Lanjutan Seksi Integrasi Pengolahan Data", "Penata Usaha Keuangan Subbagian Keuangan", "Staf Bagian Administrasi Umum", "Staf Seksi Statistik Badan Usaha dan Pasar Modal", "Pranata Keuangan APBN Mahir Subbagian Tata Usaha", "Staf Subbagian Transformasi Proses Bisnis", " Seksi Evaluasi dan Pelaporan Statistik Tanaman Pangan", " Seksi Statistik Pertambangan, Energi dan Konstruksi", "Staf Subbagian Arsip dan Ekspedisi", "Statistisi Pertama Seksi Neraca Pemerintahan Umum", " Subbagian Sosialisasi Kegiatan Statistik", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Hortikultura", " Subbagian Organisasi dan Tatalaksana", "Statistisi Pertama Seksi Penyiapan Statistik Pariwisata", "Statistisi Pertama Seksi Neraca Modal dan Akumulasi", "Penugasan Statistisi Pelaksana Lanjutan Seksi Neraca Produksi", "Bendahara Subbagian Tata Usaha", "Staf Seksi Penyiapan Statistik Pariwisata", "Statistisi Pertama Seksi Pengolahan Statistik Hortikultura", " Seksi Neraca Konsumsi", "Staf Subbagian Penyusunan Akuntabilitas", "Penata Laporan Keuangan Subbagian Verifikasi Anggaran", "Staf Seksi Evaluasi dan Pelaporan Statistik Tanaman Perkebunan", "Staf Subbagian Sosialisasi Kegiatan Statistik", "Analis Pengelolaan Keuangan APBN Ahli Pertama Seksi Neraca Wilayah dan Analisis Statistik", "Penata Laporan Keuangan Subbagian Evaluasi dan Pelaporan Keuangan", "Staf Seksi Penyiapan Statistik Peternakan", "Statistisi Pertama Seksi Pengolahan Statistik Pendidikan dan Kesejahteraan Sosial", "Penyusun Bahan Perencanaan Program dan Kegiatan Subbagian Bina Program", "Pelaksana Layanan Pengadaan Seksi Statistik Industri", "Statistisi Pertama Subbagian Manajemen Perubahan", "Penata Laporan Keuangan Subbagian Tata Usaha Keuangan", "Staf Seksi Neraca Arus Dana", "Staf Subbagian Tuntutan Perbendaharaan dan Ganti Rugi", "Staf Seksi Integrasi Pengolahan Data Statistik Produksi", "Statistisi Pertama Seksi Penyiapan Statistik Ketahanan Wilayah", "Penugasan Seksi Statistik Produksi", "Statistisi Pertama Subbagian Penyusunan Anggaran II", "Statistisi Pertama Seksi Evaluasi dan Pelaporan Statistik Rumah Tangga", "Staf Seksi Penyiapan Statistik Harga Produsen", "Penugasan Staf Seksi Statistik Sosial", "Statistisi Pertama Subbagian Kerjasama dan Hubungan Kelembagaan", "Statistisi Pertama Seksi Statistik Keuangan Pemerintah", "Penugasan Statistisi Pertama Seksi Statistik Niaga dan Jasa", "Statistisi Pelaksana Lanjutan Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Penugasan Staf Seksi Statistik Distribusi", " Seksi Pengolahan Statistik Harga Konsumen", "Staf Seksi Statistik Mobilitas Penduduk", "Staf Seksi Pengolahan Statistik Perdagangan Dalam Negeri", " Subbagian Bina Program", "Pranata Komputer Pertama Subbagian Kepegawaian", "Statistisi Pelaksana Lanjutan Seksi Statistik Produksi", " Subbagian Administrasi Akademik dan Kerjasama", " Seksi Statistik Pertanian", "Staf Seksi Pemeliharaan Jaringan Komunikasi Data", "Staf Seksi Evaluasi dan Pelaporan Statistik Konstruksi", "Statistisi Pelaksana Lanjutan Seksi Neraca Wilayah dan Analisis Statistik", "Penugasan Staf Seksi Integrasi Pengolahan dan Diseminasi Statistik", "Staf Seksi Penyiapan Statistik Transportasi", "Staf Seksi Evaluasi dan Pelaporan Statistik Kesehatan dan Perumahan", "Staf Seksi Konsolidasi Neraca Barang Regional", "Staf Seksi Pengolahan Statistik Tanaman Perkebunan", " Seksi Penyiapan Statistik Harga Konsumen", "Staf Seksi Statistik Politik", "Staf Seksi Konsolidasi Neraca Lintas Regional", "Penugasan Statistisi Pelaksana Lanjutan Seksi Jaringan dan Rujukan Statistik", "Staf Seksi Pengolahan Statistik Ketahanan Wilayah", "Staf Seksi Pengembangan Peta Statistik Wilayah Kecil", "Staf Seksi Evaluasi dan Pelaporan Statistik Tanaman Pangan", "Staf Seksi Konsolidasi Neraca Lintas Sektor", "Staf Seksi Evaluasi dan Pelaporan Statistik Kehutanan", "Staf Seksi Statistik Mobilitas Tenaga Kerja", "Staf Seksi Indikator Statistik Lintas Sektor", "Staf KSK", "Koordinator Statistik Kecamatan (Grade 8) KSK", "Staf Seksi Inventarisasi Kegiatan dan Produk Statistik", "Staf Seksi Penyiapan Statistik Industri Besar dan Sedang", "Staf Seksi Pengembangan Desain Sensus dan Survei Bidang Statistik Sosial", "Staf Seksi Penyiapan Statistik Ekspor", "Kepala Seksi Statistik Produksi Non Industri Besar Sedang");

$status = array("Pensiun", "Meninggal", "Melimpah", "MPP", "Berhenti", "Pensiun", "PNS", "Dipekerjakan", "Melimpah", "Diperbantukan", "Diberhentikan", "TB Dalam Negeri", "TB Luar Negeri", "Cuti LTN", "TB Double Degree", "TB STIS", "CPNS");

$instansi = [
	[
		"nama_instansi" => "BPS Pusat",
		"alamat_instansi" => "Jl. Dr. Sutomo 6-8",
		"telp_instansi" => "(62-21) 3841195",
		"email_instansi" => "bpshq@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Semarang",
		"alamat_instansi" => "Jl. Inspeksi Kali Semarang No.1",
		"telp_instansi" => "0243546413",
		"email_instansi" => "bps3374@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Tabanan",
		"alamat_instansi" => "Jl. Pahlawan No 1B",
		"telp_instansi" => "0361811571",
		"email_instansi" => "bps5102@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Karawang",
		"alamat_instansi" => "Jl. Cakradireja No.36",
		"telp_instansi" => "0267402250",
		"email_instansi" => "kabkarawang@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Lamongan",
		"alamat_instansi" => "Jl. Veteran 185 Lamongan-62218",
		"telp_instansi" => "(0322) 321339",
		"email_instansi" => "bps3524@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Lampung",
		"alamat_instansi" => "Jl. Basuki Rahmat No 54",
		"telp_instansi" => "(62-721) 482909",
		"email_instansi" => "bps1800@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Tegal",
		"alamat_instansi" => "Jl Ade Irma Suryani No 1 Slawi",
		"telp_instansi" => "(0283) 4561190",
		"email_instansi" => "bps3328@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi DKI Jakarta",
		"alamat_instansi" => "Jl. Salemba Tengah No. 36-38 Paseban Senen",
		"telp_instansi" => "(021) 31928493",
		"email_instansi" => "bps3100@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Jawa Barat",
		"alamat_instansi" => "Jl. PHH. Mustofa No. 43 Bandung 40124",
		"telp_instansi" => "+62 22 7272595",
		"email_instansi" => "bps3200@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Indragiri Hilir",
		"alamat_instansi" => "Jl. Praja Sakti (Bunga) No. 11 Tembilahan Hilir, Tembilahan. ",
		"telp_instansi" => " (0768) 22489",
		"email_instansi" => "bps1403@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Kalimantan Selatan",
		"alamat_instansi" => "Jl. Kapt. Piere Tendean No 6 Palangka Raya 73112 Indonesia",
		"telp_instansi" => " (0536) 322 8105",
		"email_instansi" => "kalteng@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Nusa Tenggara Timur",
		"alamat_instansi" => "Jl. R. Suprapto No. 5",
		"telp_instansi" => "(0380) 8554535",
		"email_instansi" => "ntt@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Pariaman",
		"alamat_instansi" => "Jl. Sentot Ali Basa",
		"telp_instansi" => "(0751) 93785",
		"email_instansi" => "pariaman@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Boyolali",
		"alamat_instansi" => "Jl. Raya Boyolali-Semarang No.Km. 2",
		"telp_instansi" => "(0276) 323772",
		"email_instansi" => "boyolali@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Garut",
		"alamat_instansi" => "Jl. Pembangunan No.222, Sukagalih, Kec. Tarogong Kidul",
		"telp_instansi" => "233273",
		"email_instansi" => "bpsgarut@gmail.com",
	],
	[
		"nama_instansi" => "BPS Kabupaten Musi Banyuasin",
		"alamat_instansi" => "Jl. Merdeka No.531, Kayu Ara, Sekayu",
		"telp_instansi" => "0001234",
		"email_instansi" => "bpsmusibanyuasin@gmail.com",
	],
	[
		"nama_instansi" => "BPS Kabupaten Lebak",
		"alamat_instansi" => "Jl. Jendral Sudirman No.807, Narimbang Mulia, Kec. Rangkasbitung, Kabupaten Lebak, Banten 42315",
		"telp_instansi" => "(62-252) 5554673",
		"email_instansi" => "bps3602@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Tangerang",
		"alamat_instansi" => "Jl. RHM Noer Radji No. 28 Gerendeng Tangerang",
		"telp_instansi" => "(62-21) 55792858",
		"email_instansi" => "bps3671@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Jawa Tengah",
		"alamat_instansi" => "Jl. Pahlawan No.6, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241",
		"telp_instansi" => "024 - 8412802",
		"email_instansi" => "bps3300@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Pringsewu",
		"alamat_instansi" => "Jl. Raya Gading Rejo KM.33 Wonodadi, Gading Rejo 35372",
		"telp_instansi" => "(62-729) 7330811",
		"email_instansi" => "bps1810@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Jakarta Selatan",
		"alamat_instansi" => "Komplek Walikota Jakarta Selatan Blok A 15th Floor, JL. Prapanca Raya, No. 9, Kebayoran Baru, RT.2/RW.3, Pulo, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160",
		"telp_instansi" => "(021) 72792576",
		"email_instansi" => "bps3171@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Indramayu",
		"alamat_instansi" => "Jl. Golf No. 4 Indramayu, Jawa Barat - Indonesia",
		"telp_instansi" => "+62 234 272880",
		"email_instansi" => "bps3212@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Bintan",
		"alamat_instansi" => "Jl. Tata Bumi, Ceruk Ijuk, Toapaya, Bintan, Kepulauan Riau",
		"telp_instansi" => " (0771) 3300 700",
		"email_instansi" => "bps2102@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Surabaya",
		"alamat_instansi" => "Jl. A. Yani 152 E Surabaya 60231 Jawa Timur Indonesia",
		"telp_instansi" => "(62-31) 82516020",
		"email_instansi" => "bps3578@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Minahasa",
		"alamat_instansi" => "Jl. Dotulolong Lasut, Tondano Timur, Minahasa",
		"telp_instansi" => "(0431)321155",
		"email_instansi" => " bps7102@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Jawa Timur",
		"alamat_instansi" => "Jl. Raya Kendangsari Industri N0.34",
		"telp_instansi" => "081213869409",
		"email_instansi" => "tpramono11@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Bangka Selatan",
		"alamat_instansi" => "",
		"telp_instansi" => "(0718) 4220039",
		"email_instansi" => "bps1905@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Tomohon",
		"alamat_instansi" => "JL. Nimawanua, Lansot, Lansot, Tomohon Sel., Kota Tomohon, Sulawesi Utara",
		"telp_instansi" => "0431) 3159904",
		"email_instansi" => "bps7173@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Sorong Selatan",
		"alamat_instansi" => "Jalan Teminabuan-Ayamaru",
		"telp_instansi" => "",
		"email_instansi" => "bps9106@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Sulawesi Tenggara",
		"alamat_instansi" => "Jl. Boulevard No. 1 Kendari Sulawesi Tenggara",
		"telp_instansi" => "(0401) 3135363",
		"email_instansi" => "bps7400@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Sukabumi",
		"alamat_instansi" => "Jl. Raya Karangtengah Km 14 No 52 Cibadak Sukabumi 43351",
		"telp_instansi" => "0266536953",
		"email_instansi" => "bps3202@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Gunungkidul",
		"alamat_instansi" => "Jl. Pemuda 19A Baleharjo Wonosari 55811",
		"telp_instansi" => "0274394180",
		"email_instansi" => "bps3403@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Ogan Ilir",
		"alamat_instansi" => "Jl. Palembang-Prabumulih Km 33 Desa Tanjung Pering 30813 Indralaya",
		"telp_instansi" => "0711581713",
		"email_instansi" => "bps1610@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Paser",
		"alamat_instansi" => "Jl. Gajah Mada No.76, Tanah Grogot",
		"telp_instansi" => "(0543)21219",
		"email_instansi" => "bps6401@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Samarinda",
		"alamat_instansi" => "Jl. Kyai Haji Ahmad Dahlan No.33, Sungai Pinang Luar",
		"telp_instansi" => "(0543)21219",
		"email_instansi" => "bps6401@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Daerah Istimewa Yogyakarta",
		"alamat_instansi" => "Jalan Lingkar Selatan, Tamantirto, Kasihan, Geblagan, Tamantirto",
		"telp_instansi" => "0274-4342234",
		"email_instansi" => "pst3400@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kab Empat Lawang",
		"alamat_instansi" => "Jl. Lintas Sumatera No. 35 Kecamatan Tebing Tinggi Kabupaten Empat Lawang Sumatera Selatan",
		"telp_instansi" => "070221674",
		"email_instansi" => "bps1611@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Bekasi",
		"alamat_instansi" => "Jl. Rawa Tembaga I, No. 6, Bekasi",
		"telp_instansi" => "02188953987",
		"email_instansi" => "bps3275@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kab Lampung Selatan",
		"alamat_instansi" => "Jl. Mustafa Kemal No. 24 Kalianda, Lampung Selatan - Lampung",
		"telp_instansi" => "0727322241 ",
		"email_instansi" => "bps1803@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kab Tasikmalaya",
		"alamat_instansi" => "Jalan Raya Timur Singaparna km 4 Cintaraja Singaparna Tasikmalaya",
		"telp_instansi" => "0265549281",
		"email_instansi" => "bps3206@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Pulau Morotai",
		"alamat_instansi" => "Jln. Hi. Ahmad Syukur, Kec. Morotai Selatan, Pulau Morotai-Maluku Utara, 97771",
		"telp_instansi" => "(0923) 2221133",
		"email_instansi" => "bps8207@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Maluku Utara",
		"alamat_instansi" => "Jl. Stadion No 65 Ternate 97712",
		"telp_instansi" => "(0921) 3127878",
		"email_instansi" => "bps8200@bps.go.id",
	],
	[
		"nama_instansi" => "Politeknik Statistika STIS",
		"alamat_instansi" => "Jl. Otto Iskandardinata No. 64C",
		"telp_instansi" => "(021) 8508812",
		"email_instansi" => "info@stis.ac.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten/Kota Bandung",
		"alamat_instansi" => "",
		"telp_instansi" => "",
		"email_instansi" => "",
	],
	[
		"nama_instansi" => "BPS Kabupaten Aceh Singkil",
		"alamat_instansi" => "Jl. H. Sayuthi No. 2 Pulo Sarok",
		"telp_instansi" => "(0658) 21268",
		"email_instansi" => "bps1102@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Rembang",
		"alamat_instansi" => "Jl. Pemuda Km. 1",
		"telp_instansi" => "0295691040",
		"email_instansi" => "bps3317@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Cilacap",
		"alamat_instansi" => "Jalan Dr. Soetomo No. 16A",
		"telp_instansi" => "0282534328",
		"email_instansi" => "bps3301@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Klaten",
		"alamat_instansi" => "Jl. Merapi No. 6",
		"telp_instansi" => "62272321689",
		"email_instansi" => "bps3310@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Malang",
		"alamat_instansi" => "Jl. Janti Barat No. 47",
		"telp_instansi" => "0341801164",
		"email_instansi" => "bps3573@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kota Banjarmasin",
		"alamat_instansi" => "Jalan Gatot Subroto No. 5 Banjarmasin 70235",
		"telp_instansi" => "(0511) 6773031",
		"email_instansi" => "bps6371@gmail.com",
	],
	[
		"nama_instansi" => "BPS Provinsi Riau",
		"alamat_instansi" => "Jl. Pattimura No. 12 Pekanbaru - Riau, Indonesia",
		"telp_instansi" => "(62-761) 23042",
		"email_instansi" => "riau@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Tanjung Jabung Barat",
		"alamat_instansi" => "Jl. Prof.Dr. Sri Soedewi MS, SH.-Kuala Tungkal, Jambi",
		"telp_instansi" => "(0742) 21738",
		"email_instansi" => "bps1507@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Provinsi Sulawesi Utara",
		"alamat_instansi" => "Jl. 17 Agustus Manado 95119",
		"telp_instansi" => "(0431) 847044",
		"email_instansi" => "mailto:sulut@bps.go.id",
	],
	[
		"nama_instansi" => "BPS Kabupaten Cirebon",
		"alamat_instansi" => "Jl. Sunan Kalijaga No.4 Sumber-Cirebon 45611",
		"telp_instansi" => "+62 231 321445",
		"email_instansi" => "bps3209@bps.go.id",
	],
];

echo "[";

for ($a = 0; $a < 10000; $a++) {
	$jk = $faker->randomElement($array = array('LK', 'PR'));
	$jk_nip = ($jk == 'LK') ? 1 : 2;
	$gender = ($jk == 'LK') ? 'male' : 'female';
	$tahun_lahir  = rand(1945, 2001);
	$bulan_lahir  = rand(1, 12);
	$bulan_lahir = ($bulan_lahir < 10) ? '0' . $bulan_lahir : $bulan_lahir;
	$tanggal_lahir  = rand(1, 31);
	$tanggal_lahir = ($tanggal_lahir < 10) ? '0' . $tanggal_lahir : $tanggal_lahir;
	$lahir = $tanggal_lahir . '-' . $bulan_lahir . '-' . $tahun_lahir;
	$pns = rand(20, 30);
	$bulan_pns  = rand(1, 12);
	$bulan_pns = ($bulan_pns < 10) ? '0' . $bulan_pns : $bulan_pns;
	$nip = $tahun_lahir . $bulan_lahir . $tanggal_lahir . ($tahun_lahir + $pns) . $bulan_pns . $jk_nip . $faker->randomElement($number);
	$pensiun = $tahun_lahir + 60;
	$num_instansi = $faker->numberBetween($min = 0, $max = count($instansi));

	// generate data nama, alamat
	echo "{";
	echo "<br>";
	echo '"nip_bps": "' . ($nip_bps + $a) . '",';
	echo "<br>";
	echo '"nip": "' . $nip . '",';
	echo "<br>";
	echo '"nama": "' . $faker->name($gender) . '",';
	echo "<br>";
	echo '"jenis_kelamin": "' . $jk . '",';
	echo "<br>";
	echo '"tempat_lahir": "' . $faker->city . '",';
	echo "<br>";
	echo '"tanggal_lahir": "' . $lahir . '",';
	echo "<br>";
	echo '"no_telepon": "' . $faker->phoneNumber . '",';
	echo "<br>";
	echo '"no_handphone": "' . $faker->phoneNumber . '",';
	echo "<br>";
	echo '"email": "' . $faker->email . '",';
	echo "<br>";
	echo '"alamat": "' . $faker->address . '",';
	echo "<br>";
	echo '"perkiraan_pensiun": "' . $pensiun . '",';
	echo "<br>";
	echo '"jabatan_terakhir": "' . $faker->randomElement($jabatan1, $jabatan2, $jabatan3, $jabatan4) . '",';
	echo "<br>";
	echo '"status_pegawai": "' . $faker->randomElement($status) . '",';
	echo "<br>";
	echo '"golongan": "' . $faker->randomElement($golongan = array("II", "III", "IV")) . $faker->randomElement($golongan = array("a", "b", "c", "d")) . '",';
	echo "<br>";
	echo '"nama_instansi": "';
	echo ($instansi[$num_instansi]['nama_instansi'] != '') ? $instansi[$num_instansi]['nama_instansi'] . '",' : '",';
	echo "<br>";
	echo '"alamat_instansi": "';
	echo ($instansi[$num_instansi]['alamat_instansi'] != '') ? $instansi[$num_instansi]['alamat_instansi'] . '",' : '",';
	echo "<br>";
	echo '"notelp_instansi": "';
	echo ($instansi[$num_instansi]['telp_instansi'] != '') ? $instansi[$num_instansi]['telp_instansi'] . '",' : '",';
	echo "<br>";
	echo '"status_perkawinan": "' . $faker->randomElement($kawin = array("Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati")) . '",';
	echo "<br>";
	echo '"Agama": "' . $faker->randomElement($agama = array("Islam", "Kristen Protestan", "Kristen Katholik", "Hindu", "Buddha", "Konghucu")) . '"';
	echo "<br>";
	echo "},";
	echo "<br>";
}
echo "]";
