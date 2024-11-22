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
                        <div class="login-form-main select-role-main">
                            <figure>
                                <img src="assets/images/logo/login-logo.png" alt="logo">
                            </figure>
                            <h2>Select Your Role</h2>
                            <p>Select whether you want to login as a user or restaurant’s owner</p>
                            <a href="login.php" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Customer</a>
                            <a href="login.php" class="btn ct-btn-prim-light hvr-bounce-to-right-two login-btn">Restaurant's Owner</a>
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