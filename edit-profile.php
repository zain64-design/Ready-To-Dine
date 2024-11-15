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
        <section class="sec-edit-profile-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="form-area">
                            <div class="back-icon-edit">
                                <a href="my-account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M14.6673 8L6.66732 16M6.66732 16L14.6673 24M6.66732 16L25.334 16" stroke="black" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="form-ar-img">
                                <figure>
                                    <img src="assets/images/my-account/profile/one.png"
                                        alt="icon">
                                </figure>
                                <a href="javascript:void(0);"
                                    onclick="document.getElementById('file-input').click();">
                                    <figure>
                                        <img src="assets/images/my-account/icons/edit-icon.png" alt="icon">
                                    </figure>
                                </a>
                                <input type="file" id="file-input" style="display: none;" />
                            </div>
                            <h5>Bruce Nelson</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-edit-profile-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="edit-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="brucenelson@demomail.com" class="form-control email-input-icon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="number">Phone Number</label>
                                            <input type="number" id="number" name="phone" placeholder="+1 (027) 266-7137" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="text">Location</label>
                                            <input type="text" id="text" name="text" placeholder="Theron Branch Suite 920" class="form-control location-input-icon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="btm-select-main">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="btm-select-heading">
                                                <h3>Dietary Preferences</h3>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="form-group">
                                                <div class="inp-area" bis_skin_checked="1">
                                                    <label for="select-allergies">Select Allergies</label>
                                                    <select class="form-select ct-st" name="select-allergies" aria-label="Default select example" required>
                                                        <option selected="">Select Allergies</option>
                                                        <option value="one">One</option>
                                                        <option value="two">Two</option>
                                                        <option value="three">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="form-group">
                                                <div class="inp-area" bis_skin_checked="1">
                                                    <label for="select-dietary-preferences">Select Dietary Preferences</label>
                                                    <select class="form-select ct-st" name="select-dietary-preferences" aria-label="Default select example" required>
                                                        <option selected="">Select Dietary Preferences</option>
                                                        <option value="one">One</option>
                                                        <option value="two">Two</option>
                                                        <option value="three">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right save-btn">Save Changes</button>
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