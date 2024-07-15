<!-- ARRAY SEBAGAI MAP 
1.Biasanya di kebanyakan bahasa pemrogram pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value,
2.Namun di PHP, Map bisa dibuat menggunakan Array,
3.Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam Array
4.Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misal nya
5.Hal tersebut terlihat seperti Map di bahasa pemrograman lain-->
<!--  -->
<?php
$agung = array(
    "id" => "agung",
    "name" => "agung ruhiyat",
    "age"  => 17
);

$budi = [
    "id" => "budi",
    "name" => "budi widaya hasanah",
    "age"  => 18
];

var_dump($agung);
var_dump($budi);
