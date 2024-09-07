<!-- Q-> Write a PHP program to find the largest of three numbers using ternary Operator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest of Three Numbers</title>
</head>
<body>
    <h1>Enter Three Numbers</h1>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="num3">Number 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Find the largest number using ternary operator
        $largest = ($num1 > $num2) 
                    ? (($num1 > $num3) ? $num1 : $num3) 
                    : (($num2 > $num3) ? $num2 : $num3);

        // Display the result
        echo "<h2>The largest number is: $largest</h2>";
    }
    ?>
</body>
</html>
