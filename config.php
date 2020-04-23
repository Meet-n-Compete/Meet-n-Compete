<?php
ob_start(); //Turns on output buffering
$db = parse_ini_file("config.ini",true);
$servername = $db['Database']['servername'];
$database = $db['Database']['database'];
$DBusername = $db['Database']['username'];
$DBpassword = $db['Database']['password'];

//echo $servername." + ".$database." + ".$DBusername." + ".$DBpassword;

    $timezone = date_default_timezone_set("America/Chicago");
    $con = mysqli_connect($servername, $DBusername,$DBpassword,$database);

if(mysqli_connect_errno()){
    echo "Failed to connect DB: ".mysqli_connect_errno();
}
