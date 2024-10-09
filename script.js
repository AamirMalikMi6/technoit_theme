jQuery(document).ready(function ($) {
  $(".toggle input").on("change", function () {
    $("html").attr("data-mode", $(this).is(":checked") ? "dark" : "light");
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#header-am").addClass("sticky-menu");
    } else {
      $("#header-am").removeClass("sticky-menu");
    }
  });

  $(".portfolio-am .portfolio-fiters li").on("click", function () {
    //check if another li has class then remove it
    $(".portfolio-am .portfolio-fiters li").removeClass("filter-active");
    if (!$(this).hasClass("filter-active")) {
      $(this).addClass("filter-active");
    } else {
      $(this).removeClass("filter-active");
    }

    let selectedTab = $(this).attr("data-atrrb");

    if (selectedTab == "1") {
      $(".portfolio-item").show();
    } else {
      $(".portfolio-item").hide();
      $('.portfolio-item[data-atrrb="' + selectedTab + '"]').show();
    }
  });

  $(".testimonial-card-inner").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // client section slider
  $(".clients-wrapper").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 1000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $(".purecounter").each(function () {
    $(this).text("0");

    const updateCounter = () => {
      const target = +$(this).attr("data-counter");
      const c = +$(this).text();

      const increment = target / 200;

      if (c < target) {
        $(this).text(Math.ceil(c + increment));
        setTimeout(updateCounter, 1);
      } else {
        $(this).text(target);
      }
    };

    updateCounter();
  });

  $(".faq-am .faq-accordion-header").on("click", function () {
    var $accordionItem = $(this).closest(".faq-accordion-item");
    var $accordionCollapse = $(this).next(".faq-accordion-collapse");

    $(".faq-am .faq-accordion-item").not($accordionItem).removeClass("is-open");
    $(".faq-am .faq-accordion-collapse")
      .not($accordionCollapse)
      .slideUp()
      .removeClass("faq-show");

    $accordionCollapse.stop(true, true).slideToggle().toggleClass("faq-show");
    $accordionItem.toggleClass("is-open");
  });

  $(".mobile-menu-toggle").on("click", function () {
    $(".mobile-menu-toggle").toggleClass("menu-open");
    $(".navbar-am").toggleClass("menu-open");
  });

  $(".cross-icon-am").on("click", function () {
    $(".mobile-menu-toggle").removeClass("menu-open");
    $(".navbar-am").removeClass("menu-open");
  });


  // protfolio popup 
  $('.portfolio-popup-link').on('click', function(e) {
    e.preventDefault(); // Prevent default link behavior
    var imgSrc = $(this).attr('href'); // Get the image URL from the href
    $('#portfolio-popup-img').attr('src', imgSrc); // Set the image source in the popup
    $('#portfolio-popup-am').addClass('show'); // Show the popup with fade-in effect
  });

  // When the close button is clicked
  $('.close-btn').on('click', function() {
    $('#portfolio-popup-am').removeClass('show'); // Hide the popup with fade-out effect
  });

  // Close the popup when clicking outside the image
  $('#portfolio-popup-am').on('click', function(e) {
    if ($(e.target).is('#portfolio-popup-am')) {
      $('#portfolio-popup-am').removeClass('show'); // Hide the popup with fade-out effect
    }
  });












  
});
