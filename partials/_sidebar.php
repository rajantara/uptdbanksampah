<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="index.php" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/faces-clipart/pic-1.png" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Menu Utama</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_karyawan.php">
        <span class="menu-title">Tambah Pegawai</span>
        <i class="mdi mdi-account-plus menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="info_admin.php">
        <span class="menu-title"> Detail Admin</span>
        <i class="mdi mdi-account-card-details menu-icon"></i>
      </a>
    </li>
    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3">Projects</h6>
        </div>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">Coming Soon</button>
      </span>
    </li>
  </ul>
</nav>