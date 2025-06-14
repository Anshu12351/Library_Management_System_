<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con =mysqli_query($server,$username,$password,$dbname);

if(!$con){

echo "connection failed";
}
else{
echo "connection successfull";
}


?>