<?php 
session_start();
header('location:feedback.php');
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful!";
}
else{
    echo "No Connection!";
}

mysqli_select_db($con, "titaneyedb");

$name = $_POST['name'];
$Mobile = $_POST['number'];
$email = $_POST['email'];
$Message = $_POST['message'];


 $insert = "insert into contact(name, number, email, message) values('$name','$Mobile','$email','$Message')";
    mysqli_query($con, $insert);

?>