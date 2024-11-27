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
        <section class="sec-booking-details">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="index.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>Booking Details</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-4">
                                <div class="card box details-box">
                                    <div class="item-box">
                                        <figure>
                                            <img src="assets/images/booking/book-person.png" class="img-fluid thumb"
                                                alt="">
                                        </figure>
                                        <div class="desc">
                                            <h5>Jack Dave</h5>
                                            <span>Booking ID: 410024</span>
                                        </div>
                                        <div class="location">
                                            <ul>
                                                <h6>Location</h6>
                                                <li class="icon pin-icon"><a href="">10252 Pfeffer Drive</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <ul>
                                            <li>Email <span>example@email.com</span></li>
                                            <li>Phone Number <span>+1 (027) 266-7137</span></li>
                                            <li>Booking Date <span>June 12 10:00 PM</span></li>
                                            <li>Booking Type <span>Family</span></li>
                                            <li>Number of Guests <span>04</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb-4">
                                <div class="card box pay-box">
                                    <div class="total-area">
                                        <ul>
                                            <li>
                                                <h6>Sub total</h6>
                                                <span>$400 USD</span>
                                            </li>
                                            <li>
                                                <h6>Discount</h6>
                                                <span>$50 USD</span>
                                            </li>
                                            <li>
                                                <h6 class="info-icon">Tip/Service fee</h6>
                                                <span>$3 USD</span>
                                            </li>
                                            <li>
                                                <h6 class="info-icon">Platorm fee</h6>
                                                <span>$2 USD</span>
                                            </li>
                                            <li>
                                                <h6 class="info-icon">Total <small>(Incl. tax)</small></h6>
                                                <span>$360 USD</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-4">
                                <div class="card box menu-box">
                                    <div class="tp-area">
                                        <h6>Menu Items</h6>
                                        <a href="menu-details.php" class="btn edit-btn">See Details</a>
                                    </div>
                                    <div class="items-area">
                                        <div class="item-box">
                                            <div class="total-count">
                                                <small>x2</small>
                                            </div>
                                            <figure>
                                                <img src="assets/images/reviews/item.png" class="img-fluid thumb"
                                                    alt="">
                                            </figure>
                                            <div class="desc">
                                                <a href="void:;" class="">Crispy Zinger Burger</a>
                                                <span>$80 USD</span>
                                            </div>
                                        </div>

                                        <div class="item-box">
                                            <div class="total-count">
                                                <small>x2</small>
                                            </div>
                                            <figure>
                                                <img src="assets/images/reviews/item.png" class="img-fluid thumb"
                                                    alt="">
                                            </figure>
                                            <div class="desc">
                                                <a href="void:;" class="">Crispy Zinger Burger</a>
                                                <span>$80 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb-4">
                                <div class="card box info-box">
                                    <h6>Special Instructions</h6>
                                    <div class="desc">
                                        <p>Notify the restaurant of any dietary preferences, allergies, or any other
                                            special requests</p>
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