<?php
session_start();
include '../dbconnect.php';

$judul = $_GET['metode'];

$hapus = mysqli_query($conn, "delete from pembayaran where metode='$judul'");

if($hapus){
    echo "<script> alert ('data berhasil di hapus')</script>";
    header("refresh:0;pembayaran.php");
}else{
    echo "<script> alert ('data tidak berhasil di hapus')</script>";
    header("refresh:0;pembayaran.php");
}
?>