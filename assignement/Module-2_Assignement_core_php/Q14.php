<!-- Q->Write a PHP script which decodes the following JSON string. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decode JSON String</title>
</head>
<body>
    <h1>Decode JSON String</h1>

    <?php
    // JSON string
    $jsonString = '{"name": "John Doe", "age": 30, "city": "New York", "email": "john.doe@example.com", "is_member": true}';

    // Decode JSON string to an associative array
    $decodedArray = json_decode($jsonString, true);

    // Check if json_decode was successful
    if (json_last_error() === JSON_ERROR_NONE) {
        // Display the decoded array
        echo "<h2>Decoded JSON as Array:</h2>";
        echo "<pre>";
        print_r($decodedArray);
        echo "</pre>";
    } else {
        echo "<h2>Error decoding JSON:</h2>";
        echo "Error: " . json_last_error_msg();
    }
    ?>
</body>
</html>
