<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'trial');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = "select * from signup where email = '$email'";
if($result = mysqli_query($conn,$s)){
    $num = mysqli_num_rows($result);
    if($num == 0){
        $reg="insert into signup(name,email,password) values ('$name','$email','$password')";
        if(mysqli_query($conn,$reg)){
        echo "Registration succesful";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        echo "This email already exists.Try ssigning in";
    }
}
?>