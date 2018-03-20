<?php
include 'header.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div class="form-group" >
                    <form action="kids_connection.php" method="post">
                        <div class="well">
                            <label style="color: red;">2.Member</label>
                            <div class="form-group">
                                First Name:<input type="text" class="form-control" name="k_firstName" required="required">
                            </div>
                            <div class="form-group">
                                Last Name:<input type="text" class="form-control" name="k_lastName" required="required">
                            </div>
                            <div class="form-group">
                                <h4>Age Range:</h4>
                                <input type="radio"  name="k_ageRange" value="0-5">0-5
                                <input type="radio" name="k_ageRange" value="6-11">6-11
                                <input type="radio" name="k_ageRange" value="12-14">12-14
                                <input type="radio" name="k_ageRange" value="15-18">15-18
                            </div>
                            <div class="form-group">
                                <h4>Gender:</h4>
                                <input type="radio"  name="k_gender" value="male">Male
                                <input type="radio" name="k_gender" value="female">Female
                            </div>
                            <div><input type="submit" name="submit" value="Save member">
                                <input type="reset" name="btn" value="Cancel"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>


    <!--
            <script>
          $(document).ready(function(){
            $("a").click(function(){
               $("#div2").load("adult-member3.php");
              });
      });
             </script>-->

</body>
</html>
