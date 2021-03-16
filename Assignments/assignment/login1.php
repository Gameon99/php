<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'project');
$scholarno = $_POST['schoarno'];
$password = $_POST['password'];
$s = "select * from student where scholarno = '$scholarno'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "username already taken";
}else{
    $reg="insert into users_db(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration succesful";
}
?>