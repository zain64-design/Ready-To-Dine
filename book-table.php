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
        <section class="sec-booking-table">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <h6>Book Your Arrival Time</h6>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="quantity-area">
                                    <label for="" class="ct-lbl">Guests <span>(Including you)</span></label>
                                    <div class="input-group quantity-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-quant btn-number" data-type="minus">
                                                <i class="fa-regular fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="quantity-input form-control input-number" value="10" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-quant btn-number" data-type="plus">
                                                <i class="fa-regular fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="time-select-area">
                                    <label for="" class="ct-lbl">Select Arrival Time Slot</label>

                                    <ul class="time-select">
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option1"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option1">08:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option2"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option2">10:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option3"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option3">12:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option4"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option4">1:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option5"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option5">2:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option6"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option6">3:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option7"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option7">4:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option8"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option8">5:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option9"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option9">6:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option10"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option10">7:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option11"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option11">08:00 PM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option12"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option12">09:00 PM</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="inp-main">
                                <label for="">Select Duration</label>
                                    <div class="ct-select">
                                        <div class="select-box">
                                            <span class="selected-option">Select Duration</span>
                                            <i><img src="assets/images/chevron-down.png" class="thumb" alt=""></i>
                                        </div>
                                        <ul class="select-options">
                                            <li class="option" data-value="00:45">00:45</li>
                                            <li class="option" data-value="01:00">01:00</li>
                                            <li class="option" data-value="01:15">01:15</li>
                                            <li class="option" data-value="00:45">01:30</li>
                                            <li class="option" data-value="01:00">01:45</li>
                                            <li class="option" data-value="01:15">02:00</li>
                                            <li class="option" data-value="01:15">02:30</li>
                                            <li class="option" data-value="01:15">02:45</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inp-main">
                                <label for="">Select Duration</label>
                                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" class="form-control ct-inp date-icon" placeholder="Select a Date" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    <img src="assets/images/button-text.png" class="img-fluid text-img" alt="">
                                </button> -->
                                <a href="select-menu-items.php" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    <img src="assets/images/button-text.png" class="img-fluid text-img" alt="">
                                </a>
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