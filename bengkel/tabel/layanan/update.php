<!DOCTYPE html>
<html lang="en">
  <?php require '../head.php' ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     <?php require '../side.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php require '../nav.php' ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Update Data</h4>
                    <?php
                    require '../../koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi , "SELECT * FROM layanan WHERE id_layanan = $id");
                    $d = mysqli_fetch_assoc($sql);
                    ?>

                    <form class="forms-sample" method="POST" action="prosesUpdate.php">

                      <div class="form-group">
                        <!-- <label>Nama</label> -->
                        <input type="text" name="id" value="<?= $d['id_layanan'] ?>" hidden class="form-control" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" name="nama" value="<?= $d['nama_layanan']; ?>" class="form-control" placeholder="Nama Layanan">
                      </div>
                      <div class="form-group">
                        <label>Harga Layanan</label>
                        <input type="text" name="harga" value="<?= $d['harga']; ?>" class="form-control" placeholder="Harga Layanan">
                      </div>
                      
                      <button type="submit" name="edit" class="btn btn-success mr-2">Update</button>
                      
                    </form>

                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php require '../foot.php' ?>
  </body>
</html>