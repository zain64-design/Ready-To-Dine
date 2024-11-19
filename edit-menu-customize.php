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
    <main class="menu-customize-main">
        <section class="sec-inner-banner restaurant-banner"
            data-bg-image="assets/images/banner/item-details-banner.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="back-area">
                            <a href="edit-menu.php" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18"
                                    fill="none">
                                    <path d="M9.66659 1L1.66659 9M1.66659 9L9.66659 17M1.66659 9L20.3333 9"
                                        stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            <h6>Customize Ingredients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-menu-customize">
            <div class="top-bar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="ct-flex">
                                <div class="lt-area">
                                    <figure>
                                        <img src="assets/images/details/pr3.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <h6>Crispy Zinger Burger</h6>
                                        <span>Items Qty: x4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-customize-area">
                <div class="container">
                    <div class="form-main">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="inp-area">
                                        <div class="custom-dropdown">
                                            <button type="button" class="drop-toggle">
                                                Zinger Burger 1
                                                <span class="dropdown-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                        viewBox="0 0 12 9" fill="none">
                                                        <path
                                                            d="M6 8.37461L-2.44784e-07 2.37461L1.4 0.97461L6 5.57461L10.6 0.974611L12 2.37461L6 8.37461Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <div class="dropdown-options">
                                                <h6>remove ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-1">no tomato</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-1">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-2">no lettuce</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-2">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-3">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-3">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-4">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-4">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-5">no onion</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-5">
                                                </div>

                                                <h6>add ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-1">mayo lettuce
                                                        (+$1.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-1">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-2">chedder cheese
                                                        (+$2.00)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-2">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-3">Extra Garlic
                                                        (+$0.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-3">
                                                </div>
                                                <div class="dropdown-actions">
                                                    <button type="button" class="ok-btn save-btn">save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="inp-area">
                                        <div class="custom-dropdown">
                                            <button type="button" class="drop-toggle">
                                                Zinger Burger 2
                                                <span class="dropdown-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                        viewBox="0 0 12 9" fill="none">
                                                        <path
                                                            d="M6 8.37461L-2.44784e-07 2.37461L1.4 0.97461L6 5.57461L10.6 0.974611L12 2.37461L6 8.37461Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <div class="dropdown-options">
                                                <h6>remove ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-11">no tomato</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-11">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-22">no lettuce</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-22">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-33">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-33">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-44">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-44">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-55">no onion</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-55">
                                                </div>

                                                <h6>add ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-11">mayo lettuce
                                                        (+$1.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-11">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-22">chedder cheese
                                                        (+$2.00)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-22">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-33">Extra Garlic
                                                        (+$0.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-33">
                                                </div>
                                                <div class="dropdown-actions">
                                                    <button type="button" class="ok-btn save-btn">save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="inp-area">
                                        <div class="custom-dropdown">
                                            <button type="button" class="drop-toggle">
                                                Zinger Burger 3
                                                <span class="dropdown-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                        viewBox="0 0 12 9" fill="none">
                                                        <path
                                                            d="M6 8.37461L-2.44784e-07 2.37461L1.4 0.97461L6 5.57461L10.6 0.974611L12 2.37461L6 8.37461Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <div class="dropdown-options">
                                                <h6>remove ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-111">no tomato</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-111">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-222">no lettuce</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-222">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-333">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-333">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-444">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-444">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-555">no onion</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-555">
                                                </div>

                                                <h6>add ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-111">mayo lettuce
                                                        (+$1.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-111">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-222">chedder cheese
                                                        (+$2.00)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-222">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-333">Extra Garlic
                                                        (+$0.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-333">
                                                </div>
                                                <div class="dropdown-actions">
                                                    <button type="button" class="ok-btn save-btn">save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="inp-area">
                                        <div class="custom-dropdown">
                                            <button type="button" class="drop-toggle">
                                                Zinger Burger 4
                                                <span class="dropdown-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                        viewBox="0 0 12 9" fill="none">
                                                        <path
                                                            d="M6 8.37461L-2.44784e-07 2.37461L1.4 0.97461L6 5.57461L10.6 0.974611L12 2.37461L6 8.37461Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </button>

                                            <div class="dropdown-options">
                                                <h6>remove ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-1111">no tomato</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-1111">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-2222">no lettuce</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-2222">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-3333">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-3333">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-4444">no ginger</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-4444">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="rm-5555">no onion</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="rm-5555">
                                                </div>

                                                <h6>add ingredients</h6>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-1111">mayo lettuce
                                                        (+$1.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-1111">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-2222">chedder cheese
                                                        (+$2.00)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-2222">
                                                </div>
                                                <div class="dropdown-option">
                                                    <label class="form-check-label" for="ad-3333">Extra Garlic
                                                        (+$0.95)</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="ad-3333">
                                                </div>
                                                <div class="dropdown-actions">
                                                    <button type="button" class="ok-btn save-btn">save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right save-btn">Save Changes</button> -->
                                    <a href="confirm-booking.php" class="btn ct-btn-prim hvr-bounce-to-right save-btn">Save Changes</a>
                                </div>
                            </div>
                        </form>
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