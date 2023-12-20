<!DOCTYPE html>
<html lang="en">
  <?php require 'head.php' ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     <?php require 'side.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php require 'nav.php' ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Bengkel</h4>
                    <a href="tabel/bengkel/tambah.php">
                      <button type="button" class="btn btn-primary btn-md">Tambah</button>
                    </a>

                    <!-- <p class="card-description"> Add class <code>.table</code> -->
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nama Bengkel</th>
                            <th>Alamat Bengkel</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                            <th>Jam Buka</th>
                            <th>Jam Tutup</th>
                            <th>Layanan</th>
                            <th>Foto</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php 
                        require 'koneksi.php';
                        $sql = mysqli_query($koneksi , "SELECT * FROM bengkel
                        JOIN
                        layanan
                        ON
                        bengkel.id_layanan = layanan.id_layanan
                        ");
                        while ($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                          
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['alamat']; ?></td>
                          <td><?= $d['noHp']; ?></td>
                          <td><?= $d['email']; ?></td>
                          <td><?= $d['deskripsi']; ?></td>
                          <td><?= $d['buka']; ?></td>
                          <td><?= $d['tutup']; ?></td>
                          <td><?= $d['nama_layanan']; ?></td>
                          <td> <img src="assets/img/<?= $d['foto']; ?>" alt="">  </td>
                         
                        <td>
                            <a href="tabel/bengkel/update.php?id=<?= $d['id'] ?>">
                            <button type="button" class="btn btn-warning btn-md">Update</button>
                            </a>
                            <a href="tabel/bengkel/hapus.php?id=<?= $d['id'] ?>">
                            <button type="button" class="btn btn-danger btn-md">Delete</button>
                            </a>
                        </td>
                        </tr>
                        <?php } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php require 'foot.php' ?>
  </body>
</html>