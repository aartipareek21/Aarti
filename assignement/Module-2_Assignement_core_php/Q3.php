<!-- Q-> Write a PHP program to check Leap years between 1901 to 2016 Using nested if. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Years between 1901 and 2016</title>
</head>
<body>
    <h1>Leap Years from 1901 to 2016</h1>

    <?php
    echo "<ul>";
    for ($year = 1901; $year <= 2016; $year++) {
        // Nested if conditions to check if a year is a leap year
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    echo "<li>$year is a Leap Year</li>";
                }
            } else {
                echo "<li>$year is a Leap Year</li>";
            }
        }
    }
    echo "</ul>";
    ?>
</body>
</html>
