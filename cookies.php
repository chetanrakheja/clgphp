<?php 
$cookie_name="user";
$cookie_value="Chetan";

setcookie($cookie_name,$cookie_value,time()+86400,"/");

?>
    <html>

    <head>Php Cookie Test</head>

    <body>
        <br>
        <hr>
        <?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named d" . $cookie_name . "d is not set!";
} 
        else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
    </body>

    </html>
