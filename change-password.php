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
                                <a href="my-account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M14.6673 8L6.66732 16M6.66732 16L14.6673 24M6.66732 16L25.334 16" stroke="black" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <h5>Change Password</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-edit-profile-form sec-change-password-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="edit-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="current-password">Current Password</label>
                                            <input type="password" id="current-password" name="current-password" placeholder="Current Password" class="form-control password-input-icon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="new-password">New Password</label>
                                            <input type="password" id="new-password" name="new-password" placeholder="New Password" class="form-control password-input-icon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm New Password</label>
                                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Retype New Password" class="form-control password-input-icon" required>
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