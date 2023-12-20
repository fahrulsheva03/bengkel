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

                                    <form class="forms-sample" method="POST" action="prosesTambah.php">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="Nama_Pengguna" class="form-control"
                                                placeholder="Nama Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="Email_Pengguna" class="form-control"
                                                placeholder="Email Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password_pengguna" class="form-control"
                                                placeholder="Password Pengguna">
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