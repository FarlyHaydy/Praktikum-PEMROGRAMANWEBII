<?php

$jari_jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;

// Menghitung luas alas segitiga
$luas_alas = (1/2) * $panjang * $lebar;

// Menghitung volume prisma dengan alas segitiga
$volume_prisma = $luas_alas * $tinggi;

// Menampilkan hasil dengan 3 desimal dibelakang koma
echo number_format($volume_prisma, 3). " m3";
?>
