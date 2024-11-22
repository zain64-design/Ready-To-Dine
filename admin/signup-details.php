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
    <main>
        <section class="login-page sign-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                        <div class="login-form-main">
                            <h3>Tell Us About Your Restaurant</h3>
                            <form action="" class="login-form signup-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Your Restaurant’s Name</label>
                                            <input type="text" class="form-control" placeholder="Restaurant’s Name"
                                                name="restaurant-owners-name" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <div class="inp-area">
                                                <label for="select-cuisine" class="form-label sign-lbl">Select Cuisine</label>
                                                <div class="custom-dropdown">
                                                    <button class="drop-toggle" type="button">
                                                        Select Cuisine Type
                                                        <span class="dropdown-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <mask id="mask0_5630_4869" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect width="24" height="24" fill="#D9D9D9" />
                                                                </mask>
                                                                <g mask="url(#mask0_5630_4869)">
                                                                    <path
                                                                        d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>

                                                    <div class="dropdown-options">
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-1">Burgers</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-1">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-2">Pizza</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-2">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-3">Desserts</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-3">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label" for="cuisine-4">BBQ</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-4">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-5">Beverages</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-5">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-6">Chinese</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-6">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-7">Broast</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-7">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-8">Continental</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-8">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label" for="cuisine-9">Fast
                                                                Food</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-9">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-10">Mexican</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-10">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-11">Shakes</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-11">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-12">American</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-12">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label" for="cuisine-13">Ice
                                                                cream</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-13">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-14">Pasta</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-14">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-15">Italian</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-15">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="cuisine-16">French</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cuisine-16">
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
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <div class="inp-area">
                                                <label for="delect-dietary-preferences" class="form-label sign-lbl">Can accommodate dietary preferences</label>
                                                <div class="custom-dropdown">
                                                    <button class="drop-toggle" type="button">
                                                        Select Dietary Preferences
                                                        <span class="dropdown-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <mask id="mask0_5630_4869" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect width="24" height="24" fill="#D9D9D9" />
                                                                </mask>
                                                                <g mask="url(#mask0_5630_4869)">
                                                                    <path
                                                                        d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z"
                                                                        fill="white" />
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
                                                            <label class="form-check-label"
                                                                for="low-carb">Low-carb</label>
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
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <div class="inp-area">
                                                <label for="select-allergies" class="form-label sign-lbl">Can accommodate allergies</label>
                                                <div class="custom-dropdown">
                                                    <button class="drop-toggle" type="button">
                                                        Select Allergies
                                                        <span class="dropdown-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <mask id="mask0_5630_4869" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect width="24" height="24" fill="#D9D9D9" />
                                                                </mask>
                                                                <g mask="url(#mask0_5630_4869)">
                                                                    <path
                                                                        d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>

                                                    <div class="dropdown-options">
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="lactoseintolerance">Lactose
                                                                intolerance</label>
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="lactoseintolerance">
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <label class="form-check-label"
                                                                for="gluten-intolerance">Gluten
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
                                                            <label class="form-check-label"
                                                                for="fodmap-intolerance">FODMAP
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
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Restaurant’s Location</label>
                                            <input type="text" class="form-control" placeholder="Select Location"
                                                name="restaurant-owners-name" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Seating Capacity</label>
                                            <input type="text" class="form-control" placeholder="Type seating capacity"
                                                name="restaurant-owners-name" required="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="form-group">
                                            <label for="media-upload" class="form-label sign-lbl">Upload Profile Picture</label>
                                            <div class="file-upload-area">
                                                <a href="javascript:void(0)" class="media-upload-link" onclick="document.getElementById('media-upload').click();">
                                                    <img src="assets/images/logo/file.png" class="img-fluid upload-icon" alt="">
                                                    <p>Upload Profile Picture of Restaurant</p>
                                                </a>
                                                <input type="file" id="media-upload" style="display: none;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">About Restaurant</label>
                                            <textarea class="form-control" rows="9" placeholder="Write description"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Submit</button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="login-signup">
                                            <p>Already have an account? <a href="login.php">Sign In</a></p>
                                        </div>
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
    include 'includes/scripts.php';
    ?>
</body>

</html>