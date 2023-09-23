<?php

require_once 'App/init.php';


// $produk1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";


// new App\Service\User();
// echo "<br>";
// new App\Produk\User();


use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser; 

new ServiceUser();
echo "<br>";
new ProdukUser();



?>