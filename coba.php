<?php
class computer{
    public $prosesor,
           $memori,

     }      
    public function__construct($prosesor, $memor){
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
    }
    public function__destruct($prosesor, $memor);
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
}


$produk1= new produk("idepad 310","Lenovo",7000000);
$produk2 = new produk ("flasdisk","Sandisk",100000);
$produk3 = new produk ("macbook","Apple", 25000000);
$produk4 = new produk ("mouse","logitech", 120000);


echo "Nama Barang Laptop:" . $produk1->getcetak();
echo "<br>";
echo "Nama barang Laptop:" . $produk2->getcetak();
echo "<br>";
echo "Nama Barang Aksesoris: " . $produk3->getcetak();
echo "<br>";
echo "Nama Barang Laptop:". $produk4->getcetak();