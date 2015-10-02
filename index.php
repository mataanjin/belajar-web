<?php

//Session untuk menyimpan data persisten(baca tentang web application stateless)
session_start();

//Buat login page disini
include_once 'connection.php';

//Kalo blom login maka harus login
//Yang perlu kita cek jika login adalah variable $_SESSION['id']
if (!$_SESSION['id']) {
  //Ok, belum login maka harus tampilkan page login
  include 'login.php';
} else {
  //Sudah login tampilkan page berdasarkan $_GET['file']
  //jika tidak ada secara default bakal tampilin file hasil.php
  if (file_exists($_GET['file'] . '.php')) {
    include $_GET['file'] . '.php';
  } else {
    include 'hasil.php';
  }
}
