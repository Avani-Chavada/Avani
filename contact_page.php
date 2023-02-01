<?php 
    
$uname = $_POST['name'];
$email =  $_POST['email']; 
$num =  $_POST['number'];
$message =  $_POST['message'];
echo "your name is :".$uname.'<br>';
echo "your email is :".$email.'<br>';
echo "your number is :".$num.'<br>';
echo "enter your message  is :".$message.'<br>';


$con= mysqli_connect("localhost","root","","users");

if($con){
    echo "connect successfully";
}
else{
    echo "do not connect";
}

$sql="INSERT INTO `contactfrom`(`name`, `email`, `number`, `message`)  VALUES ('$uname', '$email', '$num', '$message')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo "inserted successfully.....";
}
else{
    echo "do not insrted";
}


?>