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
        <section class="sec-menu">
            <div class="container">
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="ct-tabs">
                                <ul class="nav nav-pills justify-content-start" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0 active"
                                            id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                            type="button" role="tab" aria-controls="pills-1"
                                            aria-selected="true">Special Deals</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                            type="button" role="tab" aria-controls="pills-2"
                                            aria-selected="false">Trending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                            type="button" role="tab" aria-controls="pills-3"
                                            aria-selected="false">Starters</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                            type="button" role="tab" aria-controls="pills-4"
                                            aria-selected="false">Burgers</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5"
                                            type="button" role="tab" aria-controls="pills-5"
                                            aria-selected="false">Sandwiches</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6"
                                            type="button" role="tab" aria-controls="pills-6"
                                            aria-selected="false">Pasta</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7"
                                            type="button" role="tab" aria-controls="pills-7"
                                            aria-selected="false">BBQ</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                            id="pills-8-tab" data-bs-toggle="pill" data-bs-target="#pills-8"
                                            type="button" role="tab" aria-controls="pills-8"
                                            aria-selected="false">Rolls</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                        aria-labelledby="pills-1-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel"
                                        aria-labelledby="pills-2-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-3" role="tabpanel"
                                        aria-labelledby="pills-3-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-4" role="tabpanel"
                                        aria-labelledby="pills-4-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-5" role="tabpanel"
                                        aria-labelledby="pills-5-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-6" role="tabpanel"
                                        aria-labelledby="pills-6-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-7" role="tabpanel"
                                        aria-labelledby="pills-7-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-8" role="tabpanel"
                                        aria-labelledby="pills-8-tab" tabindex="0">
                                        <div class="deals-info">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <div class="card rest-card">
                                                        <figure>
                                                            <img src="assets/images/home/sp1.png" class="img-fluid"
                                                                alt="">
                                                        </figure>
                                                        <div class="desc">
                                                            <div class="tp-area">
                                                                <div class="lt-box">
                                                                    <a href="item-details.php">Ultimate Platter Feast</a>
                                                                </div>
                                                                <div class="rt-box">
                                                                    <a href="edit-menu.php">Edit</a>
                                                                </div>
                                                            </div>
                                                            <div class="md-area">
                                                                <div class="lt-box">
                                                                    <h6>$95 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="btm-area">
                                                            <a href="item-details.php" class="btn ct-btn-prim hvr-bounce-to-right detail-btn">See Item Details</a>
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
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <a href="add-menu-item.php" class="btn ct-btn-prim hvr-bounce-to-right menu-btn">
                                Add Menu Item
                                </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <a href="add-special-deals.php" class="btn ct-btn-prim-light hvr-bounce-to-right-two add-btn">
                                Add Special Deal
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