<!-- • Create Hotel Room Booking System User can book room by 3 ways
• Full day
• Half day
• Custom
• If user select for the full day than user only have selection for the checking checkout
date
• If user select Half day than user have option of date and slot option(like user want to
book room for first half – Morning (8AM to 6PM) if user select for second halfit‟s
for evening (7PM to Morning 7AM)). Do proper validation like if user can book only
available slot. (have touse jQuery -> Ajax, validation, Json passing).
Jquery
<?php -->
session_start();
$conn = new mysqli('localhost', 'root', '', 'practicedb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if required fields are set
    if (isset($_POST['booking_type'], $_POST['check_in']) && !empty($_POST['booking_type']) && !empty($_POST['check_in'])) {
        $booking_type = $_POST['booking_type'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'] ?? NULL;
        $slot = $_POST['slot'] ?? NULL;

        // Basic validation for full and half-day bookings
        if ($booking_type == 'half_day' && empty($slot)) {
            $_SESSION['error'] = "Please select a slot for half-day booking.";
        } else {
            // Check if the slot is available
            if ($booking_type == 'half_day' && isset($slot)) {
                $check = $conn->prepare("SELECT * FROM bookings WHERE check_in = ? AND slot = ?");
                $check->bind_param("ss", $check_in, $slot);
            } else {
                $check = $conn->prepare("SELECT * FROM bookings WHERE check_in = ? AND check_out = ?");
                $check->bind_param("ss", $check_in, $check_out);
            }
            $check->execute();
            $result = $check->get_result();

            if ($result->num_rows > 0) {
                $_SESSION['error'] = "Selected date or slot is already booked!";
            } else {
                // Insert new booking
                $stmt = $conn->prepare("INSERT INTO bookings (booking_type, check_in, check_out, slot) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $booking_type, $check_in, $check_out, $slot);
                if ($stmt->execute()) {
                    $_SESSION['success'] = "Booking successful!";
                } else {
                    $_SESSION['error'] = "Failed to book the room.";
                }
            }
        }
    } else {
        $_SESSION['error'] = "Please fill in all required fields.";
    }
}
?>

<!-- Booking Form -->
<form method="POST">
    <label for="booking_type">Select Booking Type:</label>
    <select name="booking_type" id="booking_type">
        <option value="">Select Type</option>
        <option value="full_day">Full Day</option>
        <option value="half_day">Half Day</option>
        <option value="custom">Custom</option>
    </select><br>

    <label>Check-in Date:</label>
    <input type="date" name="check_in" required><br>

    <label>Check-out Date:</label>
    <input type="date" name="check_out"><br>

    <label>Select Slot (Half Day Only):</label>
    <select name="slot">
        <option value="">Select Slot</option>
        <option value="morning">Morning (8 AM - 6 PM)</option>
        <option value="evening">Evening (7 PM - 7 AM)</option>
    </select><br>

    <button type="submit">Book Now</button>
</form>

<!-- Show messages -->
<?php
if (isset($_SESSION['error'])) {
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo "<p style='color:green;'>".$_SESSION['success']."</p>";
    unset($_SESSION['success']);
}
?>
