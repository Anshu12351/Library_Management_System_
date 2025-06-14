<?php

$server="localhost";
$username="root";
$password="";
$dbname="lms";

$con= mysqli_connect($server,$username,$password,$dbname);

if(!$con){
  echo "connection faild";
}

@$BookNumber = $_POST['bookno'];
@$IdNumber = $_POST['idno'];
@$Date = $_POST['date'];

$mysql= "INSERT INTO `bissu`(`bookno`, `idno`, `date`) VALUES ('$BookNumber','$IdNumber','$Date')";

$result=mysqli_query($con,$mysql);

if(!$result){
  echo "Data Not Submit In The Database";
}else{
  echo "Data Submited Succesfully In The Databaes";
}


?>