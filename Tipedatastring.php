<?php 


$nowdoc = <<<NENDRA
ini adalah nendra 
umur 17
asal tasikmalaya
\n
NENDRA;

$heredoc = <<<'NENDRA'
ini adalah nendra 
umur 17
asal tasikmalaya
NENDRA;

echo "Nowdoc:\n$nowdoc\n";
echo "Heredoc:\n$heredoc\n";

// double quote

// echo 'Nama : ';
// echo 'Nendra saktiawan';
// echo "<br>";

// echo "Nama : ";
// echo "Nendra\t saktiawan\n";
// // nowdoc
// echo <<<NENDRA
// ini adalah nendra 
// umur 17
// asal tasikmalaya
// \n
// NENDRA;
// // heredoc
// echo <<<'NENDRA'
// ini adalah nendra 
// umur 17
// asal tasikmalaya
// NENDRA;
