<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
         


public function __construct($judul ="", $penulis = "penulis", $penerbit =
    "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
public function getLabel(){
    return "$this->penulis, $this->penerbit";
}

public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
}

}

class game extends produk{
    public function getInfoProduk()
    {
        $str = " game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
        return $str;
    }
}
class komik extends produk{
    public function getInfoProduk(){
        $str = " Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masahi Kishimoto", "Shoen Jump", 30000, 100, 0);
$produk2 = new game("Presiden Evil", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();

echo $produk2->getInfoProduk();
