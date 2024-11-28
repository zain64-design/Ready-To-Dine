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
        <section class="sec-earnings">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="my-account.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>My Earnings</h6>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
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
                            <div id="chart2" class="chart"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="transactions-area">
                            <div class="tp-area">
                                <h4>Transactions</h4>
                                <button type="search" class="btn ct-btn-prim hvr-bounce-to-right filter-btn">Filter By
                                    Date</button>
                            </div>

                            <h6>Today</h6>
                            <div class="transaction-result">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="card staff-box">
                                            <figure>
                                                <img src="assets/images/my-account/profile/stf-1.png"
                                                    class="img-fluid thumb" alt="">
                                            </figure>
                                            <div class="desc">
                                                <h6>Rebecca Boyd</h6>
                                                <span>Booking ID: 12345</span>
                                            </div>
                                            <h5>$432.21</h5>
                                        </div>
                                    </div>
                                </div>
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
    <script src="assets/js/chart-init-two.js"></script>
</body>

</html>