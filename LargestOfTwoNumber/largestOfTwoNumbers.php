<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>largestOfTwoNumbers</title>
    
    <?php
    $no1=$_GET['no1'];
    $no2=$_GET['no2'];
    $largest=0;
    $smallest=0;
    
    if ($no1>$no2){
        $largest = $no1;
        $smallest = $no2;
    }
    else{
        $largest = $no2;
        $smallest = $no1;
    }
    
    
    ?>
</head>
   <body>
    <?php

echo ("<h1>".$largest ." is greater than ".$smallest."</h1>");
   
    ?>
    
</body>
</html>