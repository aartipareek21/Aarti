
<!-- Q-> How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array. -->


<!-- Declaring Arrays in PHP

In PHP, arrays are versatile data structures that can hold multiple values in a single variable. There are three types of arrays in PHP:

    Indexed Arrays (Numerical arrays)
    Associative Arrays
    Multidimensional Arrays

Let's explore each with examples: -->


<!-- 1. Indexed Arrays (Numerical Arrays) -->
<?php
// Declaring an indexed array
$fruits = array("Apple", "Banana", "Orange");

// You can also declare using square brackets
$colors = ["Red", "Green", "Blue"];

// Accessing array elements
echo $fruits[0]; // Outputs: Apple
echo $colors[2]; // Outputs: Blue
?>

<!-- 2. Associative Arrays -->
<?php
// Declaring an associative array
$person = array("name" => "John", "age" => 25, "city" => "New York");

// Another way using square brackets
$car = ["brand" => "Toyota", "model" => "Corolla", "year" => 2020];

// Accessing array elements using their keys
echo $person['name']; // Outputs: John
echo $car['model'];   // Outputs: Corolla
?>

<!-- 3. Multidimensional Arrays -->
<?php
// Declaring a multidimensional array
$students = array(
    array("John", 20, "Computer Science"),
    array("Alice", 22, "Mathematics"),
    array("Bob", 21, "Physics")
);

// Accessing multidimensional array elements
echo $students[0][0]; // Outputs: John (row 1, column 1)
echo $students[1][2]; // Outputs: Mathematics (row 2, column 3)
?>

<!-- Converting JSON String to Array in PHP -->
<?php
// JSON string
$jsonString = '{"name": "John", "age": 25, "city": "New York"}';

// Convert JSON string to an associative array
$array = json_decode($jsonString, true); // true makes it return an array

// Accessing array elements
echo $array['name']; // Outputs: John
echo $array['city']; // Outputs: New York

// If you want to inspect the array
print_r($array);
?>



