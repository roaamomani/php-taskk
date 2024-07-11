<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Initialize a variable to hold the total sum
$total = 0;

// Loop through integers from 0 to 30 and accumulate the sum
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

// Display the total sum
echo "Total: $total";
?>

</body>
</html>