/* Changing active states */
jQuery(document).ready(function($) {
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();

  // Account for home page with empty path
  if (path == "") {
    path = "index.php";
  }

  var target = $('.navbar-nav .nav-link[href="' + path + '"]');
  // Add active class to target link
  target.addClass("active");
});

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
  if ($("header").offset().top > 50) {
    $(".fixed-header").addClass("add-background");
  } else {
    $(".fixed-header").removeClass("add-background");
  }
});

$(window).scroll(function() {
  windowWidth = $(window).width();
  if (windowWidth <= 420) {
    if ($("header").offset().top > 50) {
      $(".contact-info").hide();
    } else if ($("header").offset().top < 50) {
      $(".contact-info").show();
    }
  }
});
