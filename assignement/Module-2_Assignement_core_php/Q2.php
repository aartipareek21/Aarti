<!-- Q->write a PHP program for find „Thursday‟ in week using switch
Function. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Thursday in the Week</title>
</head>
<body>
    <h1>Enter a Day Number (1-7)</h1>
    <form method="post">
        <label for="day">Day Number (1 for Monday, 7 for Sunday):</label>
        <input type="number" name="day" id="day" min="1" max="7" required><br><br>
        <input type="submit" name="submit" value="Find Day">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve day number from form
        $day_number = $_POST['day'];

        // Find the day of the week using switch case
        switch ($day_number) {
            case 1:
                $day = "Monday";
                break;
            case 2:
                $day = "Tuesday";
                break;
            case 3:
                $day = "Wednesday";
                break;
            case 4:
                $day = "Thursday";
                break;
            case 5:
                $day = "Friday";
                break;
            case 6:
                $day = "Saturday";
                break;
            case 7:
                $day = "Sunday";
                break;
            default:
                $day = "Invalid Day Number!";
        }

        // Display the result
        echo "<h2>The day is: $day</h2>";

        // Display a special message if the day is Thursday
        if ($day_number == 4) {
            echo "<h3>Yes! It's Thursday!</h3>";
        }
    }
    ?>
</body>
</html>
