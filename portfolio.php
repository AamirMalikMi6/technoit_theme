<?php include('header.php');
include('Pages-Heros.php');
?>

<div class="single-page">

<!-- portfolio section  -->

<section id="portfolio-am" class="portfolio-am">
    <div class="max-width-container">
      <div class="portfolio-tabs">
        <div class="postfolio-tabs-inner">
          <ul class="portfolio-fiters">
            <li class="filter-active" data-atrrb="1">All</li>
            <li data-atrrb="2">App Design</li>
            <li data-atrrb="3">App Development</li>
            <li data-atrrb="4">Branding</li>
            <li data-atrrb="5">It Solutions</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="portfolio-container flex-main">

        <div class="portfolio-item filter-app all appdesign" data-atrrb="2">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="portfolio-item filter-app all appdev" data-atrrb="3">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="portfolio-item filter-app all appdesign" data-atrrb="2">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="portfolio-item filter-app all branding" data-atrrb="4">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="portfolio-item filter-app all itsol" data-atrrb="5">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="portfolio-item filter-app all branding" data-atrrb="4">
            <div class="portfolio-wrap">
              <a href="images/netwoooo.jpg" class="portfolio-popup-link"><img src="images/netwoooo.jpg" alt=""></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section>
</div>

<!-- Popup container -->
<div id="portfolio-popup-am" class="portfolio-popup-am">
  <span class="close-btn">&times;</span>
  <img class="popup-content" id="portfolio-popup-img" src="">
</div>






<?php include('footer.php'); ?>