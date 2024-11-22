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
        <section class="sec-home-area">
            <div class="container">
                <div class="branch-area">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                            <h4>The Capital Grille</h4>
                            <div class="ct-drp dropdown">
                                <button class="btn ct-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Theron Branch Suite
                                </button>
                                <div class="ct-menu dropdown-menu">
                                    <div class="rest-locate">
                                        <h6>select restaurant's location</h6>
                                        <a href="void:;" class="location">586 Guys Underpass Suite 713</a>
                                    </div>
                                    <div class="rest-locate">
                                        <h6>select restaurant's location</h6>
                                        <a href="void:;" class="location">10252 Pfeffer Drive</a>
                                    </div>
                                    <div class="rest-locate">
                                        <h6>select restaurant's location</h6>
                                        <a href="void:;" class="location">171 Prosacco View Apt. 804</a>
                                    </div>
                                    <button type="button" class="btn ct-btn-prim hvr-bounce-to-right save-btn">save
                                        changes</button>
                                    <a href="location.php"
                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two add-btn mt-3">add
                                        more
                                        branches</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-4 col-xxl-3">
                            <button class="btn ct-btn-prim-white hvr-bounce-to-right-three book-btn">Bookings Turned
                                Off</button>
                        </div>
                    </div>
                </div>
                <div class="cta-area">
                    <figure>
                        <img src="assets/images/home/rest-1.png" class="img-fluid thumb" alt="">
                    </figure>
                    <div class="desc">
                        <h5><b>Complete profile</b> (50% Complete)</h5>
                        <p>Your restaurant is not live yet. Complete profile details to become visible to customers and
                            begin receiving booking requests</p>
                    </div>
                </div>
                <div class="stats-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="card earing-box">
                                <div class="tp-area">
                                    <div class="lt-area">
                                        <h5>Total Earnings</h5>
                                        <h6><b>$85,000</b> (+5.2%)</h6>
                                    </div>
                                    <div class="select-ct">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Jan 2024</option>
                                            <option value="1">Feb 2024</option>
                                            <option value="2">Mar 2024</option>
                                            <option value="3">April 2024</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="chart1" class="chart"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="row gx-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card stats-card">
                                        <figure>
                                            <img src="assets/images/home/stat1.png" class="img-fluid thumb" alt="">
                                        </figure>
                                        <div class="desc">
                                            <h6>Menu Items</h6>
                                            <span>124</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card stats-card">
                                        <figure>
                                            <img src="assets/images/home/stat2.png" class="img-fluid thumb" alt="">
                                        </figure>
                                        <div class="desc">
                                            <h6>Bookings</h6>
                                            <span>436</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card stats-card">
                                        <figure>
                                            <img src="assets/images/home/stat3.png" class="img-fluid thumb" alt="">
                                        </figure>
                                        <div class="desc">
                                            <h6>Guests</h6>
                                            <span>1240</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card stats-card">
                                        <figure>
                                            <img src="assets/images/home/stat4.png" class="img-fluid thumb" alt="">
                                        </figure>
                                        <div class="desc">
                                            <h6>Ratings</h6>
                                            <span>4.2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-area">
                    <div class="tp-area">
                        <h6>Today Bookings</h6>
                        <div class="select-ct">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>view all</option>
                                <option value="1">Feb 24</option>
                                <option value="2">Mar 24</option>
                                <option value="3">April 24</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card book-box">
                                <h4>Location</h4>
                                <h6>10252 Pfeffer Drive</h6>
                                <div class="mid-area">
                                    <div class="info-box">
                                        <h5>Guest's Name</h5>
                                        <span>Jack Dave</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Booking ID</h5>
                                        <span>#440258</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Persons</h5>
                                        <span>4</span>
                                    </div>
                                    <div class="info-box">
                                        <h5>Time</h5>
                                        <span>5:30-6:30 PM</span>
                                    </div>
                                </div>
                                <a href="void:;" class="btn ct-btn-prim hvr-bounce-to-right view-btn">View Details</a>
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
    <script src="assets/js/chart-init.js"></script>
</body>

</html>