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
        <section class="sec-upload-menu">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10 col-xxl-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="head">
                                    <h6>Add Special Deals</h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-main">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Deal’s Name</label>
                                            <input type="text" class="form-control ct-inp" placeholder="Add Ingredients"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Deal’s Price</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Your Item’s Price" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Select Items</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Items
                                                    <span class="dropdown-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                            viewBox="0 0 12 9" fill="none">
                                                            <path
                                                                d="M6 8.10899L-2.44784e-07 2.10898L1.4 0.708985L6 5.30899L10.6 0.708986L12 2.10899L6 8.10899Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </button>

                                                <div class="dropdown-options">
                                                    <div class="dropdown-option">
                                                        <img src="assets/images/booking/sl1.png" class="img-fluid"
                                                            alt="">
                                                        <label class="form-check-label" for="check1">crispy zinger
                                                            burger</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="check1">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <img src="assets/images/booking/cl2.png" class="img-fluid"
                                                            alt="">
                                                        <label class="form-check-label" for="check2">alfredo
                                                            pasta</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="check2">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <img src="assets/images/booking/cl3.png" class="img-fluid"
                                                            alt="">
                                                        <label class="form-check-label" for="check3">club
                                                            sandwich</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="check3">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <img src="assets/images/booking/cl4.png" class="img-fluid"
                                                            alt="">
                                                        <label class="form-check-label" for="check4">spicy pasta</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="check4">
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
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    submit
                                </button> -->
                                        <a href="date-time.php" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                            save
                                        </a>
                                        <a href="void:;" class="btn ct-btn-prim-light hvr-bounce-to-right-two add-btn">
                                            Save and Add Another
                                        </a>
                                        <a href="date-time.php" class="btn skip-btn">Skip for later</a>
                                    </div>
                                </div>
                            </form>
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