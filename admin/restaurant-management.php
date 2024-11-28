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
        <section class="sec-restaurant-management">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="my-account.php" class="back-btn"><i class="fa-regular fa-arrow-left"></i></a>
                            <h6>Restaurant Management</h6>
                        </div>
                        <div class="form-area">
                            <form action="">
                                <div class="search-area">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-main">
                                                <button class="btn search-btn">
                                                    <i class="fa-regular fa-magnifying-glass"></i>
                                                </button>
                                                <input type="search" class="form-control ct-inp"
                                                    placeholder="Search For Staff Member">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-result-area">
                                    <div class="ct-tabs">
                                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0 active"
                                                    id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                                    type="button" role="tab" aria-controls="pills-1"
                                                    aria-selected="true">All</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                    id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                                    type="button" role="tab" aria-controls="pills-2"
                                                    aria-selected="false">Kitchen Staff</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                    id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                                    type="button" role="tab" aria-controls="pills-3"
                                                    aria-selected="false">Accounts Staff</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                    id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                                    type="button" role="tab" aria-controls="pills-4"
                                                    aria-selected="false">Booking Staff</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link px-2 px-sm-2 px-md-2 px-lg-0 px-xl-0 px-xxl-0"
                                                    id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5"
                                                    type="button" role="tab" aria-controls="pills-5"
                                                    aria-selected="false">Service Staff</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                                aria-labelledby="pills-1-tab" tabindex="0">
                                                <div class="search-result">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-2" role="tabpanel"
                                                aria-labelledby="pills-2-tab" tabindex="0">
                                                <div class="search-result">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-3" role="tabpanel"
                                                aria-labelledby="pills-3-tab" tabindex="0">
                                                <div class="search-result">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-4" role="tabpanel"
                                                aria-labelledby="pills-4-tab" tabindex="0">
                                                <div class="search-result">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-5" role="tabpanel"
                                                aria-labelledby="pills-5-tab" tabindex="0">
                                                <div class="search-result">
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                            <div class="card staff-box">
                                                                <figure>
                                                                    <img src="assets/images/my-account/profile/stf-1.png"
                                                                        class="img-fluid thumb" alt="">
                                                                </figure>
                                                                <div class="desc">
                                                                    <h6>Steve James</h6>
                                                                    <span>stevejames@email.com</span>
                                                                </div>
                                                                <a href="edit-staff-member.php" class="edit-btn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <g clip-path="url(#clip0_4470_30290)">
                                                                            <path
                                                                                d="M14.5903 7.80484C14.2991 7.80484 14.0629 8.04096 14.0629 8.3322V16.0668C14.0629 16.5515 13.6686 16.9458 13.184 16.9458H1.93365C1.44901 16.9458 1.05472 16.5515 1.05472 16.0668V4.81647C1.05472 4.33182 1.44901 3.93753 1.93365 3.93753H9.66827C9.95951 3.93753 10.1956 3.70142 10.1956 3.41017C10.1956 3.11893 9.95951 2.88281 9.66827 2.88281H1.93365C0.867437 2.88281 0 3.75025 0 4.81647V16.0668C0 17.133 0.867437 18.0005 1.93365 18.0005H13.184C14.2502 18.0005 15.1177 17.133 15.1177 16.0668V8.3322C15.1177 8.04096 14.8815 7.80484 14.5903 7.80484Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M17.6403 1.35424L16.6459 0.359818C16.1662 -0.119939 15.3855 -0.119939 14.9057 0.359818L6.95055 8.31501C6.87693 8.38863 6.82676 8.4824 6.8063 8.58449L6.30907 11.0705C6.27451 11.2434 6.32862 11.4221 6.45332 11.5468C6.5532 11.6467 6.68775 11.7013 6.8262 11.7013C6.86062 11.7013 6.89521 11.6979 6.9296 11.6911L9.41561 11.1938C9.5177 11.1734 9.61147 11.1232 9.68509 11.0496L17.6403 3.09443C17.6403 3.09443 17.6404 3.09443 17.6404 3.09439C18.1201 2.61467 18.1201 1.83404 17.6403 1.35424ZM9.05222 10.1909L7.49848 10.5017L7.80927 8.94795L14.2842 2.47292L15.5272 3.71594L9.05222 10.1909ZM16.8945 2.34863L16.273 2.97015L15.03 1.72712L15.6515 1.10565C15.72 1.03709 15.8315 1.03705 15.9001 1.10561L16.8945 2.10004C16.9631 2.16856 16.9631 2.28011 16.8945 2.34863Z"
                                                                                fill="black" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4470_30290">
                                                                                <rect width="18" height="18"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="add-staff-member.php" class="btn ct-btn-prim hvr-bounce-to-right add-btn">
                                    Add a Staff Member
                                </a>
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