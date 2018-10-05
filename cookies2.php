<?php 
$cookie_name="user";
$cookie_value="Chetan";

setcookie($cookie_name,$cookie_value,time()+86400,"/");

$cookie_name1="Color";
$cookie_value1="green";

setcookie($cookie_name1,$cookie_value1,time()+86400,"/");
?>
    <html>

    <head>Php Cookie Test</head>

    <?php
if(isset($_COOKIE[$cookie_name1])) {
    echo "<body bgcolor= '" . $_COOKIE[$cookie_name1]."' >";
}
?>


        <br>
        <hr>
        <?php
if(isset($_COOKIE[$cookie_name])) {
    echo "Your name is " . $_COOKIE[$cookie_name];
}
?>


            </body>

    </html>
