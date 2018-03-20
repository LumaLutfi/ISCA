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
        
        
        $conn= new mysqli("localhost","root","","isca");
        if (!$conn){
  die('Could not connect: ' . mysqli_error());
  exit();
}
$stmt=$conn->prepare("insert into adult_members(firstName,lastName,email,phone,ageRange,gender) values(?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$fname,$lname,$email,$phone,$age,$sex);
$stmt->execute();
if (isset($_POST['submit'])){
    echo 'your form is successfully submited</br>';
    echo '<a href="welcome.php">Back</a>';
}

        ?>
        
    </body>
</html>
