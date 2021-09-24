<?php

class Produk {
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga,
           $diskon = 0;
   
           

        public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit",  $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        }

        //setter & getter
        public function setJudul($judul)
        {
          $this->judul = $judul;
        }
        public function getJudul()
        {
          return $this->judul;
        }
      
        public function setPenulis($penulis)
        {
          $this->penulis = $penulis;
        }
        public function getPenulis()
        {
          return $this->penulis;
        }
      
        public function setPenerbit($penerbit)
        {
          $this->penerbit = $penerbit;
        }
        public function getPenerbit()
        {
          return $this->penerbit;
        }
      
        public function setHarga($harga)
        {
          $this->harga = $harga;
        }
      
        public function setDiskon($diskon)
        {
          $this->diskon = $diskon;
        }
        public function getDiskon($diskon)
        {
          return $this->diskon = $diskon;
        }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }

    public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
}
class Komik extends Produk{
  public $jmlHalaman;

  public function __construct($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0)  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk(){
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk{
  public $waktuMain;

  public function __construct($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0, $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk(){
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
  

}

class CetakInfoProduk{
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000 , 50);


// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game  : " . $produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "<hr>";

$produk1->setDiskon(20);
echo $produk1->getharga();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getharga();
echo "<hr>";

$produk1->setPenulis("Mohammad Iqbal Ghifari");
echo $produk1->getPenulis();
?>