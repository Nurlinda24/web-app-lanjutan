<?php
include __DIR__ . '/../src/Model/Mahasiswa.php';
include __DIR__ . '/../src/Model/Dosen.php';

$lestari = new Mahasiswa('Wilidia Lestari', 'Perempuan', 'Perawat');

$linda = new Mahasiswa('Nurlinda', 'Perempuan', 'Farmasi');

$sabri = new Dosen();
$sabri->nama = "Muhammad Sabri Saputra, S.Farm";
$sabri->nidn = 110011;

$data_mahasiswa = [$lestari, $linda];
$data_dosen = [$sabri];
include __DIR__ . '/../template/tampil_dosen.php';
include __DIR__ . '/../template/tampil_mahasiswa.php';
