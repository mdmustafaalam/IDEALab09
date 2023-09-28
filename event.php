<?php $page='event'; require './components/head.php' ?>
  <title>Events</title>
  
<style></style></head>

<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

  <!-- ======= Header ======= -->
  <?php require './components/header.php'?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero" class="breadcrumbs d-flex align-items-center" style="background-image: url('./imgmus/10778.webp');">
      <div class="container position-relative d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade">

        <h2>Events</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="./gallery.php">Past Events</a></li>
          <li>Upcoming Events</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <section id="events" >
      <div class="container" >
        <div class="row gap-3">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-4">
                  <img src="./image/jistech23.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                  <div class="card-content p-lg-5 p-md-4 p-2" >
                  <h2 class="jistech">JISTech2k23</h2>
                  <p>Join us for a tech-filled journey, where ideas converge, innovation thrives, and the future unfolds.A dynamic tech symposium showcasing cutting-edge projects, insights, 
                    and a platform for tech enthusiasts to connect and inspire.</p>
                  <h5 class="date-jis">20th Sep 2023</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-8">
                  <div class="card-content p-lg-5 p-md-4 p-2" >
                  <h2 class="jistech">Coding Catalyst: College Hackathon Challenge</h2>
                  <p>"Coding Catalyst: College Hackathon Challenge" is where innovation sparks, and solutions take shape through
                     a whirlwind of coding brilliance.Join us for a coding marathon where minds collide, problems are solved, and 
                     future tech leaders emerge.</p>
                  <h5 class="date-jis">3rd Oct 2023</h5>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="./image/hackathon2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
         
        </div>


      </div>
   </section>

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require './components/footer.php'?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <!-- Vendor JS Files -->
  <?php require './components/scripts.php'?>

</body></html>