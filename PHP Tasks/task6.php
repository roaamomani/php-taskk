<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Input text
$text = "Orange Coding Academy";

// Character to count
$char = 'c';

// Count occurrences of $char in $text
$count = substr_count($text, $char);

// Print the result
echo "Expected Output: $count";
?>

</body>
</html>