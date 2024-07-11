<?php
$name = "eko";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Nendra";
unset($contoh);
echo $contoh;
$contoh = "Nendra saktiawan";
$contoh = null;
var_dump(isset($contoh));
