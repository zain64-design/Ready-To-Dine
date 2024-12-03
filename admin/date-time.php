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
        <section class="sec-date-time">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="head">
                            <div class="d-flex align-items-end flex-wrap justify-content-center">
                                <img src="assets/images/logo/logo-header-dark.png" class="logo" alt="">
                                <h6>Time Slots</h6>
                            </div>
                            <p>Select available time slots available at your restaurant</p>
                        </div>
                    </div>
                </div>
                <div class="form-main">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="day-select-area">
                                    <label for="" class="ct-lbl">Select a Day</label>
                                    <ul class="day-select">
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day1"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day1">Mon</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day2"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day2">Tue</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day3"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day3">Wed</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day4"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day4">Thu</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day5"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day5">Fri</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day6"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day6">Sat</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="btn-check" name="items-options" id="day7"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="day7">Sun</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="time-select-area">
                                    <label for="" class="ct-lbl">Time Slots</label>

                                    <ul class="time-select">
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option1"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option1">12:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option2"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option2">1:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option3"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option3">2:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option4"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option4">3:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option5"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option5">4:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option6"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option6">5:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option7"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option7">6:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option8"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option8">7:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option9"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option9">8:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option10"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option10">9:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option11"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option11">10:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option12"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option12">11:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option13"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option13">12:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option14"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option14">1:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option15"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option15">2:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option16"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option16">3:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option17"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option17">4:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option18"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option18">5:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option19"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option19">6:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option20"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option20">7:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option21"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option21">8:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option22"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option22">9:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option23"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option23">10:00 AM</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="btn-check" name="items-options" id="option24"
                                                autocomplete="off">
                                            <label class="btn btn-secondary ct-rd" for="option24">11:00 AM</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <!-- <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    submit
                                </button> -->
                                <a href="add-special-deals.php" class="btn ct-btn-prim hvr-bounce-to-right submit-btn">
                                    submit
                                </a>
                                <a href="add-special-deals.php" class="btn skip-btn">Skip for later</a>
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