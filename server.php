<?php 
session_start();
header('location:index.php');
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

$duplicate = "select * from login where name = '$name' && password = '$pass' ";
$result = mysqli_query($con , $duplicate);

$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $name;
    header('location: index.php');
}
else{
header('location: login.php');
}

?>	