<?php
// Function to get the count from a specific table
function getCount($tableName, $column) {
    global $con; // Menggunakan variabel koneksi global

    // Cek apakah koneksi sudah dibuat
    if (!$con) {
        // Jika belum, coba membuat koneksi
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $db_name = 'diagnosa_kucing';

        $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        // Check the connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Query untuk mendapatkan jumlah
    $query = "SELECT COUNT($column) AS count FROM $tableName";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0; // Handle the error as needed
    }
}

// Usage:
$totalPenyakit = getCount('penyakit', 'id_penyakit');
$totalPasien = getCount('pengguna', 'id_pengguna');
$totalKucingTerdiagnosa = getCount('riwayat', 'id_penyakit');
$totalKucingTidakTerdiagnosa = getCount('riwayat', 'id_penyakit IS NULL');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - Append Bootstrap Temlate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

	  <a href="index.php" title="Sistem Pakar Forward Chaining" alt="Sistem Pakar Forward Chaining" class="navbar-brand">
				<img alt="Kincai Media" src="../assets/images/logo.png" height="60px" width="60px">
	</a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="../index.php">Login Disini</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/background.jpeg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang Di Website Diagnosa Penyakit Kucing</h2>
            <p data-aos="fade-up" data-aos-delay="200">Diagnosa Menggunakan Metode Forward Chaining</p>
          </div>
        </div>
      </div>

    </section>

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Website Diagnosa Kucing</h2>
            <p>Website ini bertujuan untuk membantu para pemilik kucing yang sakit dan ingin mendapatkan diagnosis. Diagnosis ini tidak dapat dikatakan 100% akurat, tetapi kami mendapat sumber ini dari laporan hasil pakar, sehingga kami dapat memberikan kepercayaan lebih dengan website ini.</p>
            <a href="#" class="read-more"><span>Diagnosa Sekarang</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>System Pakar</h3>
                  <p>System Pakar yang kami gunakan yaitu metode Forward Chaining</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Pelaporan Pakar</h3>
                  <p>Kami menggunakan Dokumentasi Hasil Pakar terpercaya agar website lebih dipercayai banyak orang.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Up To Date</h3>
                  <p>Website ini akan selalu up to date untuk penyaki penyakit terbaru yang bisa menjangkiti kuncing.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Persentase Diagnosa</h3>
                  <p>Dari banyaknya yang melakukan diagnosa hanya sedikit yang tidak diketahui penyakitnya, tetapi banyak yang terbantu.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">
    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalPenyakit; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Total Penyakit</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalPasien; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Pasien</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalKucingTidakTerdiagnosa; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Kucing Tidak Terdiagnosa</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalKucingTerdiagnosa; ?>" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Kucing Terdiagnosa</p>
                </div>
            </div><!-- End Stats Item -->
        </div>
    </div>
</section><!-- End Stats Section -->

    <!-- Features Section - Home Page -->
    <section id="features" class="features">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Fitur - Fitur Website Diagnosa Ini</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Fitur CRUD untuk menambahkan penyakit, gejala, rules.</h3>
            <p>
              Fitur ini berfungsi untuk menambahkan penyakit, gejala dan rules agar pakar dokter bisa mudah untuk menggunakan website ini.
            </p>
            <a href="#" class="btn btn-get-started">Login Sekarang</a>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
              <img src="assets/img/crud.png" alt="" class="stack-front">
              <img src="assets/img/crud2.png" alt="" class="stack-back">
            </div>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
          <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="assets/img/login-page.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3>Feature Login Admin, User dan Dokter</h3>
            <p>Login antara admin, user dan dokter di bedakan karena agar keamanan dari website ini terjaga.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Dokter bisa menambahkan penyakit, gejala dan rules.</span></li>
              <li><i class="bi bi-check"></i><span> Admin user bisa menambahkan dokter dan user tetapi tidak bisa menambahkan penyakit, gejala dan rules.</span></li>
              <li><i class="bi bi-check"></i> <span>user hanya bisa mendiagnosis dan tidak dapat menjelajah lebih dalam di admin page</span>.</li>
            </ul>
            <a href="#" class="btn btn-get-started align-self-start">Registrasi sekarang</a>
          </div>
        </div><!-- Features Item -->

      </div>

    </section>

    <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Pertanyaan - pertanyaan yang sering di tanyakan oleh user.
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Apakah diagnosa ini 100% terjamin?</span></h3>
                <div class="faq-content">
                  <p>Kami tidak menjamin 100% terjamin untuk diagnosa ini. Tetapi kami mendapatkan jurnal pakar langsung dari yang terpercaya jadi untuk tinggal kepercayaan terhadap website ini bisa lebih karena menggunakan data yang akurat.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Apakah diagnosa disini berbayar?</span></h3>
                <div class="faq-content">
                  <p>100% diagnosa disini gratis tanpa biaya apapun. walaupun gratis kami tetap menjalankan prosedur agar tidak salah data pakar.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item--><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- End Faq Section -->

    <!-- Team Section - Home Page -->
    <section id="team" class="team">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Team yang membuat website ini</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-info text-center">
              <h4>Rasya Dika Pratama</h4>
              <span>Hacker - Coding</span>
              <p>Bertugas mengcoding keseluruhan website ini. menggunakan HTML, CSS, JS, PHP.</p>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-info text-center">
              <h4>Rifky Prasetyo</h4>
              <span>Desainer - Layouting</span>
              <p>Desainer logo dan layout sedikit dari website ini.</p>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-info text-center">
              <h4>Faiz Alawi</h4>
              <span>Document Controller</span>
              <p>Bertugas sebagai pencari jurnal jurnal terpercaya dari pakar yang sudah terverevikasi.</p>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-info text-center">
              <h4>Batara Raditya Wijaya</h4>
              <span>Laporan Penugasan</span>
              <p>Bertugas sebagai pembuat laporan dari website ini bertujuan agar dipahami oleh banyak orang</p>
            </div>
          </div><!-- End Team Member -->
        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- Call-to-action Section - Home Page -->
    <section id="call-to-action" class="call-to-action">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Diagnosa Sekarang</h3>
              <p>Gratis diagnosa dilahkan login di bawah ini, belum mempunyai akun bisa registrasi.</p>
              <a class="cta-btn" href="#">Diagnosa Sekarang!!</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Call-to-action Section -->


    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Jika ada masalah di website bisa kontak kami disini</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kulon, Kec. Purwokerto Sel.</p>
                  <p>Kabupaten Banyumas, Jawa Tengah 53141</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62 812-2784-8422</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>dikagilang2007@gmail.com</p>
                  <p>admin@zephyr-id.tech</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Diagnosa Opens</h3>
                  <p>All Days</p>
                  <p>24/7</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
        <a href="index.php" title="Sistem Pakar Forward Chaining" alt="Sistem Pakar Forward Chaining" class="navbar-brand">
				<img alt="Kincai Media" src="../assets/images/logo.png" height="60px" width="60px">
	</a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kulon, Kec. Purwokerto Sel.</p>
          <p>Kabupaten Banyumas, Jawa Tengah 53141</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 812-2784-8422</span></p>
          <p><strong>Email:</strong> <span>admin@zephyr-id.tech</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright 2023  </span> <strong class="px-1">Dika Teams</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Desain website template by bootstrapmade
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>