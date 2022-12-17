<?php
include('partials/_header.php')
?>

<body>
    <?php
    include('partials/_navbar.php')
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <?php
        include('partials/_sidebar.php')
        ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Menu Utama
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Keuangan Uptd <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">Rp. 150,0000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Jumlah Pegawai <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                </h4>
                                <?php
                                include('server/koneksi.php');
                                $sql    = "SELECT * FROM karyawan";
                                $query    = mysqli_query($koneksi, $sql);
                                $count    = mysqli_num_rows($query);
                                echo "<h2 class='mb-5'>$count Pegawai</h2>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Admin Aktif <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                </h4>
                                <?php
                                include('server/koneksi.php');
                                $sql    = "SELECT * FROM user";
                                $query    = mysqli_query($koneksi, $sql);
                                $count    = mysqli_num_rows($query);
                                echo "<h2 class='mb-5'>$count Admin</h2>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Daftar Pegawai UPT. Bank Sampah</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <div class="search-field d-none d-md-block">
                                            <br>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th> NIP </th>
                                                <th> NIK </th>
                                                <th> Golongan </th>
                                                <th> Jabatan & Tugas </th>
                                                <th> Jam </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            //pagination
                                            $batas = 4;
                                            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                                            $previous = $halaman - 1;
                                            $next = $halaman + 1;
                                            $data = mysqli_query($koneksi, "select * from karyawan");
                                            $jumlah_data = mysqli_num_rows($data);
                                            $total_halaman = ceil($jumlah_data / $batas);
                                            $nomor = $halaman_awal + 1;
                                            //end

                                            include('server/koneksi.php');
                                            $query = mysqli_query($koneksi, "select * from karyawan limit $halaman_awal, $batas");
                                            $urut = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                $id = $row['id'];
                                                $nama = $row['nama'];
                                                $nik = $row['nik'];
                                                $nip = $row['nip'];
                                                $gol = $row['gol'];
                                                $jabatan = $row['jabatan'];
                                                $jam = $row['jam'];

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $urut++ ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $nama ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $nik ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $nip ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $gol ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $jabatan ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $jam ?>
                                                    </td>
                                                    <td>
                                                        <a href="edit_karyawan.php?data=edit&id=<?php echo $row['id']; ?>"><i class="mdi mdi-rename-box"></i></a>
                                                        <a href="delete_karyawan.php?id=<?php echo $row['id']; ?>"><i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <!-- PAGINATION -->
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" <?php if ($halaman > 1) {
                                                                            echo "href='?halaman=$previous'";
                                                                        } ?>>Previous</a>
                                            </li>
                                            <?php
                                            for ($x = 1; $x <= $total_halaman; $x++) {
                                            ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                            echo "href='?halaman=$next'";
                                                                        } ?>>Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <?php
            include('partials/_footer.php')
            ?>
</body>

</html>