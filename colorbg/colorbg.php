<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fav color check</title>
    
    <?php
    $name=$_GET['name'];
    $color=$_GET['color'];
    
    ?>
</head>
    <?php

echo (" <body style='background-color: $color;' ">)
    echo "welcome $name"
    ?>
</body>
</html>