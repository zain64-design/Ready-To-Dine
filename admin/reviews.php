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
                        <div class="head">
                            <a href="restaurant-details.php" class="back-btn"><i
                                    class="fa-regular fa-arrow-left"></i></a>
                            <h6>Reviews</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Review Summary Card -->
        <section class="review-card-section">
            <div class="container">
                <div class="review-card">
                    <div class="row align-items-start">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="food-image">
                                <figure>
                                    <img src="assets/images/reviews/restaurant-featured-image.png" alt="Food Image"
                                        class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                            <div class="review-content-area">
                                <div class="review-content">
                                    <div class="review-title">
                                        <h2>The Capital Grille</h2>
                                        <div class="rating-info">
                                            <div class="rating-number">4.0</div>
                                            <div class="rating-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="review-count">Based on 223 reviews</p>
                                    </div>
                                    <div class="rating-info-text">
                                        <div class="rating-bars">
                                            <div class="rating-row">
                                                <span>Excellent</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="rating-row">
                                                <span>Good</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="rating-row">
                                                <span>Average</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="rating-row">
                                                <span>Below Average</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 25%"></div>
                                                </div>
                                            </div>
                                            <div class="rating-row">
                                                <span>Poor</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 10%"></div>
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
        </section>

        <!-- Review Tab Section Start -->
        <section class="sec-review-tab-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="review-tab-heading">
                            <h3>Sort By</h3>
                        </div>
                        <div class="review-tab-area">
                            <div class="review-tab-head">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="most-relevant-tab" data-bs-toggle="tab"
                                            data-bs-target="#most-relevant" type="button" role="tab">Most
                                            Relevant</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="highest-tab" data-bs-toggle="tab"
                                            data-bs-target="#highest" type="button" role="tab">Highest</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="lowest-tab" data-bs-toggle="tab"
                                            data-bs-target="#lowest" type="button" role="tab">Lowest</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="newest-tab" data-bs-toggle="tab"
                                            data-bs-target="#newest" type="button" role="tab">Newest</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="review-tab-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="most-relevant" role="tabpanel">
                                        <div class="review-item-area">
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/cropper-grey.svg"
                                                                alt="Copper Grey" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Copper Grey</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emily-rich.svg"
                                                                alt="Emily Rich" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emily Rich</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/steve-roert.svg"
                                                                alt="Steve Roert" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Steve Roert</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emma-joseph.svg"
                                                                alt="Emma Joseph" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emma Joseph</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/rian-groove.svg"
                                                                alt="Rian Groove" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Rian Groove</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appoints-tab-pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <p>Page</p>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next"><i
                                                                class="fa-regular fa-chevron-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="highest" role="tabpanel">
                                        <div class="review-item-area">
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emily-rich.svg"
                                                                alt="Emily Rich" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emily Rich</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/steve-roert.svg"
                                                                alt="Steve Roert" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Steve Roert</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emma-joseph.svg"
                                                                alt="Emma Joseph" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emma Joseph</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/rian-groove.svg"
                                                                alt="Rian Groove" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Rian Groove</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/cropper-grey.svg"
                                                                alt="Copper Grey" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Copper Grey</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appoints-tab-pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <p>Page</p>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next"><i
                                                                class="fa-regular fa-chevron-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lowest" role="tabpanel">
                                        <div class="review-item-area">
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/cropper-grey.svg"
                                                                alt="Copper Grey" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Copper Grey</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emily-rich.svg"
                                                                alt="Emily Rich" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emily Rich</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/steve-roert.svg"
                                                                alt="Steve Roert" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Steve Roert</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emma-joseph.svg"
                                                                alt="Emma Joseph" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emma Joseph</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/rian-groove.svg"
                                                                alt="Rian Groove" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Rian Groove</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appoints-tab-pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <p>Page</p>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next"><i
                                                                class="fa-regular fa-chevron-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="newest" role="tabpanel">
                                        <div class="review-item-area">
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emily-rich.svg"
                                                                alt="Emily Rich" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emily Rich</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/steve-roert.svg"
                                                                alt="Steve Roert" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Steve Roert</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/emma-joseph.svg"
                                                                alt="Emma Joseph" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Emma Joseph</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/rian-groove.svg"
                                                                alt="Rian Groove" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Rian Groove</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="reviewer-info">
                                                    <div class="reviewer-avatar">
                                                        <figure>
                                                            <img src="assets/images/reviews/profile/cropper-grey.svg"
                                                                alt="Copper Grey" class="rounded-circle img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <h4 class="reviewer-name">Copper Grey</h4>
                                                        <div class="review-meta">
                                                            <div class="rating">
                                                                <span class="rating-number">4.0</span>
                                                                <div class="rating-stars">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="review-date">14 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appoints-tab-pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <p>Page</p>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next"><i
                                                                class="fa-regular fa-chevron-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- Other tab panes -->
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Review Tab Section Close -->

    </main>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>
</body>

</html>