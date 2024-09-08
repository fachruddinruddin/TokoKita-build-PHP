<?php
session_start();
include '../dbconnect.php';

$judul = $_GET['namaproduk'];

$hapus = mysqli_query($conn, "delete from produk where namaproduk='$judul'");

if($hapus){
    echo "<script> alert ('data berhasil di hapus')</script>";
    header("refresh:0;produk.php");
}else{
    echo "<script> alert ('data tidak berhasil di hapus')</script>";
    header("refresh:0;produk.php");
}
?>