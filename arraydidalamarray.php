<?php
$agung = [
    "id" => "agung",
    "name" => "agung ruhiyat",
    "age"  => 17,
    "addres" => [
        "city" => "TasikMalaya",
        "country" => "INA"
    ]
];

var_dump($agung);
var_dump($agung ["name"]);
var_dump($agung["addres"]["country"]);