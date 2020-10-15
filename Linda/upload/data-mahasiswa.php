<?php
include_once __DIR__.'/../src/Model/Mahasiswa.php';
include_once __DIR__.'/../src/Model/ProgramStudi.php';

$prodiInf = new ProgramStudi("INF", "Informatika");
$prodiMath = new ProgramStudi("Math", "Matematika");

$haris = new Mahasiswa("Haris", "Pria", $prodiInf);
$sri = new Mahasiswa("Sri Novita Sari", "Wanita", $prodiInf);
$nia = new Mahasiswa("Nia", "Pria", $prodiInf);
$upik = new Mahasiswa("Ardani", "Pria", $prodiMath);
$ta = new Mahasiswa("Talithaalitha", "Wanita", $prodiMath);

$data_mahasiswa = [$haris, $sri, $nia, $upik, $ta];

include __DIR__.'/../template/tampil_mahasiswa-ps.php';
?>