<?php include("header.php") ?>
<link rel="stylesheet" href="assets/css/bookingform.css">

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-06 text-center customInr_banner">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Wrapper -->
<div class="content innerPOSsc_content">
    <div class="container">
        <div class="backHeader">
            <a href="boat-details.php">
                <iconify-icon icon="fluent:arrow-left-48-regular"></iconify-icon> Back
            </a>
        </div>
        <div class="booking-engine">
            <div class="row m-0 main_bookrow">
                <!-- Sidebar -->
                <div class="col-md-4 sidebar Step_progressSidebar">
                    <div class="tracker-line" id="singleTracker"> </div>
                    <div class="sidetabmenu_wrap">
                        <div class="sidebar-item active" id="dateStep">
                            <div>
                                <i class="fas fa-concierge-bell me-2"></i> Select Date
                                <div class="details" id="dateDetails"></div>
                            </div>
                            <span class="status-icon"></span>
                        </div>
                        <div class="sidebar-item" id="timeSlotStep">
                            <div>
                                <i class="fas fa-clock me-2"></i> Select Slot
                                <div class="details" id="timeSlotDetails"></div>
                            </div>
                            <span class="status-icon"></span>
                        </div>
                        <div class="sidebar-item" id="durationStep">
                            <div>
                                <i class="fas fa-hourglass-start me-2"></i> Select Duration
                                <div class="details" id="durationDetails"></div>
                            </div>
                            <span class="status-icon"></span>
                        </div>
                        <div class="sidebar-item" id="summaryStep">
                            <div class="withoutFatch_data">
                                <div class="sidebarmenu">
                                    <i class="fas fa-list-alt me-2"></i> Summary
                                </div>
                                <span class="status-icon"></span>
                            </div>
                        </div>
                        <div class="sidebar-item" id="paymentStep">
                            <div class="withoutFatch_data">
                                <div class="sidebarmenu">
                                    <i class="fas fa-file-invoice-dollar me-2"></i> Payment
                                </div>
                                <span class="status-icon"></span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info mt-5">
                        <h6>GET IN TOUCH</h6>
                        <p>+1 201 555 635 5712</p>
                        <p>sanfrancisco@BookifyPro.com</p>
                    </div>
                </div>

                <div class="col-lg-8 noclPadding" id="bookingformColumn">
                    <!-- Main Content -->
                    <div class="main-content">
                        <!-- Step 1: Select Date -->
                        <div class="step active" id="step1">
                            <div class="step-header">
                                <h4 class="step-title">Select Date</h4>
                            </div>
                            <div class="stepBody_content">
                                <div class="date-selector">
                                    <div class="calendar-header">
                                        <button onclick="prevMonth()">←</button>
                                        <div class="monyearWrapper">
                                        <div class="monthselection_wrap">
                                        <select id="monthSelect" class="monthselection" onchange="updateCalendar()">
                                            <option value="0">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">May</option>
                                            <option value="5">June</option>
                                            <option value="6">July</option>
                                            <option value="7">August</option>
                                            <option value="8">September</option>
                                            <option value="9">October</option>
                                            <option value="10">November</option>
                                            <option value="11">December</option>
                                        </select>
                                        </div>
                                       <div class="Yearselection_wrap">
                                       <select id="yearSelect" class="Yearselection" onchange="updateCalendar()">
                                            <!-- Populated dynamically -->
                                        </select>
                                       </div>
                                        </div>
                                        <button onclick="nextMonth()">→</button>
                                    </div>
                                    <div class="calendar-grid" id="calendarGrid">
                                        <div class="day-label">Sun</div>
                                        <div class="day-label">Mon</div>
                                        <div class="day-label">Tue</div>
                                        <div class="day-label">Wed</div>
                                        <div class="day-label">Thu</div>
                                        <div class="day-label">Fri</div>
                                        <div class="day-label">Sat</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Step 2: Select Time Slot -->
                        <div class="step" id="step2">
                            <div class="step-header">
                                <button class="back-btn" onclick="goBack(2)"><i class="fas fa-arrow-left"></i></button>
                                <h4 class="step-title">Select Slot</h4>
                            </div>
                            <div class="stepBody_content">
                                <p id="selectedDateDisplay"></p>
                                <div class="time-slots">
                                    <div class="time-slot-group">
                                        <h5>Morning</h5>
                                        <div class="slots">
                                            <button class="time-slot">10:00</button>
                                            <button class="time-slot">10:30</button>
                                            <button class="time-slot">11:00</button>
                                            <button class="time-slot">11:30</button>
                                        </div>
                                    </div>
                                    <div class="time-slot-group">
                                        <h5>Afternoon</h5>
                                        <div class="slots">
                                            <button class="time-slot">12:00</button>
                                            <button class="time-slot">12:30</button>
                                            <button class="time-slot">13:00</button>
                                            <button class="time-slot">13:30</button>
                                            <button class="time-slot">14:00</button>
                                            <button class="time-slot">14:30</button>
                                            <button class="time-slot">15:00</button>
                                            <button class="time-slot">15:30</button>
                                            <button class="time-slot">16:00</button>
                                            <button class="time-slot">16:30</button>
                                            <button class="time-slot">17:00</button>
                                            <button class="time-slot">17:30</button>
                                        </div>
                                    </div>
                                    <div class="time-slot-group">
                                        <h5>Evening</h5>
                                        <div class="slots">
                                            <button class="time-slot">18:00</button>
                                            <button class="time-slot">18:30</button>
                                            <button class="time-slot">19:00</button>
                                            <button class="time-slot">19:30</button>
                                            <button class="time-slot">20:00</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Select Duration -->
                        <div class="step" id="step3">
                            <div class="step-header">
                                <button class="back-btn" onclick="goBack(3)"><i class="fas fa-arrow-left"></i></button>
                                <h4 class="step-title">Select Duration</h4>
                            </div>
                            <div class="stepBody_content">
                                <p id="selectedSlotDisplay"></p>
                                <div class="duration-options">
                                    <button class="btn btn-outline-primary duration-option">2 Hours</button>
                                    <button class="btn btn-outline-primary duration-option">4 Hours</button>
                                    <button class="btn btn-outline-primary duration-option">6 Hours</button>
                                </div>
                            </div>

                        </div>

                        <!-- Step 4: Summary -->
                        <div class="step" id="step4">
                            <div class="step-header">
                                <button class="back-btn" onclick="goBack(4)"><i class="fas fa-arrow-left"></i></button>
                                <h4 class="step-title">Summary</h4>
                            </div>
                            <div class="stepBody_content">
                                <div class="summary">
                                    <div class="summary-table">
                                        <div class="summary-row">
                                            <span class="summaryLabel">Services</span>
                                            <span class="summaryData">Boat Rental (€50/hour)</span>
                                        </div>
                                        <div class="summary-row">
                                            <span class="summaryLabel">Date</span>
                                            <span id="summaryDate" class="summaryData"></span>
                                        </div>
                                        <div class="summary-row">
                                            <span class="summaryLabel">Time Slot</span>
                                            <span id="summarySlot" class="summaryData"></span>
                                        </div>
                                        <div class="summary-row">
                                            <span class="summaryLabel">Duration</span>
                                            <span id="summaryDuration" class="summaryData"></span>
                                        </div>
                                        <div class="summary-row subtotal">
                                            <span class="summaryLabel">Subtotal:</span>
                                            <span id="summarySubtotal" class="summaryData"></span>
                                        </div>
                                        <div class="summary-row total">
                                            <span class="summaryLabel Total_Amount">Total Amount:</span>
                                            <span id="summaryTotal" class="summaryData Total"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Step 5: Payment -->
                        <div class="step" id="step5">
                            <div class="step-header">
                                <button class="back-btn" onclick="goBack(5)"><i class="fas fa-arrow-left"></i></button>
                                <h4 class="step-title">Payment</h4>
                            </div>
                            <div class="stepBody_content">
                                <div class="payment-options">
                                    <h2>The payment will be done on-site.</h2>
                                    <div id="qrCode" class=""></div>
                                    <p>Scan the QR code to confirm, or use the link below:</p>
                                    <div class="paymentwhatsapplink">
                                        <a href="#" id="paymentLink" target="_blank">Pay via Email/WhatsApp <iconify-icon icon="ph:arrow-right"></iconify-icon></a>
                                        <div class="email-verification" style="display: none;">
                                            <div class="form-group">
                                                <label for="emailInput">Enter your email:</label>
                                                <div class="Emailverification_input">
                                                    <input type="email" id="emailInput" class="form-control"
                                                        placeholder="example@domain.com" required>
                                                    <button class="btn btn-primary" id="verifyEmailBtn">Verify
                                                        Email</button>
                                                </div>
                                            </div>
                                            <p id="verificationMessage" class="mt-2" style="color: #28a745;"></p>

                                            


                                            <div class="form-group" id="whatsappNumber">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                    src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#081626" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+31" type="text"
                                                        name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                        type="tel" name="phonenumber" pattern="\d*" value=""
                                                        placeholder=" " autocomplete="nope" required max="10"
                                                        tabindex="0" />
                                                    <small class="pn-input__error">
                                                        This is not a valid phone number
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                        class="pn-search__input search" type="search"
                                                        id="js_search-input" autocomplete="nope" />
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                    id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Skeleton Loading -->
                        <div class="step skeleton-step" id="skeletonStep">
                            <div class="skeleton-row" style="width: 50%;"></div>
                            <div class="skeleton-row" style="width: 80%;"></div>
                            <div class="skeleton-row" style="width: 60%;"></div>
                        </div>
                        <!-- Fixed Footer -->
                        <div class="footer-fixed">
                            <button class="btn btn-primary" id="continueBtn" style="display: none;">Continue</button>
                            <a class="btn btn-primary" href="booking-success.php" id="completeBooking"
                                style="display: none;">Complete
                                Booking</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<?php include("footer.php") ?>



