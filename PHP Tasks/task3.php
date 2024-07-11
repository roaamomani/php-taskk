<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the size of the square
$size = 5;

// Nested loop to print the square pattern
for ($row = 1; $row <= $size; $row++) {
    for ($col = 1; $col <= $size; $col++) {
        echo "*   ";
    }
    echo "<br>";
}
?>

</body>
</html>