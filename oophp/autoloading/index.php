<?php


require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("NieR Automata", "Yoko Taro", "Square Enix", 600000, 50);

$cetakProduk = new CetakInformasiProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();