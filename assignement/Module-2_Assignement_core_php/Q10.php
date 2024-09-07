
 <!-- Q-> How can you tell if a number is even or odd without using any Condition or loop? -->


<!-- The bitwise AND operator can be used to check if the least significant bit of the number is 0 (for even numbers) or 1 (for odd numbers). Every even number has a 0 in its least significant bit, and every odd number has a 1 -->

<?php
$number = 7;  // Replace with any number you want to check

// Use the ternary operator to determine if the number is even or odd
echo ($number & 1) ? "Odd" : "Even";
?>
