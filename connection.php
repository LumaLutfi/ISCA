<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fname=$_POST["firstName"];
        $lname=$_POST["lastName"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $age=$_POST["ageRange"];
        $sex=$_POST["gender"];
        $kfname=$_POST["k_firstName"];
        $klname=$_POST["k_lastName"];
        $kage=$_POST["k_ageRange"];
        $ksex=$_POST["k_gender"];
        $f_member_name=$_POST["firstMemberName"];
        $s_member_name=$_POST["secondMemberName"];
        
        $conn= new mysqli("localhost","root","","isca");
        if (!$conn){
  die('Could not connect: ' . mysqli_error());
  exit();
}
$stmt1=$conn->prepare("insert into adult_members(firstName,lastName,email,phone,ageRange,gender) values(?,?,?,?,?,?)");
$stmt2=$conn->prepare("insert into kids_members(k_firstName,k_lastName,k_ageRange,k_gender) values(?,?,?,?)");
$stmt3=$conn->prepare("insert into isca_members(firstMemberName,secondMemberName) values(?,?)");
$stmt1->bind_param("sssiss",$fname,$lname,$email,$phone,$age,$sex);
$stmt2->bind_param("ssss",$kfname,$klname,$kage,$ksex);
$stmt3->bind_param("ss",$f_member_name,$s_member_name);
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
echo '<h3>The form is successfully submitted <span class="glyphicon glyphicon-ok"></span></h3>
<h1>Thank you!!</h1>';
        ?>
        
    </body>
</html>
