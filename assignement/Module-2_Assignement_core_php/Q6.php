<!-- Q->Write a program to find whether a number is Armstrong or not -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Armstrong Number</title>
</head>
<body>
    <h1>Check Armstrong Number</h1>
    <form method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve the input number
        $number = $_POST['number'];
        $sum = 0;
        $temp = $number;
        $num_of_digits = strlen((string)$number); // Calculate number of digits

        // Calculate the sum of digits raised to the power of the number of digits
        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $num_of_digits);
            $temp = (int)($temp / 10); // Remove the last digit
        }

        // Check if the sum equals the original number
        if ($sum == $number) {
            echo "<h2>$number is an Armstrong Number.</h2>";
        } else {
            echo "<h2>$number is not an Armstrong Number.</h2>";
        }
    }
    ?>
</body>
</html>
