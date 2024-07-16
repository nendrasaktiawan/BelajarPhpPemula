<!-- Operator Penugasan di PHP sama seperti bahasa pemrograman lain,yaitu dengan menggunakan karakter "=" (sama dengan)
 2. Operator Penugasan sudah sering kita gunakan,trutama ketika mengubah value sebuah variable
 3. Namun selain hal itu, Oprasi penugasan juga bisa digunakan untuk oprasi penugsan juga bisa digunakan untuk operasi aritmatika -->

 <?php
 $total = 0;

 $drink = 10000;
 $chicken = 15000;
 $milk =  20000;

 $total += $drink;
 $total += $chicken;
 $total += $milk;
 var_dump($total);
