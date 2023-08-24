<?php 
session_start();
header('location:order.php');
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful!";
}
else{
    echo "No Connection!";
}

mysqli_select_db($con, "titaneyedb");

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$country = $_POST['country'];


 $insert = "insert into customer(name,email,city,address,zip,country) values('$name','$email','$city','$address','$zip','$country')";
    mysqli_query($con, $insert);

?>