<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $kfname = $_POST["k_firstName"];
        $klname = $_POST["k_lastName"];
        $kage = $_POST["k_ageRange"];
        $ksex = $_POST["k_gender"];

        $conn = new mysqli("localhost", "root", "", "isca");
        if (!$conn) {
            die('Could not connect: ' . mysqli_error());
            exit();
        }
        $stmt = $conn->prepare("insert into kids_members(k_firstName,k_lastName,k_ageRange,k_gender) values(?,?,?,?)");
        $stmt->bind_param("ssss", $kfname, $klname, $kage, $ksex);
        $stmt->execute();
        if (isset($_POST['submit'])) {
            echo 'your form is successfully submited</br>';
            echo '<a href="welcome.php">Back</a>';
        }
        ?>

    </body>
</html>
