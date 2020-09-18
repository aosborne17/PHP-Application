<?php

include('top-cache.php'); 

$host = 'db';
$user = 'devuser';
$password = 'devpass';
$db = 'web_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL Server';

// $txt = "PHP";
// echo "I love $txt!";

include('bottom-cache.php');