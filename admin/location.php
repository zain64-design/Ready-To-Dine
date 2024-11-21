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
        <section class="sec-location">
            <div class="container-fluid p-md-0 p-lg-0 p-xl-0 p-xxl-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.945329468979!2d-71.4402087234732!3d42.95835649709298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e24e8edb2c95ed%3A0x40599b43e74f899c!2sRevo%20Casino%20and%20Social%20House!5e0!3m2!1sen!2s!4v1731617682702!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="search-area">
                    <form action="">
                        <div class="container">
                            <div class="row gx-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                                    <div class="input-main">
                                        <button class="btn search-btn">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </button>
                                        <input type="search" class="form-control ct-inp"
                                            placeholder="Theron Branch Suite 920">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <button class="btn ct-btn-prim hvr-bounce-to-right filter-btn">Apply</button>
                                </div>
                            </div>
                        </div>
                    </form>
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