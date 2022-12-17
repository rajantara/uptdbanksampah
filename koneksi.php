<?php
$koneksi = mysqli_connect("epiz_33215941_uptddb", "epiz_33215941", "O8NxPUlA9bVQ", "sql202.epizy.com");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
