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
        <section class="sec-change-password-main-head">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="form-area">
                            <div class="back-icon-edit">
                                <a href="reviews.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M14.6673 8L6.66732 16M6.66732 16L14.6673 24M6.66732 16L25.334 16" stroke="black" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <h5>Write A Review</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="write-review-form-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="restaurant-info">
                            <figure>
                                <img src="assets/images/reviews/restuarant-featured/the-capital-grille.png" alt="The Capital Grille" class="img-fluid">
                            </figure>
                            <div class="restaurant-desc">
                                <h4>The Capital Grille</h4>
                                <div class="rating-info" bis_skin_checked="1">
                                    <div class="rating-stars" bis_skin_checked="1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-number" bis_skin_checked="1">4.0 (283)</div>
                                </div>
                            </div>
                        </div>
                        <div class="write-rev-user">
                            <figure>
                                <img src="assets/images/my-account/profile/one.png" alt="User" class="img-fluid">
                            </figure>
                            <div class="rating-user-stars" data-rating="0">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <div class="rating-value d-none">
                                <h6>Rating: 0</h6>
                            </div>
                        </div>
                        <div class="write-rev-form">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-area">
                                            <label for="media-upload">Add Media</label>
                                            <div class="file-upload-area">
                                                <a href="javascript:void(0)" class="media-upload-link" onclick="document.getElementById('media-upload').click();">
                                                    <img src="assets/images/reviews/upload-icon.svg"
                                                        class="img-fluid upload-icon" alt="">
                                                    <p>Add photos or videos you want to upload</p>
                                                </a>
                                                <input type="file" id="media-upload" style="display: none;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-area">
                                            <label for="message">Write a review</label>
                                            <textarea rows="7" name="message" id="message" placeholder="Write about your experience with restuarant" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="inp-area">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right save-btn">Submit</button>
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