<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-end">
        <img src="./image/logo.webp" alt="">
        <img src="./image/logo-text.png" alt="">
        
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" <?php if($page == 'home') echo 'class="active"'?>>Home</a></li>
          <li><a href="about.php" <?php if($page == 'about') echo 'class="active"'?>>About Us</a></li>
          <li><a href="projects.php" <?php if($page == 'gallery') echo 'class="active"'?>>Projects</a></li>
          <li><a href="patientproject.php" <?php if($page == 'patient') echo 'class="active"'?>>Patent Projects</a></li>
          <li><a href="./gallery.php" <?php if($page == 'photo') echo 'class="active"'?>>Photo Gallery</a></li>
          <li><a href="event.php" <?php if($page == 'event') echo 'class="active"'?>>Events</a></li>
          <li><a href="contact.php" <?php if($page == 'contact') echo 'class="active"'?>>Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>