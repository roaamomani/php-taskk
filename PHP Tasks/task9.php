<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to generate Floyd's triangle
function floydsTriangle($n) {
    $num = 1; // Starting number
    
    // Outer loop for rows
    for ($i = 1; $i <= $n; $i++) {
        // Inner loop for columns in each row
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++; // Increment number for next iteration
        }
        echo "<br>"; // Line break after each row
    }
}

// Number of lines of Floyd's triangle to generate
$n = 5; // Change this number to generate more or fewer lines

// Call the function to generate Floyd's triangle
floydsTriangle($n);
?>

</body>
</html>