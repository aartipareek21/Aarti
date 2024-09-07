<!-- Q->Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Array Elements</title>
</head>
<body>
    <h1>Sum of Array Elements</h1>

    <?php
    // Define the array with five integer elements
    $numbers = array(10, 20, 30, 40, 50);

    // Initialize total to 0
    $total = 0;

    // Use a for loop to iterate over the array and sum the elements
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    // Display the result
    echo "<h2>Total Sum:</h2>";
    echo $total;
    ?>
</body>
</html>
