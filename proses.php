<?php
include "server/koneksi.php";

//for add pegawai
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $nik = $_POST['nik'];
    $gol = $_POST['gol'];
    $jabatan = $_POST['jabatan'];
    $jam = $_POST['jam'];

    $result = mysqli_query($koneksi, "insert into karyawan(nama,nip,nik,gol,jabatan,jam) values('$nama','$nip','$nik','$gol','$jabatan','$jam')");
    header('location:index.php');
}
