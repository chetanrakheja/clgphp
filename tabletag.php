<html>

<body>
    <?php
        $i=1;
        $num=5;
    
        echo "<table border=1>";
        for($i;$i<=10;$i++)
        {
            
            $result=$num*$i;
            if($i%2!=0){
            echo ("<tr bgcolor=white><td>".$num ."*". $i."="."</td><td>". $result."</td></tr>");
            }
            else{
            echo ("<tr bgcolor=grey><td>".$num ."*". $i."="."</td><td>". $result."</td></tr>");
            }
            
            
        }
        echo "</table>";
        ?>


</body>


</html>
