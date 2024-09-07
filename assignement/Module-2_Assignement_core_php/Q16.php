<!-- Q16->Declare a Multi Dimensioned array of floats called balances having Three rows and five columns. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>
    <h1>Multidimensional Array of Floats</h1>

    <?php
    // Declare and initialize the multidimensional array
    $balances = array(
        array(1234.56, 7890.12, 3456.78, 4567.89, 2345.67), // Row 1
        array(6789.01, 2345.67, 8901.23, 3456.78, 5678.90), // Row 2
        array(9012.34, 5678.90, 1234.56, 7890.12, 4567.89)  // Row 3
    );

    // Display the multidimensional array
    echo "<h2>Balances Array:</h2>";
    echo "<pre>";
    print_r($balances);
    echo "</pre>";
    ?>
</body>
</html>
