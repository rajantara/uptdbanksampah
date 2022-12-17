<?php
include('partials/_header.php');
include "server/koneksi.php";

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$query = mysqli_query($koneksi, "select * from user where id_user limit 1");


?>

<body>
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
                                    <p class="card-description"> Detail Admin</p>
                                    <form class="forms-sample" action="" method="POST" class="form-group">
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="form-group">
                                                <label for="">Username :</label>
                                                <input type="text" name="nama" class=" form-control" placeholder="Nama" value="<?php echo ($_SESSION["username"]); ?>">
                                            </div>
                                        <?php
                                        } ?>
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