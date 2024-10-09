<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechNoit-Simple</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
    integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
    integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
<header id="header-am" class="header-am flex-main flex-center sticked">
    <!-- logo then menu then CTA then night mode -->
    <div class="header-menu-am max-width-container flex-main flex-center flex-between">
      
      <!-- logo -->
      <div class="logo-mi6 flex-main flex-center">
          <a href="index.php"> <img src="images/logo.png" alt="Mi6-Simple"></a>
      </div>

      <!-- Toggle Button for Mobile Menu -->
      <div class="mobile-menu-toggle">
        <span class="menu-icon">&#9776;</span>
      </div>

      <!-- menu -->
      <nav id="navbar-am" class="menu navbar-am">
        <ul>
          <!-- cross icon -->
            <li class="cross-icon-am"><span class="menu-icon">&#735;</span></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>
          <li><a href="ourteam.php">Teams</a></li>
          <li class="dropdown-am"><a href="#"><span>Menu</span>
          <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>

            <ul class="dropdown-menu-am">
              <li><a href="#">Submenu 1</a></li>
              <li><a href="#">Submenu 2</a></li>
              <li><a href="#">Submenu 3</a></li>
            </ul>
          </li>
          <li><a href="blogs.php">News</a></li>
        </ul>
      </nav>

      <!-- CTA (hidden on mobile) -->
      <div class="menu-btn">
        <a href="contact.php" class="btn cta-blue">Get Quotes</a>
      </div>

      <!-- night mode button centered -->
      <div class="night-mode-btn">
        <label class="toggle" arial-label="Toggle dark mode">
          <input type="checkbox">
          <span>☀️</span>
          <span>🌙</span>
        </label>
      </div>

    </div>
</header>