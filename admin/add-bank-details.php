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
        <section class="sec-bank-details">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10 col-xxl-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="head">
                                    <h6>Add Bank Details</h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-main">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Card Holder Name</label>
                                            <input type="text" class="form-control ct-inp" placeholder="Enter Name"
                                                required="" value="Bruce Nelson">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Account Number</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Enter Account Number" required=""
                                                value="480202215011834289">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Branch Name</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Enter Branch Name" required="" value="Bruce Nelson">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="inp-main">
                                            <label for="">Routing Number</label>
                                            <input type="text" class="form-control ct-inp"
                                                placeholder="Enter Routing Number" required="" value="Bruce Nelson">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    submit
                                </button> -->
                                        <a href="upload-menu.php"
                                            class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                            submit
                                        </a>
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