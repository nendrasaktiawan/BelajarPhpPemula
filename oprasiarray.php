<?php
// mengakses data array pada nomor index
$names = ["Eko", "Nendra", "Agung"];
var_dump($names[0]);
// mengubah data di array pada nomor index dengan value baru
$names[0] = "Cadut";
var_dump($names);
// menghapus data di array, index otomatis hilang dari array
unset($names[0]);
var_dump($names);
// menambah data di array pada posisi paling belakang
$names [] = "asep";
var_dump($names);
// mengambil total data array
var_dump(count($names));