<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to print Fibonacci sequence up to a given number of terms
function fibonacci($terms) {
    // Initialize first two Fibonacci numbers
    $num1 = 0;
    $num2 = 1;
    
    // Print the first two terms
    echo "$num1, $num2";
    
    // Generate Fibonacci sequence using a for loop
    for ($i = 2; $i < $terms; $i++) {
        $next = $num1 + $num2;
        echo ", $next";
        // Update variables for next iteration
        $num1 = $num2;
        $num2 = $next;
    }
}

// Number of terms in the Fibonacci sequence to generate
$terms = 10; // Change this number to generate more terms

// Call the function to print Fibonacci sequence
fibonacci($terms);
?>

</body>
</html>