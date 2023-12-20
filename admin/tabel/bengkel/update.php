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
                    $sql = mysqli_query($koneksi , "SELECT * FROM bengkel WHERE id = $id");
                    $d = mysqli_fetch_assoc($sql);
                    ?>

                                    <form class="forms-sample" method="post" action="prosesUpdate.php"
                                        enctype="multipart/form-data">

                                        <div class="form-group">
                                            <!-- <label>Nama</label> -->
                                            <input type="text" name="ID_Bengkel" value="<?= $d['id']; ?>" hidden
                                                class="form-control" placeholder="Name">
                                            <input type="text" name="fotoLama" value="<?= $d['foto']; ?>" hidden
                                                class="form-control" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Bengkel</label>
                                            <input type="text" name="Nama_Bengkel" value="<?= $d['nama']; ?>"
                                                class="form-control" placeholder="Nama Bengkel">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Bengkel</label>
                                            <input type="text" name="Alamat_Bengkel" value="<?= $d['alamat']; ?>"
                                                class="form-control" placeholder="Password Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="text" name="Nomor_Telepon" value="<?= $d['noHp']; ?>"
                                                class="form-control" placeholder="Alamat Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="Email" value="<?= $d['email']; ?>"
                                                class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" name="Deskripsi_Bengkel" value="<?= $d['deskripsi']; ?>"
                                                class="form-control" placeholder="Deskripsi Bengkel">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Buka</label>
                                            <input type="time" name="Jam_Operasional" value="<?= $d['buka']; ?>"
                                                class="form-control" placeholder="Jam Buka">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Tutup</label>
                                            <input type="time" name="tutup" value="<?= $d['buka']; ?>"
                                                class="form-control" placeholder="Jam Tutup">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Layanan</label>
                                            <select name="id_layanan" id="" class="form-control">
                                                <?php 
                                                $sql2 = mysqli_query($koneksi , "SELECT * FROM layanan");
                                                while($data = mysqli_fetch_assoc($sql2)){
                                                  $selected = ($data['id_layanan'] == $d['id_layanan']) ? "selected" : "";
                                                ?>
                                                <option value="<?= $data['id_layanan'] ?>" <?= $selected ?>>
                                                    <?= $data['nama_layanan'] ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Operator</label>
                                            <select name="operator" id="" class="form-control">
                                                <?php 
                         $sql2 = mysqli_query($koneksi , "SELECT * FROM operator");
                        while($data = mysqli_fetch_assoc($sql2)){
                          $selected = ($data['id_op'] == $d['id_operator']) ? "selected" : "";
                        ?>
                                                <option value="<?= $data['id_op'] ?>" <?= $selected ?>>
                                                    <?= $data['username'] ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="gambar" value="<?= $d['foto'] ?>"
                                                class="form-control" placeholder="Foto">
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