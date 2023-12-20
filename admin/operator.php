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
                                    <h4 class="card-title">Tabel Operator</h4>
                                    <a href="tabel/operator/tambah.php">
                                        <button type="button" class="btn btn-primary btn-md">Tambah</button>
                                    </a>

                                    <!-- <p class="card-description"> Add class <code>.table</code> -->
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                require 'koneksi.php';
                                                $sql = mysqli_query($koneksi , "SELECT * FROM operator");
                                                while ($d = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>

                                                    <td><?= $d['username']; ?></td>
                                                    <td><?= $d['password']; ?></td>

                                                    <td>
                                                        <a href="tabel/operator/update.php?id=<?= $d['id_op'] ?>">
                                                            <button type="button"
                                                                class="btn btn-warning btn-md">Update</button>
                                                        </a>
                                                        <a href="tabel/operator/hapus.php?id=<?= $d['id_op'] ?>">
                                                            <button type="button"
                                                                class="btn btn-danger btn-md">Delete</button>
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