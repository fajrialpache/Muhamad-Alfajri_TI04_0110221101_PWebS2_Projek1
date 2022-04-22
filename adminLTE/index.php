<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php require_once 'layout/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php require_once 'layout/navbar.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once 'layout/sidebar.php'; ?>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Projek 1 Semester 2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-body">
            <h4>Follow Sosial Media Saya</h4>
            <div class="d-flex">
              <h5 class="mx-4">Github : <a href="https://github.com/fajrialpache" target="_blank">Alfajri-TI</a></h5>
              <h5>Instagram : <a href="https://instagram.com/fajrialpache" target="_blank">Muhamad Al Fajri</a></h5>
            </div>
            <h4 class="mt-5">Kalkulator BMI (IMT)</h4>
            <form action="projek1(uts)/index.php" method="post">
              <div class="form-group row mt-1">
                <label for="nama" class="col-1 col-form-label">Nama</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                      </div>
                    </div>
                    <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-1 col-form-label">Gender</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div>
                    <input id="gender" name="gender" placeholder="Jenis Kelamin" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="berat" class="col-1 col-form-label">Berat (kg)</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">kg</div>
                    </div>
                    <input id="berat" name="berat" placeholder="Berat Badan" type="number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tinggi" class="col-1 col-form-label">Tinggi (cm)</label>
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">cm</div>
                    </div>
                    <input id="tinggi" name="tinggi" placeholder="Tinggi Badam" type="number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php require_once 'layout/script.php'; ?>
</body>

</html>