<?php


/*
   Buatlah sebuah program untuk menampilkan bilangan ganjil sesuai dengan batas yang ditentukan
   Misalnya jika dalam parameter dimasukkan angka 20. Maka akan menampilkan bilangan ganjil dari angka 0 sampai 20 (inklusif)
   Kamu dapat menggunakan var_dump untuk menampilkan valuenya pada terminal
*/




function printOdd($limit)
{
    for ($i = 1; $i <= $limit; $i += 2) {
        var_dump($i);
    }
}
printOdd(45);


// Jalankan Test diatas jika sudah selesai
