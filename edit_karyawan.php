<?php
include('partials/_header.php');
?>

<body>
    <?php
    include "server/koneksi.php";
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * from karyawan where id = '" . $_GET['id'] . "'");
    $hasil = mysqli_fetch_array($tampil);

    if (isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $gol = $_POST['gol'];
        $jabatan = $_POST['jabatan'];
        $jam = $_POST['jam'];
        $update = mysqli_query($koneksi, "UPDATE karyawan SET nama ='" . $nama . "', nip ='" . $nip . "', nik ='" . $nik . "', gol ='" . $gol . "',jabatan ='" . $jabatan . "',jam ='" . $jam . "' WHERE id = '" . $_GET['id'] . "'");
        if ($update) {
            header("Location:index.php");
        } else {
            echo "gagal update data";
        }
    }
    ?>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php
        include('partials/_navbar.php')
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php
            include('partials/_sidebar.php')
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Menu form</h4>
                                    <p class="card-description"> Edit Data Pegawai </p>
                                    <?php
                                    $sql2 = "select * from karyawan where id='$id'";
                                    $q2 = mysqli_query($koneksi, $sql2);
                                    while ($r2 = mysqli_fetch_array($q2)) {
                                        $id = $r2['id'];
                                        $nama = $r2['nama'];
                                        $nip = $r2['nip'];
                                        $nik = $r2['nik'];
                                        $gol = $r2['gol'];
                                        $jabatan = $r2['jabatan'];
                                        $jam = $r2['jam'];

                                    ?>
                                    <?php
                                    } ?>
                                    <form class="forms-sample" action="" method="POST" class="form-group">
                                        <div class="form-group">
                                            <label for="">Nama :</label>
                                            <input type="text" name="nama" class=" form-control" placeholder="Nama" value="<?php echo $nama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nip :</label>
                                            <input type="text" name="nip" class=" form-control" placeholder="Nip" value="<?php echo $nip; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nik :</label>
                                            <input type="text" name="nik" class=" form-control" placeholder="Nik" value="<?php echo $nik; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Golongan :</label>
                                            <input type="text" name="gol" class=" form-control" placeholder="Golongan" value="<?php echo $gol; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jabatan :</label>
                                            <input type="text" name="jabatan" class=" form-control" placeholder="Jabatan/tugas" value="<?php echo $jabatan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jam :</label>
                                            <input type="time" name="jam" class=" form-control" placeholder="Jam" value="<?php echo $jam; ?>">
                                        </div>
                                        <input type="submit" name="kirim" value="save" class="btn btn-gradient-primary me-2" />
                                        <a href="index.php" ?><button class="btn btn-light">Cancel</button>
                                    </form>
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