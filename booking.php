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
        <section class="sec-booking">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <img src="assets/images/logo/logo-header-dark.png" class="logo" alt="">
                            <h6>Bookings</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="ct-tabs">
                                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0 active"
                                                id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                                type="button" role="tab" aria-controls="pills-1"
                                                aria-selected="true">Collaborate</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                                type="button" role="tab" aria-controls="pills-2"
                                                aria-selected="false">In Progress</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                                type="button" role="tab" aria-controls="pills-3"
                                                aria-selected="false">Completed</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                                type="button" role="tab" aria-controls="pills-4"
                                                aria-selected="false">Cancelled</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                            aria-labelledby="pills-1-tab" tabindex="0">
                                            <div class="deals-info">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="15"
                                                                                viewBox="0 0 14 15" fill="none">
                                                                                <g clip-path="url(#clip0_4470_14911)">
                                                                                    <path
                                                                                        d="M5.80384 11.171L4.15415 12.8207C3.47023 13.5046 2.36266 13.5046 1.67931 12.8208C0.995824 12.1374 0.995824 11.0297 1.67918 10.3463L4.97912 7.04639C5.66247 6.36301 6.77015 6.36301 7.4535 7.04639C7.6813 7.27419 8.05066 7.27419 8.27846 7.04639C8.50627 6.81859 8.50627 6.44923 8.27846 6.22142C7.13948 5.08244 5.29314 5.08244 4.15415 6.22142L0.854237 9.52134C-0.284746 10.6603 -0.284746 12.5067 0.854237 13.6457C1.99308 14.7852 3.83956 14.7852 4.97915 13.6457L6.62883 11.996C6.85664 11.7682 6.85664 11.3988 6.62883 11.171C6.40103 10.9432 6.03164 10.9432 5.80384 11.171Z"
                                                                                        fill="white" />
                                                                                    <path
                                                                                        d="M13.1454 1.35424C12.0064 0.215254 10.1595 0.215254 9.02047 1.35424L7.04121 3.3335C6.81341 3.5613 6.81341 3.93066 7.04121 4.15846C7.26901 4.38627 7.63838 4.38627 7.86618 4.15846L9.84544 2.1792C10.5288 1.49582 11.637 1.49582 12.3204 2.1792C13.0038 2.86255 13.0038 3.97023 12.3204 4.65358L8.6909 8.28313C8.00752 8.96651 6.89987 8.96651 6.21652 8.28313C5.98872 8.05533 5.61936 8.05533 5.39155 8.28313C5.16375 8.51093 5.16375 8.88029 5.39155 9.1081C6.53054 10.2471 8.37688 10.2471 9.51586 9.1081L13.1454 5.47857C14.2844 4.33959 14.2844 2.49322 13.1454 1.35424Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_14911">
                                                                                        <rect width="14" height="14"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.5)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            Share Link
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Diner’s
                                                                        Menu</a>
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
                                                <h6>In Progress</h6>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Cancel</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h6 class="mt-5">Accepted</h6>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Contact
                                                                        Restaurant</a>
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
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim-light hvr-bounce-to-right-two cancle-btn">Re-Book</a>
                                                                    <a href="void:;"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right more-btn">Write
                                                                        a Review</a>
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
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                        <div class="card feature-card">
                                                            <figure>
                                                                <img src="assets/images/booking/cl1.png"
                                                                    class="img-fluid" alt="">
                                                                <ul>
                                                                    <li>
                                                                        <a href="void:;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <g clip-path="url(#clip0_4470_15558)">
                                                                                    <path
                                                                                        d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                                                        fill="white" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_4470_15558">
                                                                                        <rect width="16" height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                            June 12, 2024 - 10:00 PM
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </figure>
                                                            <div class="desc">
                                                                <div class="tp-area">
                                                                    <div class="lt-box">
                                                                        <a href="restaurant-details.php">The Capital
                                                                            Grille</a>
                                                                        <small>1024 Road, Loughton,
                                                                            United States</small>
                                                                    </div>
                                                                    <div class="rt-box">
                                                                        <span>1.8 km</span>
                                                                        <small>4.7</small>
                                                                    </div>
                                                                </div>
                                                                <div class="btm-area">
                                                                    <a href="book-table.php"
                                                                        class="btn ct-btn-prim hvr-bounce-to-right contact-btn">Re-Book</a>
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