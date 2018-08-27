<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../favicon.ico" sizes="16x16" type="image/png">
    <title>Take 5 values from user  and calculate square</title>
    
    <?php
    
    $arr[0]=$_GET['no1'];
    $arr[1]=$_GET['no2'];
    $arr[2]=$_GET['no3'];
    $arr[3]=$_GET['no4'];
    $arr[4]=$_GET['no5'];
    
    ?>
</head>
    <body>
    <?php
    $nl="<br>";
    echo "Entered values are :- $nl";
    
    foreach($arr as $i){
            
           echo " $i =" ;
            echo $i*$i;
        echo $nl;
       }
    ?>
</body>
</html>