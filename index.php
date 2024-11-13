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
                                <button class="btn ct-btn-prim hvr-bounce-to-right filter-btn">filters</button>
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
                                            <h6>King Lee’s</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>Hereford Grill</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>The Ledbury</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>Ultimate Platter Feast</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>Combo Crunch Pack</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>Chinese Rice Feast</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>The Capital Grille</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>Hereford Grill</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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
                                            <h6>The Ledbury</h6>
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
                                        <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right more-btn">See
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