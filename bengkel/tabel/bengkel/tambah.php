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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Data</h4>
                    
                    <?php
                    require '../../koneksi.php';
                    $sql1 = mysqli_query($koneksi , "SELECT * FROM layanan");
                    ?>
                    <form class="forms-sample" method="POST" action="prosesTambah.php"  enctype="multipart/form-data">
                      
                    <div class="form-group">
                        <label>Nama Benkel</label>
                        <input type="text" name="Nama_Bengkel" class="form-control" placeholder="Nama Benkel">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="Alamat_Bengkel" class="form-control" placeholder="Alamat Bengkel">
                      </div>
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="Nomor_Telepon" class="form-control" placeholder="Nomor Telepon">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label>Deskripsi Bengkel</label>
                        <input type="text" name="Deskripsi_Bengkel" class="form-control" placeholder="Deskripsi Bengkel">
                      </div>
                      <div class="form-group">
                        <label>Jam Buka</label>
                        <input type="time" name="Jam_Operasional" class="form-control" placeholder="Jam Buka">
                      </div>

                      <div class="form-group">
                        <label>Jam Tutup</label>
                        <input type="time" name="tutup" class="form-control" placeholder="Jam Tutup">
                      </div>

                      <div class="form-group">
                      <label for="">Layanan</label>
                      <select name="id_layanan" id="" class="form-control">
                      <?php 
                        while($d = mysqli_fetch_array($sql1)){
                        ?>
                        <option value="<?= $d['id_layanan'] ?>"> <?= $d['nama_layanan'] ?> </option> 
                      <?php } ?>
                      </select>
                      </div>

                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="gambar" class="form-control" placeholder="Foto">
                      </div>



                      
                      <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah</button>
                      
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