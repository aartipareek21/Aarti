<!-- Q-> Write a program for this Pattern:
*****
*
*
*
***** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Star Pattern</title>
</head>
<body>
    <h1>Star Pattern</h1>

    <?php
    // Print the first line with 5 stars
    echo "*****<br>";

    // Loop to print 3 lines with a single star
    for ($i = 1; $i <= 3; $i++) {
        echo "*<br>";
    }

    // Print the last line with 5 stars
    echo "*****<br>";
    ?>
</body>
</html>
