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
        <section class="sec-information-detail">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                        <a href="menu-customize.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>Your Information Details</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">First name</label>
                                    <input type="text" class="form-control ct-inp" placeholder="Select a Date"
                                        required="" value="Jack">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control ct-inp"
                                        placeholder="Enter Last Name" required="" value="Dave">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control ct-inp circle-icon"
                                        placeholder="Enter Email Address" required="" value="brucenelson@demomail.com">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Phone number</label>
                                    <input type="number" class="form-control ct-inp date-icon"
                                        placeholder="Enter Phone Number" required="" value="+1">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Booking Type</label>
                                    <div class="ct-select">
                                        <div class="select-box">
                                            <span class="selected-option">Select Booking Type</span>
                                            <i><img src="assets/images/chevron-down.png" class="thumb" alt=""></i>
                                        </div>
                                        <ul class="select-options">
                                            <li class="option" data-value="families">families</li>
                                            <li class="option" data-value="GroupofFriends">Group of Friends</li>
                                            <li class="option" data-value="BusinessPeople">Business People</li>
                                            <li class="option" data-value="Other">Other</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Special Instructions</label>
                                    <textarea class="form-control ct-area" name="" id="" rows="5"
                                        placeholder="Notify the restaurant of any dietary preferences, allergies, or any other special requests"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    <img src="assets/images/button-text.png" class="img-fluid text-img" alt="">
                                </button> -->
                                <a href="confirm-booking.php" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    Continue
                                </a>
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