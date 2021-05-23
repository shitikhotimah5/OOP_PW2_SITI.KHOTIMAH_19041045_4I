<?php

require_once 'App/Init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 25000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1);
// $cetakProduk->tambahProduk( $produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Komputer\User as KomputerUser;
use App\Produk\User as ProdukUser;

new KomputerUser();


echo "<br>";
echo "<hr>";


new ProdukUser();