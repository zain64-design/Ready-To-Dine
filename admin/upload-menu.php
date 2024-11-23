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
        <section class="sec-upload-menu">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10 col-xxl-10">
                    <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <h6>Upload Your Menu</h6>
                            <p>Upload items you want to add to your restaurant's menu</p>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Item Name</label>
                                    <input type="text" class="form-control ct-inp" placeholder="Enter Item Name"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Category</label>
                                    <a href="void:;" class="link float-end">Add new category</a>
                                    <div class="ct-select">
                                        <div class="select-box">
                                            <span class="selected-option">Select Category</span>
                                            <i><img src="assets/images/chevron-down.png" class="thumb" alt=""></i>
                                        </div>
                                        <ul class="select-options">
                                            <li class="option" data-value="appetizers">appetizers</li>
                                            <li class="option" data-value="entrees">entrees</li>
                                            <li class="option" data-value="sides">sides</li>
                                            <li class="option" data-value="desserts">desserts</li>
                                            <li class="option" data-value="beverages">beverages</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Ingredients</label>
                                    <input type="text" class="form-control ct-inp" placeholder="Add Ingredients"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Item’s Price</label>
                                    <input type="text" class="form-control ct-inp" placeholder="Your Item’s Price"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Discounted Price</label>
                                    <input type="text" class="form-control ct-inp" placeholder="Type Discounted Price"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row align-items-end">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="inp-main">
                                            <label for="">Customization Options</label>
                                            <input type="text" class="form-control ct-inp" placeholder="Add Ingredient"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="inp-main">
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Ingredient Price" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Ingredient Price" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Item Detail</label>
                                    <textarea name="" id="" rows="9" class="form-control ct-txt"
                                        placeholder="Type detail"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                    <label for="">Add Media</label>
                                    <div class="upload-area">
                                        <input type="file" class="upload-file">
                                        <img src="assets/images/logo/file-blue.png" class="img-fluid thumb" alt="">
                                        <span>Upload photos of food item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    submit
                                </button> -->
                                <a href="add-special-deals.php" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    save
                                </a>
                                <a href="void:;" class="btn ct-btn-prim-light hvr-bounce-to-right-two add-btn">
                                    Save and Add Another
                                </a>
                                <a href="add-special-deals.php" class="btn skip-btn">Skip for later</a>
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