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
        <section class="sec-inner-banner restaurant-banner" data-bg-image="assets/images/banner/item-details-banner.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="back-area">
                        <a href="menu.php" class="back-btn">
                        <i class="fa-light fa-arrow-left"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-item-detail">
            <div class="top-bar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="ct-flex">
                                <div class="lt-area">
                                    <figure>
                                        <img src="assets/images/details/pr3.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="desc">
                                        <h6>The Capital Grille</h6>
                                        <span>$80 USD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="detail">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-detail-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="tags-area">
                                <h6>Ingredients</h6>
                                <ul class="items-tags">
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option1"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option1">Salt</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option2"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option2">Chicken</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option3"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option3">Onion</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option4"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option4">Garlic</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option5"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option5">Ginger</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option6"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option6">Flour</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option7"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option7">Spices</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="btn-check" name="items-options" id="option8"
                                            autocomplete="off">
                                        <label class="btn btn-secondary ct-rd" for="option8">Cheese</label>
                                    </li>
                                </ul>
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
</body>

</html>