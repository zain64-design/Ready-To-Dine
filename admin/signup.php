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
    <main>
        <section class="login-page sign-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                        <div class="login-form-main">
                            <h3>Register Your Restaurant</h3>
                            <form action="" class="login-form signup-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Restaurant Owner’s Name</label>
                                            <input type="text" class="form-control" placeholder="Bruce" name="restaurant-owners-name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="brucenelson@demomail.com" name="email" required="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label sign-lbl">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="+1 (027) 266-7137"
                                                name="number" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group position-relative">
                                            <label class="form-label sign-lbl">Password</label>
                                            <input type="password" placeholder="Choose password" required=""
                                                id="password" name="password" class="form-control">
                                            <span class="toggle-password field-icon fa-light fa-eye"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group position-relative">
                                            <label class="form-label sign-lbl">Confirm Password</label>
                                            <input type="password" placeholder="Confirm password" required=""
                                                id="confirm-password" name="confirm-password" class="form-control">
                                            <span class="toggle-password field-icon fa-light fa-eye"></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Get Started</button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="login-signup">
                                            <p>Already have an account? <a href="login.php">Sign In</a></p>
                                        </div>
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
    include 'includes/scripts.php';
    ?>
</body>

</html>