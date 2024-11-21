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
        <section class="sec-reject">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="booking.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>Reject Booking</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="check-area">
                                <h6>Please select reasons</h6>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            Time slots unavailable
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check2">
                                        <label class="form-check-label" for="check2">
                                        Tables unavailable
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check3">
                                        <label class="form-check-label" for="check3">
                                         Other
                                        </label>
                                    </div>
                                </div>
                                <div class="inp-txt">
                                    <label for="">Reason</label>
                                    <textarea class="form-control ct-text-area" name="" id="" rows="7"
                                        placeholder="Please type reason for cancellation"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    Cancel Order
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