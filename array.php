<?php

//cara lama
$hari = array ("senin", "selasa", "rabu");

//cara baru
$arr1 = ["Rabu", "Juni", 30, true];

//menampilkan array var_dump
var_dump($hari);
echo "<br>";

//menampilkan satu elemen array
echo $arr1[1];
echo "<br>";

//menampilkan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "Jumat";
var_dump($hari);
echo "<br>";

//menmapilkan semua array ke user
foreach ($hari as $h) {
    echo "$h <br>";
}

//array assosiatif = meiliki banyak index berupa string
// $siswa =[
//     'nama' => 'Nisa',
//     'umur' => 16,
//     'email' => 'nisa@gmail.com'
// ];

// //cara menampilkan satu elemen
// echo $siswa['nama'] . '<br>';

// //cara menampilkan semua elemen
// foreach ($siswa as $s) {
//     echo $s . '<br>';
// }

//multiple array = array di dalam array (multisimensi)
$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $angka[1][1] . "<br>";
foreach ($angka as $a) {
    //cara pertama
    echo $a[0] . '<br>';
    echo $a[1] . '<br>';
    echo $a[2] . '<br>';
    echo '<br>';
    //cara kedua
    // foreach ($a as $b) {
    //     echo $b . '<br>';
    // }
}

//latihan 2
$siswa =[
    ['nama' => 'Devan', 'umur' => 16, 'hobi' => 'futsal'],
    ['nama' => 'Ravi', 'umur' => 16, 'hobi' => 'nyanyi'],
    ['nama' => 'Risma', 'umur' => 16, 'hobi' => 'menulis']
];

//cara 1
// foreach ($siswa as $s) {
//     echo "Nama : " .$s['nama'] . '<br>';
//     echo "Umur : " .$s['umur'] . '<br>';
//     echo "Hobi : " .$s['hobi'] . '<br>';
    
//     echo '<br>';
// }

//cara2
foreach ($siswa as $s) {
    echo "<ul>";
    echo "<li>Nama : " .$s['nama'] . "</li>";
    echo "<li>Umur : " .$s['umur'] . "</li>";
    echo "<li>Hobi : " .$s['hobi'] . "</li>";
    echo "</ul>";
}

?>