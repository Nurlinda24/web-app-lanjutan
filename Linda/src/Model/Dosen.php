<?php
include_once __DIR__.'/Mahasiswa.php';

class Dosen
{
	public $nidn;
	public $nama;
	public $mahasiswaBimbingan = [];
	
	public function tambahMahasiswa(Mahasiswa $mahasiswa)
	{
		$this->mahasiswaBimbingan[] = $mahasiswa;
	}
}
?>