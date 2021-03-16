<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'project');
$scholarno = $_POST['scholarno'];
$password = $_POST['password'];
$email = $_POST['email'];
$s = "select * from student where scholarno = '$scholarno'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Scholarno already exists";
}else{
    $reg="insert into student(scholarno,password,email) values ('$scholarno','$password','$email')";
    mysqli_query($conn,$reg);
    echo "Registration succesful";
}
?>