<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DynamicTable</title>
    
    <?php
    $columnNo=$_GET['columnNo'];
    $RowNo=$_GET['rowNo'];
    $cellCount=1;
    
    
    
    ?>
</head>
   <body>
    
     <?php
        $i=1;
        $j=1;
        echo "<table border=1>";
       
       for($i;$i<=$RowNo;$i++){
           echo "<tr>";
           for($j;$j<=$columnNo;$j++){
               echo "<td>".$cellCount."</td>";
               $cellCount++;
               
           }
         echo  "</tr>";
       }
       
       
        echo "</table>";
        ?>
    
</body>
</html>



