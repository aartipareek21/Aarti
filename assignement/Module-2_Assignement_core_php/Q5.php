<!-- Q-> Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series in PHP</title>
</head>
<body>
    <h1>Fibonacci Series</h1>

    <?php
    // Define the number of terms in the Fibonacci series
    $num_of_terms = 10;

    // Initial two terms of the Fibonacci series
    $first = 0;
    $second = 1;

    echo "<p>The first $num_of_terms numbers in the Fibonacci series are:</p>";
    echo "<ul>";

    // Print the first two terms
    echo "<li>$first</li>";
    echo "<li>$second</li>";

    // Print the rest of the Fibonacci series
    for ($i = 3; $i <= $num_of_terms; $i++) {
        $next = $first + $second;
        echo "<li>$next</li>";

        // Update values for the next iteration
        $first = $second;
        $second = $next;
    }

    echo "</ul>";
    ?>
</body>
</html>
