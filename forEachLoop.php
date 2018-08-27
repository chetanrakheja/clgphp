<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For each loop</title>
    <link rel="icon" href="favicon.ico" type="image/png">
</head>
<body>
   
   <?php
    $nl="<br>";
       $arr=array(67,50,88,90,100);
       $arr1=array('fname'=>'Chetan','lname'=>'Rakheja','e-mail'=>'rakhejachetan@gmail.com');
        
    echo "Associaltive  Array $nl";
       foreach($arr1 as $item => $keyval){
           echo " $item => $keyval $nl" ;
       }
    echo" $nl $nl $nl $nl";
    
    echo "Numerical indexed Array $nl";
        foreach($arr as $i){
            
           echo " $i $nl" ;
       }
   
   ?>
    
</body>
</html>