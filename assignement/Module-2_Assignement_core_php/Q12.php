<!-- Q->Write program to remove duplicate values from array -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Duplicates from Array</title>
</head>
<body>
    <h1>Remove Duplicate Values from Array</h1>

    <?php
    // Original array with duplicate values
    $originalArray = array(1, 2, 2, 3, 4, 4, 5, 6, 6, 7);

    // Remove duplicates
    $uniqueArray = array_unique($originalArray);

    // Display the results
    echo "<h2>Original Array:</h2>";
    echo "<pre>";
    print_r($originalArray);
    echo "</pre>";

    echo "<h2>Array After Removing Duplicates:</h2>";
    echo "<pre>";
    print_r($uniqueArray);
    echo "</pre>";
    ?>
</body>
</html>
