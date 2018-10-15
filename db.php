<?php
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_database='employee';

$db_server=mysql_connect($db_hostname,$db_username,$db_password);

if(!$db_server) die (' unable to connect to mysql:'.mysql_error());

mysql_select_db($db_database,$db_server) or die('unable to connect to database '.mysql_error());

$query ="SELECT * FROM Employee_table";

$result = mysql_query($query);

if(!$result) die ("database access failed : ".mysql_error());

$rows = mysql_num_rows($result);

for($j=0;$j<$rows;$j++){
    echo "eid :- ".mysql_result($result,$j,'eid')."<br>";
    echo "name :- ".mysql_result($result,$j,'name')."<br>";
    echo "salary :- ".mysql_result($result,$j,'salary')."<br>";
    echo "designation :- ".mysql_result($result,$j,'designation')."<br>";
    echo "<hr>";
    
}


?>
