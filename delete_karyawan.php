<?php
include("server/koneksi.php");
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    $query_hapus = mysqli_query($koneksi, "delete from karyawan where id='$id'");
    header('location:index.php');
} else {
    header('location:index.php');
}
