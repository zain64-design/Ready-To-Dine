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
        <section class="sec-inner-banner restaurant-banner" data-bg-image="assets/images/banner/resturant-banner.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="back-area">
                            <a href="my-account.php" class="back-btn">
                                <i class="fa-light fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-edit-profile">
            <form action="">
                <div class="top-bar-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="ct-flex">
                                    <div class="img-area">
                                        <figure>
                                            <img src="assets/images/details/pr3.png" class="img-fluid person-img" alt="">
                                            <a href="javascript:void(0);" class="edit-icon" onclick="document.getElementById('file-input').click();">
                                                <img src="assets/images/my-account/icons/edit-icon-2.png" class="img-fluid" alt="">
                                            </a>
                                            <input type="file" id="file-input" style="display: none;" />
                                        </figure>
                                    </div>
                                    <div class="desc">
                                        <h6>The Capital Grille</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Restaurant’s Owner Name</label>
                                            <input type="text" class="form-control ct-inp" placeholder="John Mark"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Email Address</label>
                                            <input type="email" class="form-control ct-inp check-icon"
                                                placeholder="brucenelson@demomail.com" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Phone Number</label>
                                            <input type="number" class="form-control ct-inp"
                                                placeholder="+1 (027) 266-7137" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Restaurant’s Name</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="The Capital Grille" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Restaurant’s Seating Capacity</label>
                                            <input type="number" class="form-control ct-inp"
                                                placeholder="+1 (027) 266-7137" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Restaurant’s Phone Number</label>
                                            <input type="number" class="form-control ct-inp"
                                                placeholder="+1 (027) 266-7137" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Location</label>
                                            <input type="text" class="form-control ct-inp locate-icon"
                                                placeholder="Theron Branch Suite 920" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">About Restaurant</label>
                                            <textarea type="text" rows="10" class="form-control ct-txt"
                                                placeholder="Write Description" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                            Save Change
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
</body>

</html>