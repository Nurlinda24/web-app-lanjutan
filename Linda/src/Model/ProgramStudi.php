<?php

class ProgramStudi
{
	public $kode;
	public $nama;
	
	public function __construct(string $kode, string $nama)
	{
		$this->kode = $kode;
		$this->nama = $nama;
	}
}
?>