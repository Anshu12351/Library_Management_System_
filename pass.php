<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

// Create connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    // Display detailed error message if the connection fails
    echo "Connection Failed: " . mysqli_connect_error();
} 

@$idNumber=$_POST['id'];
 @$name=$_POST['name'];
 @$dob=$_POST['age'];
 @$phone=$_POST['phone'];
 @$email=$_POST['email'];
 @$address=$_POST['address'];
 @$gender=$_POST['gender'];
 @$photo=$_POST['photo'];


 $sql="INSERT INTO `lcard`(`id`, `name`, `age`, `phone`, `email`, `address`, `gender`, `photo`) VALUES ('$idNumber','$name','$dob','$phone','$email','$address','$gender','$photo')";
  $Connection=mysqli_query($con,$sql);

  if(!$Connection){
    echo "Failed The Data Inserting";
  }else{
    echo "Data Inserting Successfully Submit In The DataBase";
  }
?>