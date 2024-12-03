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
        <section class="sec-booking">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <img src="assets/images/logo/logo-header-dark.png" class="logo" alt="">
                            <h6>Bookings</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="ct-tabs">
                                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0 active"
                                                id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                                type="button" role="tab" aria-controls="pills-1"
                                                aria-selected="true">Confirmed</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                                type="button" role="tab" aria-controls="pills-2"
                                                aria-selected="false">Cancelled</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                                type="button" role="tab" aria-controls="pills-3"
                                                aria-selected="false">Pending</button>
                                        </li>
                                    </ul>
                                    <div class="search-area">
                                        <form action="">
                                            <div class="row gx-3">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                                                    <div class="input-main">
                                                        <button class="btn search-btn">
                                                            <i class="fa-regular fa-magnifying-glass"></i>
                                                        </button>
                                                        <input type="search" class="form-control ct-inp"
                                                            placeholder="Search Restaurants">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                    <button
                                                        class="btn ct-btn-prim hvr-bounce-to-right filter-btn mt-3 mt-sm-3 mt-md-3 mt-lg-0 mt-xl-0 mt-xxl-0">filters</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                            aria-labelledby="pills-1-tab" tabindex="0">
                                            <div class="deals-info">
                                                <h6>8 September 2024</h6>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-2" role="tabpanel"
                                            aria-labelledby="pills-2-tab" tabindex="0">
                                            <div class="deals-info">
                                                <h6>8 September 2024</h6>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-3" role="tabpanel"
                                            aria-labelledby="pills-3-tab" tabindex="0">
                                            <div class="deals-info">
                                                <h6>8 September 2024</h6>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
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
                                                            <a href="booking-details.php"
                                                                class="btn ct-btn-prim hvr-bounce-to-right view-btn">View
                                                                Details</a>
                                                                <div class="actions-area">
                                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#order-success" class="btn outline-btn">
                                                                        accept
                                                                    </button>
                                                                    <a href="reject-booking.php" class="btn outline-btn">reject</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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