<?php
$userName=$_POST["userName"];
$pass=$_POST["password"];
$email= $_POST["email"];

$conn= new mysqli("localhost","root","","isca");
$stmt = $conn ->prepare("insert into users(userName,password,email) values(?,?,?);");
$stmt ->bind_param("sss",$userName, $pass, $email);
$stmt ->execute();
echo 1;
?>
