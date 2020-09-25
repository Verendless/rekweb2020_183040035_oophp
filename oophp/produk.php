<?php

class Produk
{
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shounen Jump";
$produk1->harga = 15000;

$produk2 = new Produk();
$produk2->judul = "NieR Automata";
$produk2->penulis = "Yoko Taro";
$produk2->penerbit = "Square Enix";
$produk2->harga = 600000;


echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();