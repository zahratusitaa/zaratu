<?php
// pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "zahra tu";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggambung string / concatenation / concat
// .
// $nama_depan = "zahra";
// $nama_belakang = "tu";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "zahra";
// $nama .= " ";
// $nama .= "di";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==
var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);