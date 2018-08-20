<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fav color check</title>
    
    <?php
    $name=$_GET['name'];
    $bgcolor=$_GET['bgcolor'];
    $fgcolor=$_GET['fgcolor'];
    ?>
</head>
    <?php

echo (" <body bgcolor=$bgcolor style=color:$fgcolor>");
    echo "<h1>welcome $name </h1>"
    ?>
</body>
</html>