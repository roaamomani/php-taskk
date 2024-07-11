<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to calculate factorial of a number
function factorial($number) {
    $factorial = 1;
    
    // Calculate factorial using a for loop
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}

// Sample input
$input = 5;

// Calculate factorial and print the result
$result = factorial($input);
echo "Factorial of $input is: $result";
?>

</body>
</html>