<?php 

$vt_sunucu ="localhost";
$vt_kullanici ="root";
$vt_sifre ="";
$vt_adi ="sohret";

$baglan =mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if (!$baglan)
{
  die("veri tabanı baglanti islemi basarisiz ".mysqli_connect_error());
}

else{
    echo "baglanti basarili "; 
}

?>