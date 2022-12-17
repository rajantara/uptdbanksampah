<?php
include('partials/_header.php');
?>

<body>
  <?php
  include('proses.php');
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
                  <p class="card-description"> Tambah Pegawai </p>
                  <form class="forms-sample" action="" method="POST" class="form-group">
                    <div class="form-group">
                      <label for="">Nama :</label>
                      <input type="text" name="nama" class=" form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="">Nip :</label>
                      <input type="text" name="nip" class=" form-control" placeholder="Nip">
                    </div>
                    <div class="form-group">
                      <label for="">Nik :</label>
                      <input type="text" name="nik" class=" form-control" placeholder="Nik">
                    </div>
                    <div class="form-group">
                      <label for="">Golongan :</label>
                      <input type="text" name="gol" class=" form-control" placeholder="Golongan">
                    </div>
                    <div class="form-group">
                      <label for="">Jabatan & tugas :</label>
                      <input type="text" name="jabatan" class=" form-control" placeholder="Jabatan & tugas">
                    </div>
                    <div class="form-group">
                      <label for="">Jam :</label>
                      <input type="time" name="jam" class=" form-control">
                    </div>
                    <input type="submit" name="save" value="save" class="btn btn-gradient-primary me-2" />
                    <a href="" ?><button class="btn btn-light">Cancel</button>
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