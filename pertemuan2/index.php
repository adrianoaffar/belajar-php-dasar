<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump 

// penggunaan variabel
$nama = "Adriano";
echo" Halo Nama Saya $nama";

// operator
// aritmatika
// + - : / %
$x = 10;
$y = 20;
echo $x * $y;

// penggabungan string / concatenation / concat
// .
$nama_depan = "Adriano";
$nama_belakang = "Affar";
echo $nama_depan . " " . $nama_belakang;

// assigment
// =, +=, *-=, *=, /= , %=, .=
$nama = "Adriano";
$nama .= " ";
$nama .= "Affar";
echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
var_dump(1=="1");

// identitas
// ===, !==
var_dump(1==="1");

// logika
// &&, ||, !
$x = 30;
var_dump($x<20 || $x % 2 == 0);

?>