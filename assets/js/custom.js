$(document).ready(function () {

  window.addEventListener("scroll", function () {
    let header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 50);
    // header.classList.toggle("fixed-top",window.scrollY > 600);
  });

  let url = window.location.pathname;
  let filename = url.substring(url.lastIndexOf('/') + 1);

  // For inner pages, show light logo and transparent navbar
  if (filename == "restaurant-details.php" || filename == "special-deals.php" || filename == "item-details.php" || filename == "menu-customize.php" || filename == "edit-menu-customize.php") {
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

  $('.quantity-control').each(function () {
    var $quantityInput = $(this).find('.quantity-input');

    // Increment button
    $(this).find('.quantity-right-plus').click(function (e) {
      e.preventDefault();
      var quantity = parseInt($quantityInput.val());
      $quantityInput.val(quantity + 1);
    });

    // Decrement button
    $(this).find('.quantity-left-minus').click(function (e) {
      e.preventDefault();
      var quantity = parseInt($quantityInput.val());
      if (quantity > 1) {
        $quantityInput.val(quantity - 1);
      }
    });
  });

  // global ct select box start
  $('.ct-select .select-box').on('click', function () {
    $(this).next('.select-options').toggle().toggleClass("open");
  });

  $('.ct-select .select-options .option').on('click', function () {
    var value = $(this).attr('data-value');
    var text = $(this).text();
    $(this).closest('.ct-select').find('.selected-option').text(text);
    $(this).closest('.select-options').removeClass("open").hide();

    console.log("Selected value:", value);
  });

  $(document).on('click', function (e) {
    if (!$(e.target).closest('.ct-select').length) {
      $('.ct-select .select-options').hide();
    }
  });

  $('.sec-cancellation .form-main .inp-txt').hide();
  $('.sec-cancellation .form-main .check-area .form-check #check5').change(function() {
    $('.sec-cancellation .form-main .inp-txt').slideToggle();
});

// ratings

 $('.rating-user-stars').each(function() {
  var $stars = $(this).find('i');
  var $ratingValue = $(this).closest('.write-rev-user').find('.rating-value h6');
  var currentRating = $(this).data('rating');
  updateRating($stars, currentRating);

  $stars.on('mouseover', function() {
      var index = $(this).index();
      updateRating($stars, index + 1);
      $ratingValue.text('Rating: ' + (index + 1));
  });


  $stars.on('mouseout', function() {
      updateRating($stars, currentRating);
      $ratingValue.text('Rating: ' + currentRating);
  });

  $stars.on('click', function() {
      currentRating = $(this).index() + 1;
      $(this).closest('.rating-user-stars').data('rating', currentRating);
      updateRating($stars, currentRating);
      $ratingValue.text('Rating: ' + currentRating);
  });
});

function updateRating($stars, rating) {
  $stars.each(function(index) {
      if (index < rating) {
          $(this).removeClass('fa-light').addClass('fa-solid');
      } else {
          $(this).removeClass('fa-solid').addClass('fa-light');
      }
  });
}

});

document.querySelectorAll(".pagination .page-link").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default link behavior

    // Remove the active class from all page items
    document.querySelectorAll(".pagination .page-item").forEach((item) => {
      item.classList.remove("active");
    });

    // Add the active class to the clicked link's parent item
    this.parentElement.classList.add("active");
  });
});

    $('.drop-toggle').click(function() {
      var $dropdown = $(this).closest('.custom-dropdown');
      $dropdown.find('.dropdown-options').toggle();
      $dropdown.toggleClass('open');
  });

  $('.dropdown-options .clear-btn').on('click', function() {
      var $dropdown = $(this).closest('.custom-dropdown');
      $dropdown.find('.form-check-input').prop('checked', false);
  });

  $('.dropdown-options .ok-btn').click(function() {
      var $dropdown = $(this).closest('.custom-dropdown');
      $dropdown.find('.dropdown-options').hide();
      $dropdown.removeClass('open');
  });

  function togglePassword(toggleClass) {
    $(document).on('click', toggleClass, function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      
      let input = $(this).siblings('input'); 
      
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  }
  togglePassword('.toggle-password');
  