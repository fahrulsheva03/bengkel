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
                    $sql = mysqli_query($koneksi , "SELECT * FROM user WHERE id_user = $id");
                    $d = mysqli_fetch_assoc($sql);
                    ?>

                                    <form class="forms-sample" method="post" action="prosesUpdate.php">

                                        <div class="form-group">
                                            <input type="text" name="id" value="<?= $d['id_user']; ?>" hidden
                                                class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="Nama_Pengguna" value="<?= $d['nama']; ?>"
                                                class="form-control" placeholder="Nama Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="Email_Pengguna" value="<?= $d['email']; ?>"
                                                class="form-control" placeholder="Email Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" value="<?= $d['username']; ?>"
                                                class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password_pengguna"
                                                value="<?= $d['password']; ?>" class="form-control"
                                                placeholder="Password Pengguna">
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