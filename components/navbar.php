  <!-- ***** Header Area Start ***** -->
  <header class="header_area" id="header">
      <div class="container-fluid h-100">
          <div class="row h-100">
              <div class="col-12 h-100">
                  <nav class="h-100 navbar navbar-expand-lg">

                      <a class="navbar-brand" href="index.php">GARAGE LOCATOR</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav"
                          aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span
                              class="fa fa-bars"></span></button>
                      <!-- Nav -->
                      <div class="collapse navbar-collapse" id="dorneNav">
                          <ul class="navbar-nav mr-auto" id="dorneMenu">
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link" href="about.php">About Us</a>
                              </li>
                              <!-- <li class="nav-item">
                                    <a class="nav-link" href="layanan.php">Service</a>
                                </li> -->
                              <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="pencarian.php">Pencarian</a>
                                        <a class="dropdown-item" href="listing.php">Menu</a>
                                        <a class="dropdown-item" href="singleListing.php">Menu Tunggal</a>
                                        <a class="dropdown-item" href="contact.html">Kontak Kami</a>
                                    </div>
                                </li> -->
                              <li class="nav-item">
                                  <a class="nav-link" href="contact.php">Contact </a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu <i
                                          class="fa fa-angle-down" aria-hidden="true"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                      <a class="dropdown-item" href="index.php">Home</a>
                                      <a class="dropdown-item" href="about.php">About Us</a>
                                      <a class="dropdown-item" href="contact.php">Contact</a>
                                      <a class="dropdown-item" href="detail.php">Details</a>
                                      <a class="dropdown-item" href="listing.php">Jelajahi Bengkel</a>
                                      <!-- <a class="dropdown-item" href="singleListing.php"></a> -->
                                      <!-- <a class="dropdown-item" href="kontak.php">Kontak Kami</a> -->
                                  </div>
                              </li>
                          </ul>
                          <!-- Search btn -->
                          <div class="dorne-search-btn">
                              <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                          </div>
                          <!-- Signin btn -->
                          <?php if(isset($_SESSION['login'])) { ?>
                          <div class="dorne-signin-btn">
                              <a href="logout.php" class="btn dorne-btn">Logout</a>
                          </div>
                          <?php }else{ ?>
                          <div class="dorne-signin-btn">
                              <a href="login.php" class="btn dorne-btn">Log In / Sign Up</a>
                          </div>

                          <?php } ?>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->