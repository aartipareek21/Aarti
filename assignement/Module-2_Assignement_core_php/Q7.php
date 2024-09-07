<!-- Write a
program to print the below format :
5 9
2610
3711
4812 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Number Format</title>
</head>
<body>
    <h1>Number Format Output</h1>

    <?php
    // Print the first line
    echo "5 9<br>";

    // Loop to print the number pattern
    for ($i = 2; $i <= 4; $i++) {
        for ($j = 6; $j <= 9; $j++) {
            echo ($i * $j);
        }
        echo "<br>"; // Line break after each row
    }
    ?>
</body>
</html>
