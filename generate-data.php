<?php
// Jika mendownload faker dengan composer
require_once 'vendor/autoload.php';

// inisialisasi faker
$faker = Faker\Factory::create('id_ID');
$nip_bps = 340000400;
for ($a = 0; $a < 10; $a++) {
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
	$nip = $tahun_lahir . $bulan_lahir . $tanggal_lahir . ($tahun_lahir + $pns) . $bulan_pns . $jk_nip . $faker->randomElement($array = array('001', '002', '003', '004', '005', '006', '007'));
	$pensiun  = $tahun_lahir + 60;
	// generate data nama, alamat
	echo '"nip_bps": ' . ($nip_bps + $a);
	echo "<br>";
	echo '"nip": ' . $nip;
	echo "<br>";
	echo '"nama": ' . $faker->name($gender);
	echo "<br>";
	echo '"jenis_kelamin": ' . $jk;
	echo "<br>";
	echo '"tempat_lahir": ' . $faker->city;
	echo "<br>";
	echo '"tanggal_lahir": ' . $lahir;
	echo "<br>";
	echo '"no_telepon": ' . $faker->phoneNumber;
	echo "<br>";
	echo '"no_handphone": ' . $faker->phoneNumber;
	echo "<br>";
	echo '"email": ' . $faker->email;
	echo "<br>";
	echo '"alamat": ' . $faker->address;
	echo "<br>";
	echo '"perkiraan_pensiun": ' . $pensiun;
	echo "<br>";
	echo '"jabatan_terakhir": ' . $pensiun;
	echo "<br>";
	echo '"status_pegawai": ' . $pensiun;
	echo "<br>";
	echo '"nama_instansi": ' . $pensiun;
	echo "<br>";
	echo '"alamat_instansi": ' . $faker->address;
	echo "<br>";
	echo '"notelp_instansi": ' . $faker->phoneNumber;
	// echo $faker->name;
	// echo "<br>";
	// echo $faker->address;
	echo "<br> <br>";
}
