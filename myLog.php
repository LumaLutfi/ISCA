<?php
$userName=$_POST["userName"];
$pass=$_POST["password"];

$conn= new mysqli("localhost","root","","isca");
$stmt = $conn ->prepare("select * from users where userName=? and password=?");
$stmt ->bind_param("ss",$userName, $pass);
$stmt ->execute();
$result = $stmt->get_result();
if($result->num_rows>0)
    echo 1;
    else
       echo 0;
