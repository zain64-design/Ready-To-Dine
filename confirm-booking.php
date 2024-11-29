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
        <section class="sec-review-booking">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="information-detail.php" class="back-btn"><i
                                    class="fa-regular fa-arrow-left"></i></a>
                            <h6>Review Booking</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card box item-box">
                                    <figure>
                                        <img src="assets/images/reviews/review-booking.png" class="img-fluid thumb"
                                            alt="">
                                    </figure>
                                    <div class="desc">
                                        <h6>The Capital Grille</h6>
                                        <ul>
                                            <li class="icon pin-icon"><a href="">1024 Road, Loughton, United States</a>
                                            </li>
                                            <li class="icon locate-icon"><a href="">1.8 km</a></li>
                                        </ul>
                                    </div>
                                    <div class="reviews">
                                        <ul>
                                            <li><span>5.0</span></li>
                                            <li>
                                                <a href="void:;">
                                                    <i class="fa-solid fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="void:;">
                                                    <i class="fa-solid fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="void:;">
                                                    <i class="fa-solid fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="void:;">
                                                    <i class="fa-solid fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="void:;">
                                                    <i class="fa-solid fa-star"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <small>(223 Reviews)</small>
                                    </div>
                                </div>

                                <div class="card box info-box">
                                    <h6>Information Details</h6>
                                    <ul>
                                        <li>Name <span>John Doe</span></li>
                                        <li>Email <span>example@email.com</span></li>
                                        <li>Phone Number <span>+1 (027) 266-7137</span></li>
                                        <li>Booking Date <span>June 12 10:00 PM</span></li>
                                        <li>Booking Type <span>Family</span></li>
                                        <li>Number of Guests <span>04</span></li>
                                    </ul>
                                </div>

                                <div class="card box menu-box">
                                    <div class="tp-area">
                                        <h6>Menu Items</h6>
                                        <a href="edit-menu.php" class="btn edit-btn">edit</a>
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
                                            <div class="remove-icon">
                                                <a href="void:;"><i class="fa-regular fa-xmark"></i></a>
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
                                            <div class="remove-icon">
                                                <a href="void:;"><i class="fa-regular fa-xmark"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="check-area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I will order more menu items after arriving at the restaurant
                                            </label>
                                        </div>
                                        <div class="icon-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_4470_20786)">
                                                    <path
                                                        d="M20.4861 3.51458C15.7997 -1.17126 8.20146 -1.17179 3.51458 3.51458C-1.17179 8.20094 -1.17126 15.7992 3.51458 20.4861C8.20094 25.1714 15.7992 25.1719 20.4861 20.4861C25.1719 15.7992 25.1714 8.20146 20.4861 3.51458ZM13.5651 17.2178C13.5651 18.0824 12.8643 18.7831 11.9998 18.7831C11.1353 18.7831 10.4346 18.0824 10.4346 17.2178V10.9568C10.4346 10.0923 11.1353 9.39157 11.9998 9.39157C12.8643 9.39157 13.5651 10.0923 13.5651 10.9568V17.2178ZM11.9722 8.28129C11.0706 8.28129 10.4695 7.64267 10.4883 6.8543C10.4695 6.02785 11.0706 5.40853 11.9904 5.40853C12.9108 5.40853 13.4931 6.02837 13.5124 6.8543C13.5118 7.64267 12.9113 8.28129 11.9722 8.28129Z"
                                                        fill="#64748B" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4470_20786">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card box pay-box">
                                    <div class="inp-main">
                                        <div class="tp-area">
                                            <label for="Payment-Method">Payment Method</label>
                                            <a href="payment-method.php" class="edit-btn">
                                                <img src="assets/images/reviews/edit-icon.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="input-main">
                                            <input type="number" id="Payment-Method" name="PaymentMethod"
                                                class="form-control ct-inp-cd" placeholder="*****2109">
                                        </div>
                                    </div>
                                    <div class="inp-main">
                                        <div class="tp-area">
                                            <label for="Promo-Code">Promo Code</label>
                                        </div>
                                        <div class="input-main">
                                            <input type="number" id="Promo-Code" name="PromoCode"
                                                class="form-control ct-inp-pro" placeholder="Enter promo code">
                                                <button class="btn apply-btn">apply</button>
                                        </div>
                                    </div>
                                    <div class="inp-main">
                                        <div class="tp-area">
                                            <label for="Promo-Code">Give a Tip</label>
                                            <a href="void:;">
                                                Type custom amount
                                            </a>
                                        </div>
                                        <div class="ct-select">
                                            <div class="select-box">
                                                <span class="selected-option">Select Tip Denomination</span>
                                                <i><img src="assets/images/chevron-down.png" class="thumb" alt=""></i>
                                            </div>
                                            <ul class="select-options">
                                                <li class="option" data-value="10%">10%</li>
                                                <li class="option" data-value="15%">15%</li>
                                                <li class="option" data-value="20%">20%</li>
                                                <li class="option" data-value="25%">25%</li>
                                                <li class="option" data-value="30%">30%</li>
                                            </ul>
                                        </div>
                                    </div>

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
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button  type="button" data-bs-toggle="modal" data-bs-target="#booking" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    Confirm Booking
                                </button>
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