<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="assets/phonecountry/phone-with-country.css">
<script src="assets/phonecountry/list.min.js"></script>
<script src="assets/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->



<style>
    .navbar-logo {
        margin-top: 1.125rem;
    }
</style>

<!-- booking engine js end -->
<script src="https://davidshimjs.github.io/qrcodejs/qrcode.min.js"></script>
<script>
    let selectedDate = null;
    let selectedSlot = null;
    let selectedDuration = null;
    let totalPrice = 0;
    let currentStep = 1;
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    let isRenderingCalendar = false;
    let lastTrackerHeight = 0; // Track the last height for smooth transitions
    // Initialize current date in sidebar
    const today = new Date();
    selectedDate = today.toLocaleDateString('en-US', {
        month: 'long',
        day: 'numeric',
        year: 'numeric'
    });
    $('#dateDetails').text(selectedDate);
    // Populate year dropdown
    const yearSelect = $('#yearSelect');
    const currentYearNow = new Date().getFullYear();
    for (let year = currentYearNow; year <= currentYearNow + 10; year++) {
        yearSelect.append(`<option value="${year}">${year}</option>`);
    }
    yearSelect.val(currentYear);
    $('#monthSelect').val(currentMonth);
    // Generate calendar
    function generateCalendar(month, year) {
        if (isRenderingCalendar) return;
        isRenderingCalendar = true;
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDay = new Date(year, month, 1).getDay();
        const calendarGrid = $('#calendarGrid');
        calendarGrid.children().not('.day-label').remove();
        for (let i = 0; i < firstDay; i++) {
            calendarGrid.append('<div class="day empty"></div>');
        }
        for (let day = 1; day <= daysInMonth; day++) {
            calendarGrid.append(`<div class="day">${day}</div>`);
        }
        const today = new Date();
        $('.day').each(function() {
            const day = parseInt($(this).text());
            const date = new Date(year, month, day);
            if (date < today.setHours(0, 0, 0, 0)) {
                $(this).addClass('empty').removeClass('day');
            }
        });
        if (selectedDate) {
            const [monthName, day, selectedYear] = selectedDate.split(' ');
            const monthIndex = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ].indexOf(monthName);
            const dayNum = parseInt(day.replace(',', ''));
            if (monthIndex === month && parseInt(selectedYear) === year) {
                $('.day').each(function() {
                    if (parseInt($(this).text()) === dayNum) {
                        $(this).addClass('selected');
                    }
                });
            }
        }
        $('.day:not(.empty)').off('click');
        $('.day:not(.empty)').on('click', function() {
            $('.day').removeClass('selected');
            $(this).addClass('selected');
            selectedDate = `${$('#monthSelect option:selected').text()} ${$(this).text()}, ${year}`;
            $('#dateDetails').text(selectedDate);
            $('#continueBtn').prop('disabled', false).show();
        });
        isRenderingCalendar = false;
    }
    // Update calendar on month/year change
    function updateCalendar() {
        currentMonth = parseInt($('#monthSelect').val());
        currentYear = parseInt($('#yearSelect').val());
        generateCalendar(currentMonth, currentYear);
    }
    // Navigate to previous month
    function prevMonth() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        $('#monthSelect').val(currentMonth);
        $('#yearSelect').val(currentYear);
        updateCalendar();
    }
    // Navigate to next month
    function nextMonth() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        $('#monthSelect').val(currentMonth);
        $('#yearSelect').val(currentYear);
        updateCalendar();
    }
    // Initialize calendar
    generateCalendar(currentMonth, currentYear);
    // Show Continue button for Step 1
    $('#continueBtn').show();
    // Function to hide all steps except the target step
    function showOnlyStep(stepNumber) {
        $('.step').removeClass('active');
        $(`#step${stepNumber}`).addClass('active');
    }
    // Function to reset the booking form
    function resetBookingForm() {
        selectedDate = today.toLocaleDateString('en-US', {
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });
        selectedSlot = null;
        selectedDuration = null;
        totalPrice = 0;
        $('#dateDetails').text(selectedDate);
        $('#timeSlotDetails').text('');
        $('#durationDetails').text('');
        $('.sidebar-item').removeClass('active completed');
        $('#dateStep').addClass('active');
        currentStep = 1;
        $('#continueBtn').show().prop('disabled', true).removeClass('loading'); // Reset loader state
        $('#completeBooking').hide();
        $('#qrCode').empty();
        $('#singleTracker').css('height', '0');
        $('.boat-icon').css('top', '0').css('opacity', '0');
        lastTrackerHeight = 0;
        updateCalendar();
    }
    // Function to update the single tracker line with spark and boat animation
    function updateTrackerLines(completedStepId) {
        const sidebarItems = $('.sidebar-item');
        const firstItem = sidebarItems.eq(0);
        const firstIcon = firstItem.find('.status-icon');
        const sidebarRect = $('.sidebar')[0].getBoundingClientRect();
        // Add spark effect to the completed step
        if (completedStepId) {
            const $completedIcon = $(`#${completedStepId}`).find('.status-icon');
            $completedIcon.addClass('spark');
            setTimeout(() => $completedIcon.removeClass('spark'), 500);
        }
        // Animate the single tracker line after spark
        setTimeout(() => {
            // Determine the target step (current step or the last completed step)
            let targetStepIndex = currentStep - 1;
            if (targetStepIndex < 0) targetStepIndex = 0;
            if (targetStepIndex > 4) targetStepIndex = 4;
            const targetItem = sidebarItems.eq(targetStepIndex);
            const targetIcon = targetItem.find('.status-icon');
            const firstIconRect = firstIcon[0].getBoundingClientRect();
            const targetIconRect = targetIcon[0].getBoundingClientRect();
            const startY = firstIconRect.top - sidebarRect.top + (firstIconRect.height / 2);
            const endY = targetIconRect.top - sidebarRect.top + (targetIconRect.height / 2);
            const height = endY - startY;
            const trackerLine = $('#singleTracker');
            const boatIcon = trackerLine.find('.boat-icon');
            // Position the tracker line
            trackerLine.css({
                top: `${startY}px`,
                height: `${height}px`
            });
            // Animate the boat icon to the end of the line
            const boatEndPosition = height; // Position at the end of the line
            boatIcon.css({
                top: `${lastTrackerHeight}px`, // Start from the last position
                left: `${firstIconRect.left - sidebarRect.left + (firstIconRect.width / 2)}px`
            }).css('opacity', '1').css('top', `${boatEndPosition}px`);
            // Update the last tracker height for the next transition
            lastTrackerHeight = boatEndPosition;
        }, 600); // Delay to allow spark animation to finish
    }
    // Continue Button Handler with Skeleton Effect, Spark, and Tracker Update
    function handleContinue(nextStep) {
        $('.step').removeClass('active');
        $('#continueBtn').addClass('loading').prop('disabled', true);
        $('#skeletonStep').addClass('active');
        setTimeout(() => {
            $('#skeletonStep').removeClass('active');
            showOnlyStep(nextStep);
            let completedStepId = null;
            if (currentStep === 1) {
                $('#dateStep').addClass('completed');
                completedStepId = 'dateStep';
            } else if (currentStep === 2) {
                $('#timeSlotStep').addClass('completed');
                completedStepId = 'timeSlotStep';
            } else if (currentStep === 3) {
                $('#durationStep').addClass('completed');
                completedStepId = 'durationStep';
            } else if (currentStep === 4) {
                $('#summaryStep').addClass('completed');
                completedStepId = 'summaryStep';
            }
            currentStep = nextStep;
            $('.sidebar-item').removeClass('active');
            $(`#${['dateStep', 'timeSlotStep', 'durationStep', 'summaryStep', 'paymentStep'][nextStep - 1]}`)
                .addClass('active');
            if (nextStep === 5) {
                $('#continueBtn').hide();
                $('#completeBooking').show();
                $('#paymentStep').addClass('completed');
            } else {
                $('#continueBtn').show().removeClass('loading');
                if (nextStep === 4) {
                    $('#continueBtn').prop('disabled', false);
                } else {
                    $('#continueBtn').prop('disabled', true);
                }
                $('#completeBooking').hide();
            }
            // Update the single tracker line with spark and animation
            updateTrackerLines(completedStepId);
        }, 1000);
    }
    // Step 1 to Step 2
    $('#continueBtn').on('click', function() {
        if (currentStep === 1) {
            handleContinue(2);
            $('#selectedDateDisplay').text(`Selected Date: ${selectedDate}`);
            $('.time-slot').removeClass('selected');
        } else if (currentStep === 2) {
            handleContinue(3);
            $('#selectedSlotDisplay').text(`Selected Date: ${selectedDate}, Time Slot: ${selectedSlot}`);
            $('.duration-option').removeClass('selected');
        } else if (currentStep === 3) {
            handleContinue(4);
            $('#summaryDate').text(selectedDate);
            $('#summarySlot').text(selectedSlot);
            $('#summaryDuration').text(selectedDuration);
            const hours = parseInt(selectedDuration);
            const pricePerHour = 50;
            totalPrice = hours * pricePerHour;
            $('#summarySubtotal').text(`€${totalPrice}`);
            $('#summaryTotal').text(`€${totalPrice}`);
        } else if (currentStep === 4) {
            handleContinue(5);
            const paymentUrl =
                `https://BookifyPro.com/pay?booking=${selectedDate}-${selectedSlot}-${selectedDuration}`;
            $('#qrCode').empty(); // Clear previous QR code before generating a new one
            new QRCode(document.getElementById('qrCode'), paymentUrl);
            $('#completeBooking').prop('disabled', false);
        }
    });
    // Step 2: Time Slot Selection
    $('.time-slot').on('click', function() {
        $('.time-slot').removeClass('selected');
        $(this).addClass('selected');
        selectedSlot = $(this).text();
        $('#timeSlotDetails').text(selectedSlot);
        $('#continueBtn').prop('disabled', false);
    });
    // Step 3: Duration Selection
    $('.duration-option').on('click', function() {
        $('.duration-option').removeClass('selected');
        $(this).addClass('selected');
        selectedDuration = $(this).text();
        $('#durationDetails').text(selectedDuration);
        $('#continueBtn').prop('disabled', false);
    });
    // Complete Booking - Redirect to Success Page
    $('#completeBooking').on('click', function() {
        $('.step').removeClass('active');
        $('.container-fluid').hide();
    });
    // Start New Booking from Success Page
    function startNewBooking() {
        $('.container-fluid').show();
        resetBookingForm();
        showOnlyStep(1);
    }
    // Back Button Functionality with Sidebar Reset and Calendar Update
    function goBack(step) {
        showOnlyStep(step - 1);
        $('.sidebar-item').removeClass('active');
        $(`#${['dateStep', 'timeSlotStep', 'durationStep', 'summaryStep', 'paymentStep'][step - 2]}`).addClass(
        'active');
        if (step - 1 <= 1) {
            $('#timeSlotDetails').text('');
            selectedSlot = null;
            $('#timeSlotStep').removeClass('completed');
        }
        if (step - 1 <= 2) {
            $('#durationDetails').text('');
            selectedDuration = null;
            $('#durationStep').removeClass('completed');
        }
        if (step - 1 <= 3) {
            $('#summaryStep').removeClass('completed');
        }
        if (step - 1 <= 4) {
            $('#paymentStep').removeClass('completed');
        }
        currentStep = step - 1;
        if (step === 2 || step === 3 || step === 4) {
            $('#continueBtn').prop('disabled', false).removeClass('loading'); // Reset loader state
        }
        if (step === 5) {
            $('#continueBtn').show().prop('disabled', false).removeClass('loading'); // Reset loader state
            $('#completeBooking').hide();
        }
        if (currentStep === 1) {
            updateCalendar();
        }
        // Update the single tracker line when going back (no spark needed)
        updateTrackerLines();
    }
    // Update tracker line on window resize
    $(window).on('resize', updateTrackerLines);
    // Initial update of tracker line
    updateTrackerLines();
    // Email verification functionality
    let isEmailVerified = false;
    let paymentLinkUrl = ''; // Store the URL to use after verification
    $('#paymentLink').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
        e.stopPropagation(); // Stop any event bubbling
        // Store the URL for later use
        paymentLinkUrl = $(this).attr('href');
        if (!isEmailVerified) {
            // Show the email verification section
            $(this).siblings('.email-verification').show();
            $('#emailInput').focus();
        } else {
            // If email is verified, open the link in a new tab
            window.open(paymentLinkUrl, '_blank');
        }
    });
    $('#verifyEmailBtn').on('click', function() {
        const email = $('#emailInput').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const verificationMessage = $('#verificationMessage');
        if (!emailPattern.test(email)) {
            verificationMessage.text('Please enter a valid email address.').addClass('error');
            return;
        }
        // Simulate email verification (replace with actual API call if needed)
        verificationMessage.text('Verifying...').removeClass('error');
        setTimeout(() => {
            isEmailVerified = true;
            verificationMessage.text('Email verified successfully!').removeClass('error');
            $('#verifyEmailBtn').prop('disabled', true);
            $('#emailInput').prop('disabled', true);
            // Optionally hide the verification section after success
            // $('.email-verification').hide();
        }, 1000); // Simulated delay of 1 second
    });
    // Reset email verification state when going back or resetting
    function resetEmailVerification() {
        isEmailVerified = false;
        paymentLinkUrl = '';
        $('.email-verification').hide();
        $('#emailInput').val('').prop('disabled', false);
        $('#verifyEmailBtn').prop('disabled', false);
        $('#verificationMessage').text('').removeClass('error');
    }
    // Update resetBookingForm to include email verification reset
    const originalResetBookingForm = resetBookingForm;
    resetBookingForm = function() {
        originalResetBookingForm();
        resetEmailVerification();
    };
    // Update goBack to reset email verification when stepping back from payment
    const originalGoBack = goBack;
    goBack = function(step) {
        originalGoBack(step);
        if (step <= 5) {
            resetEmailVerification();
        }
    };
