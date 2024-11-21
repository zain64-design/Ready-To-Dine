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
        <section class="sec-notification-main-head">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="notification-content">
                            <h1>Notifications</h1>
                        </div>
                        <div class="notification-list">
                            <ul>
                                <li>
                                    <img src="assets/images/notification/user.png" alt="post-one"
                                        class="img-fluid notification-post-img">
                                    <p>Jack Dave ordered a Ready to Dine experience for <b>4 Guests</b></p>
                                </li>
                                <li>
                                    <img src="assets/images/notification/user.png" alt="post-one"
                                        class="img-fluid notification-post-img">
                                    <p>Antione Espinoza ordered a Ready to Dine experience for <b>4 Guests</b></p>
                                </li>
                                <li>
                                    <img src="assets/images/notification/user.png" alt="post-one"
                                        class="img-fluid notification-post-img">
                                    <p>Lewis Chan ordered a Ready to Dine experience for <b>4 Guests</b></p>
                                </li>
                            </ul>
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