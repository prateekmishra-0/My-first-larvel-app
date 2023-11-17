<?php
// Function to swap two numbers
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example usage
$number1 = 5;
$number2 = 10;

echo "Before swapping: ";
echo "Number 1: $number1, Number 2: $number2";

// Call the swapNumbers function
swapNumbers($number1, $number2);

echo "<br>After swapping: ";
echo "Number 1: $number1, Number 2: $number2";
?>
