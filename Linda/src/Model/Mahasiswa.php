<?php
include_once __DIR__.'/ProgramStudi.php';

class Mahasiswa
{
	public $nama;
	public $kelamin;
	public $programStudi;
	
	public function __construct($nama, $kelamin, $ps)
	{
		$this->nama = $nama;
		$this->kelamin = $kelamin;
		$this->programStudi = $ps;
	}
}
?>