</script>
<!-- booking engine js end -->

<!-- tracker and spark animation js start -->
<script>
    let lastTrackerHeight = 0; // Track the last height for smooth transitions
    let currentStep = 1; // Assuming this is defined elsewhere in the full app
    // Function to update the single tracker line with spark and boat animation
    function updateTrackerLines(completedStepId) {
        const sidebarItems = $('.sidebar-item');
        const firstItem = sidebarItems.eq(0);
        const firstIcon = firstItem.find('.status-icon');
        const sidebarRect = $('.sidebar')[0].getBoundingClientRect(); // Assumes sidebar element exists
        // Add spark effect to the completed step
        if (completedStepId) {
            const $completedIcon = $(`#${completedStepId}`).find('.status-icon');
            $completedIcon.addClass('spark');
            setTimeout(() => $completedIcon.removeClass('spark'), 500);
        }
        // Animate the single tracker line after spark
        setTimeout(() => {
            // Determine the target step (current step or the last completed step)
            let targetStepIndex = currentStep - 1;
            if (targetStepIndex < 0) targetStepIndex = 0;
            if (targetStepIndex > 4) targetStepIndex = 4;
            const targetItem = sidebarItems.eq(targetStepIndex);
            const targetIcon = targetItem.find('.status-icon');
            const firstIconRect = firstIcon[0].getBoundingClientRect();
            const targetIconRect = targetIcon[0].getBoundingClientRect();
            const startY = firstIconRect.top - sidebarRect.top + (firstIconRect.height / 2);
            const endY = targetIconRect.top - sidebarRect.top + (targetIconRect.height / 2);
            const height = endY - startY;
            const trackerLine = $('#singleTracker');
            const boatIcon = trackerLine.find('.boat-icon');
            // Position the tracker line
            trackerLine.css({
                top: `${startY}px`,
                height: `${height}px`
            });
            // Animate the boat icon to the end of the line
            const boatEndPosition = height; // Position at the end of the line
            boatIcon.css({
                top: `${lastTrackerHeight}px`, // Start from the last position
                left: '50%'
            }).css('opacity', '1').css('top', `${boatEndPosition}px`);
            // Update the last tracker height for the next transition
            lastTrackerHeight = boatEndPosition;
        }, 600); // Delay to allow spark animation to finish
    }
    // Update tracker line on window resize
    $(window).on('resize', updateTrackerLines);
    // Initial update of tracker line
    updateTrackerLines();
    // Email verification functionality
    let isEmailVerified = false;
    $('#paymentLink').on('click', function(e) {
        e.preventDefault();
        if (!isEmailVerified) {
            $('.email-verification').show();
            $('#emailInput').focus();
        } else {
            window.open($(this).attr('href'), '_blank');
        }
    });
    $('#verifyEmailBtn').on('click', function() {
        const email = $('#emailInput').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const verificationMessage = $('#verificationMessage');
        if (!emailPattern.test(email)) {
            verificationMessage.text('Please enter a valid email address.').addClass('error');
            return;
        }
        // Simulate email verification (replace with actual API call if needed)
        verificationMessage.text('Verifying...').removeClass('error');
        setTimeout(() => {
            isEmailVerified = true;
            verificationMessage.text('Email verified successfully!').removeClass('error');
            $('#verifyEmailBtn').prop('disabled', true);
            $('#emailInput').prop('disabled', true);
        }, 1000); // Simulated delay of 1 second
    });
    // Allow opening the link after verification
    $(document).on('click', '#paymentLink.verified', function() {
        window.open($(this).attr('href'), '_blank');
    });
</script>
<!-- tracker and spark animation js end -->



<!-- select2 cdn  -->
<link href="assets/css/select2.css" rel="stylesheet" />
<script src="assets/js/select2.js"></script>
<script>
    $(".monthselection").select2({
    placeholder: "Select a state",
    allowClear: false
});
$(".Yearselection").select2({
    placeholder: "Select a state",
    allowClear: false
});

</script>