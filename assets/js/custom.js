$(document).ready(function () {

  window.addEventListener("scroll", function () {
    let header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 50);
    // header.classList.toggle("fixed-top",window.scrollY > 600);
  });

  let url = window.location.pathname;
  let filename = url.substring(url.lastIndexOf('/') + 1);

    // For inner pages, show light logo and transparent navbar
    if (filename == "restaurant-details.php" || filename == "services.php" || filename == "gallery.php" || filename == "consultation.php") {
      $("header").addClass("white-logo-page");
  }

  $(".navbar-nav .nav-item .nav-link").removeClass("anim-active");
  if (filename == "") {
    filename = "index.php"
  }
  $(`.navbar-nav .nav-item .nav-link[href="${filename}"]`).addClass("anim-active")


  // Will wait for everything on the page to load.
  $(window).bind('load', function () {
    $('.overlay, body').addClass('loaded');
    setTimeout(function () {
      $('.overlay').css({ 'display': 'none' })
    }, 2000)
  });

  // Will remove overlay after 1min for users cannnot load properly.
  setTimeout(function () {
    $('.overlay, body').addClass('loaded');
  }, 60000);

  $("[data-bg-image]").each(function () {
    var img = $(this).data("bg-image");
    if (img) {
        // URL Escape to handle special characters in the URL
        var imageUrl = encodeURI(img);
        
        // Apply background-image CSS
        $(this).css({
            backgroundImage: "url(" + imageUrl + ")"
        });
    } else {
        console.warn("No image path found for element with data-bg-image.");
    }
});


  });




