<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../favicon.ico" sizes="16x16" type="image/png">
    <title>Find Sum Avg</title>
    
    <?php
    
    $arr[0]=$_GET['no1'];
    $arr[1]=$_GET['no2'];
    $arr[2]=$_GET['no3'];
    $arr[3]=$_GET['no4'];
    $arr[4]=$_GET['no5'];
    
    ?>
</head>
    <?php
    $sum = 0;
    $count=0;
    foreach($arr as $i)
    {
        $sum+=$i;
        $count++;
    }
    
    echo "<h1>Sum is $sum </h1>";
    echo "<h1>Avg is ". $sum/$count . " </h1>";
    ?>
</body>
</html>