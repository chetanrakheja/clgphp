<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check vote php</title>
</head>
<body>
    <?php
    $no=$_GET['no'];
    
    if ($no<18){
        echo "You are not elligible to vote";
    }
    
    else{
            echo "You are elligible to vote";
    }
//    $temp=1;
//    while($no>=1){
//        $temp=$temp*$no;
//        $no--;
//        
//    }
//    echo"Fact= $temp";
    ?>
</body>
</html>