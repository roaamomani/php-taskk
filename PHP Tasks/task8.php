<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Loop through numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Check for multiples of both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    // Check for multiples of 3
    else if ($i % 3 == 0) {
        echo "Fizz ";
    }
    // Check for multiples of 5
    else if ($i % 5 == 0) {
        echo "Buzz ";
    }
    // Print the number itself
    else {
        echo $i . " ";
    }
}
?>

</body>
</html>