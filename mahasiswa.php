<?php

class Mahasiswa {
	private $nama, $umur, $ipk;

	public function __construct( $nama, $umur, $ipk )
	{
		$this->nama = $nama;
		$this->umur = $umur;
		$this->ipk = $ipk;
	}

	public function getNama() {
		return $this->nama;
	}
}

$mhs1 = new Mahasiswa('Siti Khotimah', 20, 3.8);

echo $mhs1->getNama();