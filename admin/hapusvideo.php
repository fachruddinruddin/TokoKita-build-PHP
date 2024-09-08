<?php
session_start();
include '../dbconnect.php';

$judul = $_GET['judul'];

$hapus = mysqli_query($conn, "delete from video where judul='$judul'");

if($hapus){
    echo "<script> alert ('data berhasil di hapus')</script>";
    header("refresh:0;video.php");
}else{
    echo "<script> alert ('data tidak berhasil di hapus')</script>";
    header("refresh:0;video.php");
}
?>