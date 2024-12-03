<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo/fav.png" />
    <title>Home</title>
    <?php
    include 'includes/css.php';
    ?>
</head>

<body>

    <?php
include 'includes/header.php';
?>
    <main>
        <section class="sec-home-search">
            <div class="container">
                <div class="search-area">
                    <form action="">
                        <div class="row gx-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                                <div class="input-main">
                                    <button class="btn search-btn">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </button>
                                    <input type="search" class="form-control ct-inp" placeholder="Search Restaurants">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="ct-drp">
                                    <button class="btn ct-btn-prim hvr-bounce-to-right filter-btn drp-tgl"
                                        type="button">
                                        filters
                                    </button>
                                    <div class="ct-menu">
                                        <div class="price-range">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="price-head">Price Range</h6>
                                                <input type="text" id="amount-plus" readonly class="sld-m-txt">
                                            </div>
                                            <div class="rang-slider">
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                        <div class="rest-locate">
                                            <h6>Location</h6>
                                            <input type="search" class="form-control location"
                                                placeholder="Select Location">
                                        </div>
                                        <div class="inp-area">
                                            <label for="delect-dietary-preferences">Select Dietary Preferences</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Dietary Preferences
                                                    <span class="dropdown-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <mask id="mask0_5440_5481" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                height="24">
                                                                <rect width="24" height="24" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_5440_5481)">
                                                                <path
                                                                    d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z"
                                                                    fill="#436F86" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>

                                                <div class="dropdown-options">
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="Vegan">Vegan</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Vegan">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="vegetarian">Vegetarian</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="vegetarian">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="gluten-free">Gluten-free</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="gluten-free">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="dairy-free">Dairy-free</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="dairy-free">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="halal">Halal</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="halal">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="Kosher">kosher</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Kosher">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="low-carb">Low-carb</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="low-carb">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="paleo">Paleo</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="paleo">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="mediterranean">Mediterranean</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="mediterranean">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="pescatarian">Pescatarian</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="pescatarian">
                                                    </div>
                                                    <div class="dropdown-actions">
                                                        <button type="button" class="clear-btn">Clear
                                                            All</button>
                                                        <button type="button" class="ok-btn">Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inp-area">
                                            <label for="select-allergies">Select Allergies</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Allergies
                                                    <span class="dropdown-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <mask id="mask0_5440_5481" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                height="24">
                                                                <rect width="24" height="24" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_5440_5481)">
                                                                <path
                                                                    d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z"
                                                                    fill="#436F86" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>

                                                <div class="dropdown-options">
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="lactoseintolerance">Lactose
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="lactoseintolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="gluten-intolerance">Gluten
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="gluten-intolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="fructose-intolerance">Fructose
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="fructose-intolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="histamine-intolerance">Histamine
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="histamine-intolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="sorbitol-intolerance">Sorbitol
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="sorbitol-intolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="fodmap-intolerance">FODMAP
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="fodmap-intolerance">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="caffeine-sensitivity">Caffeine
                                                            sensitivity</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="caffeine-sensitivity">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label"
                                                            for="salicylate-intolerance">Salicylate
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="salicylate-intolerance">
                                                    </div>
                                                    <!-- More options -->
                                                    <div class="dropdown-actions">
                                                        <button type="button" class="clear-btn">Clear
                                                            All</button>
                                                        <button type="button" class="ok-btn">Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ct-flex">
                                            <button type="button"
                                                class="btn ct-btn-prim-light hvr-bounce-to-right-two reset-btn">reset</button>
                                            <button type="button"
                                                class="btn ct-btn-prim hvr-bounce-to-right  apply-btn">apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="nearby-area">
                    <h5>Nearby Restaurants</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card near-card">
                                <figure>
                                    <img src="assets/images/home/nr1.png" class="img-fluid" alt="">
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">King Lee’s</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card near-card">
                                <figure>
                                    <img src="assets/images/home/nr2.png" class="img-fluid" alt="">
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">Hereford Grill</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card near-card">
                                <figure>
                                    <img src="assets/images/home/nr3.png" class="img-fluid" alt="">
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">The Ledbury</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuisine-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h6>Cuisines</h6>
                            <div class="cuisine-main">
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu1.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Burgers</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu2.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Pizza</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu3.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Desserts</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu4.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">BBQ</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu5.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Beverages</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu6.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Chinese</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu7.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Broast</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu8.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Fast Food</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu9.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">American</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu10.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Ice Cream</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu11.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Pasta</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu12.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Italian</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu13.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Mexican</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu14.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Continental</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu15.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Shakes</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu16.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">French</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu2.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Pizza</a>
                                    </div>
                                </div>
                                <div class="cuisine-box">
                                    <figure>
                                        <img src="assets/images/home/cu3.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <a href="void:;">Desserts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="special-area">
                    <h5>Special Deals</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card special-card">
                                <figure>
                                    <img src="assets/images/home/sp1.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">Ultimate Platter Feast</a>
                                            <small>King Lee’s Restaurant</small>
                                        </div>
                                        <div class="rt-box">
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>$95 USD</h6>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card special-card">
                                <figure>
                                    <img src="assets/images/home/sp2.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">Combo Crunch Pack</a>
                                            <small>King Lee’s Restaurant</small>
                                        </div>
                                        <div class="rt-box">
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>$95 USD</h6>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card special-card">
                                <figure>
                                    <img src="assets/images/home/sp3.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">Chinese Rice Feast</a>
                                            <small>King Lee’s Restaurant</small>
                                        </div>
                                        <div class="rt-box">
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>$95 USD</h6>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-area">
                    <h5>Featured Restaurants</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card feature-card">
                                <figure>
                                    <img src="assets/images/home/nr1.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">The Capital Grille</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card feature-card">
                                <figure>
                                    <img src="assets/images/home/nr2.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">Hereford Grill</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card feature-card">
                                <figure>
                                    <img src="assets/images/home/nr3.png" class="img-fluid" alt="">
                                    <ul>
                                        <li><a href="void:;"><i class="fa-light fa-bookmark"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="desc">
                                    <div class="tp-area">
                                        <div class="lt-box">
                                            <a href="restaurant-details.php">The Ledbury</a>
                                            <small>$$Fast Food</small>
                                        </div>
                                        <div class="rt-box">
                                            <span>1.8 km</span>
                                            <small>4.7</small>
                                        </div>
                                    </div>
                                    <div class="md-area">
                                        <div class="lt-box">
                                            <h6>Available Slots</h6>
                                            <ul>
                                                <li>6:30-7:00 PM</li>
                                                <li>8:00-9:00 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btm-area">
                                        <a href="restaurant-details.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
</body>

</html>