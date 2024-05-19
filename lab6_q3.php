<!DOCTYPE html>
<html lang="en">
<head>
 <title>Calculate Area</title>
</head>
<body>

<?php
// Define the calculateArea function
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with example values
$width = 4;
$height = 25;
$area = calculateArea($width, $height);

// Display the result
echo "The area of a rectangle with width $width and height $height is $area.";
?>

</body>
</html>
