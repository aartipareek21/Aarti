<!-- Q-> Get random values from array -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Random Values from Array</title>
</head>
<body>
    <h1>Random Values from Array</h1>

    <?php
    // Original array
    $array = array("Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grape");

    // Get one random key from the array
    $randomKey = array_rand($array);
    $randomValue = $array[$randomKey];

    // Get multiple random keys from the array (e.g., 3 random values)
    $randomKeys = array_rand($array, 3);
    $randomValues = array_map(function($key) use ($array) {
        return $array[$key];
    }, $randomKeys);

    // Display the results
    echo "<h2>Original Array:</h2>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<h2>Random Value (one):</h2>";
    echo $randomValue . "<br>";

    echo "<h2>Random Values (multiple):</h2>";
    echo "<pre>";
    print_r($randomValues);
    echo "</pre>";
    ?>
</body>
</html>
