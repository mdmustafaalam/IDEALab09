<?php $page='gallery'; require './components/head.php' ?>
  
  <title>Projects</title>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require './components/header.php'?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero" class="breadcrumbs d-flex align-items-center" style="background-image: url('./image/project.webp');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Projects</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-it">It</li>
            <li data-filter=".filter-mechanical">Mechanical</li>
            <li data-filter=".filter-agriculture">Agriculture</li>
            <li data-filter=".filter-scince">Scince</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-it">
              <div class="portfolio-content h-100">
                <img src="./image/projects/it_img1.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>it 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/it_img1.webp" title="it 1" data-gallery="portfolio-gallery-it" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-mechanical">
              <div class="portfolio-content h-100">
                <img src="./image/projects/img8.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>mechanical 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/img8.webp" title="mechanical 1" data-gallery="portfolio-gallery-mechanical" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-agriculture">
              <div class="portfolio-content h-100">
                <img src="./image/projects/agriculture_img1.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>agriculture 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/agriculture_img1.webp" title="agriculture 1" data-gallery="portfolio-gallery-agriculture" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-scince">
              <div class="portfolio-content h-100">
                <img src="./image/projects/science_img1.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>scince 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/science_img1.webp" title="agriculture 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-it">
              <div class="portfolio-content h-100">
                <img src="./image/projects/it_img2.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>it 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/it_img2.webp" title="it 2" data-gallery="portfolio-gallery-it" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-mechanical">
              <div class="portfolio-content h-100">
                <img src="./image/projects/img12.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>mechanical 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/img12.webp" title="mechanical 2" data-gallery="portfolio-gallery-mechanical" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-agriculture">
              <div class="portfolio-content h-100">
                <img src="./image/projects/agriculture_img2.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>agriculture 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/agriculture_img2.webp" title="agriculture 2" data-gallery="portfolio-gallery-agriculture" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-scince">
              <div class="portfolio-content h-100">
                <img src="./image/projects/science_img2.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>scince 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/science_img2.webp" title="agriculture 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-it">
              <div class="portfolio-content h-100">
                <img src="./image/projects/it_img3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>it 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/it_img3.webp" title="it 3" data-gallery="portfolio-gallery-it" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-mechanical">
              <div class="portfolio-content h-100">
                <img src="./image/projects/img17.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>mechanical 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/img17.webp" title="mechanical 3" data-gallery="portfolio-gallery-mechanical" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-agriculture">
              <div class="portfolio-content h-100">
                <img src="./image/projects/agriculture_img3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>agriculture 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/agriculture_img3.webp" title="agriculture 2" data-gallery="portfolio-gallery-agriculture" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-scince">
              <div class="portfolio-content h-100">
                <img src="./image/projects/science_img3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>scince 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="./image/projects/science_img3.webp" title="agriculture 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require './components/footer.php'?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <?php require './components/scripts.php'?>
</body>

</html>