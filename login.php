<?php
session_start();
include("server/koneksi.php");

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}


//for login
if (isset($_POST["submit"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<script>alert("Both Fields are required")</script>';
    } else {
        $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
        $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if (password_verify($password, $row["password"])) {
                    //return true
                    $_SESSION["username"] = $username;
                    $_SESSION["level"] = $level;
                    $_SESSION["id_user"] = $id_user;
                    $_SESSION["loggedin"] = true;
                    header("Location:index.php");
                } else {
                    //return false;
                    echo '<script>alert("Wrong User Details")</script>';
                }
            }
        } else {
            header("Location:pages/samples/error-404.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UPTD BANK SAMPAH</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- for modal -->
    <script>
        const MyModal = document.getElementById('myModal');
        const myInput = document.getElementById('myInput');

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <!-- end -->

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img width="50px" height="50px" style="display:block; margin:auto;" src="assets/images/logo-mini.svg" alt="logo" />
                            </div>
                            <h4>Hallo! Selamat Datang</h4>
                            <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>
                            <form action="" method="post" class="pt-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" name="submit" value="Masuk" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Ingat Masuk Saya! </label>
                                    </div>
                                    <a href="pages/samples/error-404.php" class="auth-link text-black">Lupa password ya?</a>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <a href="http://www.facebook.com" class="mdi mdi-facebook me-2"></a>Hubungkan ke facebook
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Tidak Memiliki Akun? <a href="register.php" class="text-primary">Daftar!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>