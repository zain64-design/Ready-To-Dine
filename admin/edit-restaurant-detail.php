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
        <section class="sec-edit-rest-detail">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="my-account.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>Restaurant’s Detail</h6>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                        <div class="form-main">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Your Restaurant’s Name</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Restaurant’s Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Select Cuisine Type</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Cuisine Type
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
                                                        <label class="form-check-label" for="cs1">Burgers</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs1">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs2">Pizza</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs2">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs3">Desserts</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs3">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs4">BBQ</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs4">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs5">Beverages</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs5">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs6">Chinese</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs6">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs7">Chinese</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs7">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs8">Broast</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs8">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs9">Continental</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs9">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs10">Fast Food</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs10">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs11">Mexican</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs11">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs12">Shakes</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs12">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs13">American</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs13">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs14">Ice Cream</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs14">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs15">Pasta</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs15">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs16">Italian</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs16">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="cs17">French</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs17">
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
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Can Accommodate Dietary Preferences</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Dietary Preferences
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
                                                        <label class="form-check-label" for="dp1">Vegan</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs1">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp2">Vegetarian</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs2">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp3">Gluten-free</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs3">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp4">Dairy-free</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs4">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp5">Halal</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs5">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp6">Kosher</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs6">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp7">Low-carb</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs7">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp8">Paleo</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs8">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp9">Mediterranean</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs9">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="dp10">Pescatarian</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs10">
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
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Can Accommodate Allergies</label>
                                            <div class="custom-dropdown">
                                                <button class="drop-toggle" type="button">
                                                    Select Allergies
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
                                                        <label class="form-check-label" for="aa1">Lactose
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs1">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa2">Gluten
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs2">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa3">Fructose
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs3">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa4">Histamine
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs4">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa5">Sorbitol
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs5">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa6">FODMAP
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs6">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa7">Caffeine
                                                            sensitivity</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs7">
                                                    </div>
                                                    <div class="dropdown-option">
                                                        <label class="form-check-label" for="aa8">Salicylate
                                                            intolerance</label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cs8">
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
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Restaurant’s Location</label>
                                            <input type="text" class="form-control ct-inp" placeholder="Select Location"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Seating Capacity</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Type seating capacity" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Upload Profile Picture</label>
                                            <div class="upload-area">
                                                <input type="file" class="upload-file">
                                                <img src="assets/images/logo/file-blue-2.png" class="img-fluid thumb"
                                                    alt="">
                                                <span>Upload Profile Picture of Restaurant</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">About Restaurant</label>
                                            <textarea name="" id="" rows="9" class="form-control ct-txt"
                                                placeholder="Write description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="ct-check-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked="" value=""
                                                    id="tip-1">
                                                <label class="form-check-label" for="tip-1">
                                                Enable tip collection
                                                </label>
                                            </div>
                                        </div>
                                        <a href="add-special-deals.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                            submit
                                        </a>
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