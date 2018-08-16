<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $no=$_GET['no'];
    $temp=1;
    while($no>=1){
        $temp=$temp*$no;
        $no--;
        
    }
    echo"Fact= $temp";
    ?>
</body>
</html>