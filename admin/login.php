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
        <section class="login-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-6">
                        <div class="login-form-main">
                            <figure>
                                <img src="assets/images/logo/login-logo.png" alt="logo">
                            </figure>
                            <form action="" class="login-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group">
                                            <label class="form-label">Email or Phone Number</label>
                                            <input type="email" class="form-control" placeholder="brucenelson@demomail.com" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group position-relative">
                                            <label class="form-label">Password</label>
                                            <input type="password" placeholder="Choose password" required="" id="password" name="password" class="form-control">
                                            <span class="toggle-password field-icon fa-light fa-eye"></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="forget-pass">
                                            <a href="forgot-password.php">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Login</button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="login-with-social">
                                            <p>Or continue with social</p>
                                            <div class="social-login">
                                                <a href="javascript:void(0)" class="">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/google.png" alt="google" class="img-fluid">
                                                    </figure>
                                                </a>
                                                <a href="javascript:void(0)" class="">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/apple-logo.png" alt="apple" class="img-fluid">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="login-signup">
                                            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
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