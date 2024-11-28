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
        <section class="sec-edit-add-staff">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <a href="restaurant-management.php" class="back-btn"><i
                                    class="fa-regular fa-arrow-left"></i></a>
                            <h6>Steve James</h6>
                        </div>
                        <div class="form-main">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="img-area">
                                            <figure>
                                                <img src="assets/images/my-account/profile/stf-lg-1.png"
                                                    class="img-fluid pro-img" alt="">
                                                <a href="javascript:void(0);" class="edit-icon"
                                                    onclick="document.getElementById('file-input').click();">
                                                    <img src="assets/images/my-account/icons/edit-icon-2.png"
                                                        class="img-fluid" alt="">
                                                    <input type="file" id="file-input" class="d-none">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">First name</label>
                                                    <input type="text" class="form-control ct-inp"
                                                        placeholder="First Name" required=""  value="Robert">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control ct-inp"
                                                        placeholder="Last Name" required="" value="Dave">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">Email Address</label>
                                                    <input type="email" class="form-control ct-inp check-icon"
                                                        placeholder="emailaddress@demomail.com" required="" value="robertdave@demomail.com">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">Select Role</label>
                                                    <div class="ct-select">
                                                        <div class="select-box">
                                                            <span class="selected-option">Select Role</span>
                                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="9" viewBox="0 0 12 9" fill="none">
                                                                    <path
                                                                        d="M6 8.37461L-2.44784e-07 2.37461L1.4 0.97461L6 5.57461L10.6 0.974611L12 2.37461L6 8.37461Z"
                                                                        fill="black" />
                                                                </svg></i>
                                                        </div>
                                                        <ul class="select-options">
                                                            <li class="option" data-value="kitchen-staff">kitchen staff
                                                            </li>
                                                            <li class="option" data-value="accounts-staff">accounts
                                                                staff</li>
                                                            <li class="option" data-value="other">other</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">Phone number</label>
                                                    <input type="number" class="form-control ct-inp" placeholder="+1"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="">Location</label>
                                                    <input type="text" class="form-control ct-inp"
                                                        placeholder="Select Location" required="" value="2763 Barnes Avenue">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main position-relative">
                                                    <label for="">Password</label>
                                                    <input type="password" placeholder="Choose password" required=""
                                                        id="password" name="password" class="form-control ct-inp">
                                                    <span class="toggle-password field-icon fa-regular fa-eye"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main position-relative">
                                                    <label for="">Confirm Password</label>
                                                    <input type="password" placeholder="Confirm password" required=""
                                                        id="confirm-password" name="confirm-password"
                                                        class="form-control ct-inp">
                                                    <span class="toggle-password field-icon fa-regular fa-eye"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <button type="submit"
                                                    class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                                    submit
                                                </button>
                                            </div>
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
include 'includes/footer.php';
include 'includes/scripts.php';
?>
</body>

</html>