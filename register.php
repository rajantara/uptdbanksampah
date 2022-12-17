<?php
session_start();
include("server/koneksi.php");

//registrasi

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //prosers registrasi

  $username = $_POST['username'];
  $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
  $password = password_hash($password, PASSWORD_DEFAULT);
  $level = $_POST['level'];
  if (!empty($username) && !empty($password) &&  !is_numeric($username)) {
    //save database datauptd
    $query = "INSERT INTO USER (username, password,level) VALUES ('$username','$password','$level')";
    mysqli_query($koneksi, $query);
    header("location: login.php");

    die;
  } else {
    echo "Error";
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
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
              <h4>Baru Disini?</h4>
              <h6 class="font-weight-light">Mendaftar itu mudah. hanya beberapa langka!</h6>
              <form action="" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" id="level" name="level">
                    <option style="color:red;">--Pilih Level--</option>
                    <option value="admin">admin</option>
                    <option value="karyawan">pegawai</option>
                  </select>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Saya setuju dengan persyaratan & kondisi </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" value="Daftar" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" />
                </div>
                <div class="text-center mt-4 font-weight-light"> Sudah Mempunyai Akun? <a href="index.php" class="text-primary">Masuk</a>
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