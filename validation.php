<?php 
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful!";
}
else{
    echo "No Connection!";
}

mysqli_select_db($con, "titaneyedb");

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$duplicate = "select * from login where name = '$name' && password = '$pass' ";
$result = mysqli_query($con , $duplicate);

$num = mysqli_num_rows($result);
if($num == 1){
    echo "Duplicate Data.";
}
else{
 $insert = "insert into login(name, password, email, contact) values('$name','$pass','$email','$contact')";
    mysqli_query($con, $insert);
}

?>	

