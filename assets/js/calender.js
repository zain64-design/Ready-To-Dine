$(document).ready(function() {
    var selectedDate = null;
    var currentMonth = new Date().getMonth();
    var currentYear = new Date().getFullYear();

    // Array to hold month names
    var monthNames = [
        "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December"
    ];

    // Weekday names
    var weekDays = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];

    // Reference to elements
    var $dateInput = $('#date');
    var $calendarContainer = $('#custom-calendar');
    var $calendarDays = $('#calendar-days');
    var $calendarMonthYear = $('#calendar-month-year');
    var $calendarWeekdays = $('#calendar-weekdays');
    var $prevMonthBtn = $('#prev-month');
    var $nextMonthBtn = $('#next-month');
    var $doneBtn = $('#done');

    // Function to render the calendar
    function renderCalendar(month, year) {
        // Update the month/year text to show month name and year
        $calendarMonthYear.text(monthNames[month] + " " + year);

        // Clear previous days and weekdays
        $calendarDays.empty();
        $calendarWeekdays.empty();

        // Create weekday headers
        weekDays.forEach(function(day) {
            $calendarWeekdays.append('<div class="day">' + day + '</div>');
        });

        // Get the first day of the month and the last date of the month
        var firstDayOfMonth = new Date(year, month, 1);
        var lastDateOfMonth = new Date(year, month + 1, 0);
        var firstDayOfWeek = firstDayOfMonth.getDay();
        var totalDays = lastDateOfMonth.getDate();

        // Calculate previous month's last few days
        var prevMonthLastDate = new Date(year, month, 0);
        var prevMonthDays = prevMonthLastDate.getDate();
        var prevMonthFill = firstDayOfWeek === 0 ? 6 : firstDayOfWeek - 1; // Adjust based on the first day of the month

        // Fill empty slots with previous month dates
        for (var i = prevMonthFill; i > 0; i--) {
            $calendarDays.append('<div class="day disabled">' + (prevMonthDays - i + 1) + '</div>');
        }

        // Fill in the actual days of the current month
        for (var day = 1; day <= totalDays; day++) {
            var $dayDiv = $('<div class="day">' + day + '</div>');
            $dayDiv.on('click', function() {
                // Remove previous selection
                $('.day').removeClass('selected');
                // Select the clicked day
                $(this).addClass('selected');
                // Save the selected date
                selectedDate = new Date(year, month, $(this).text());
            });
            $calendarDays.append($dayDiv);
        }

        // Calculate the number of days to fill from next month
        var nextMonthFill = (7 - ($calendarDays.children().length % 7)) % 7;
        // Fill empty slots with next month dates
        for (var i = 1; i <= nextMonthFill; i++) {
            $calendarDays.append('<div class="day disabled">' + i + '</div>');
        }
    }

    // Show the custom calendar when the input is focused
    $dateInput.on('focus', function() {
        $('.sec-booking-table').toggleClass('calendar-open');
        $calendarContainer.show();  // Show the custom calendar
        renderCalendar(currentMonth, currentYear);
    });

    // Hide the calendar if clicked outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#custom-calendar, #date').length) {
            $calendarContainer.hide();  // Hide the custom calendar when clicked outside
        }
    });

    // Navigate to the previous month
    $prevMonthBtn.on('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    // Navigate to the next month
    $nextMonthBtn.on('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    // Set the selected date in the input and hide the calendar
    $doneBtn.on('click', function() {
        if (selectedDate) {
            // Format the date as MM/DD/YYYY
            var formattedDate = 
                ('0' + (selectedDate.getMonth() + 1)).slice(-2) + '/' + 
                ('0' + selectedDate.getDate()).slice(-2) + '/' + 
                selectedDate.getFullYear();
            // Set the formatted date into the input
            $dateInput.val(formattedDate);
        }
        $('.sec-booking-table').toggleClass('calendar-open'); 
        $calendarContainer.hide();  // Hide the custom calendar after selecting a date
    });
});
