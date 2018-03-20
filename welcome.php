<?php
include 'header.php';
?>
<!DOCTYPE html>

<html>
    <head>

        <style>
            .style {
                font-family: "Times New Roman", Georgia, Serif;
                font-size: 20px;
                color:green;
            }
            h2 {
                margin: auto;
                width: 60%;
                padding: 10px;
            }
            h1{
                text-shadow: 2px 2px 8px #FF0000;
            }
            h3{
                font-family: serif;
            }

            .error
{
color:red;
font-family:verdana, Helvetica;
}

        </style>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4">
                        <img src="IMG_2932.JPG" target="_blank" class="float-left">
                    </div>
                    <div class="col-md-8">
                        <h1>Welcome to ISCA</h1>
                        <h2>النادي العراقي الاجتماعي في البرتا</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="form-group" >
                    <form id="myform" name="form" action="connection.php" method="post">
                        <h3>Adult Informationالرجاء تعبءة البيانات التي تخص البالغين من 18 فما فوق</h3><br>

                        <div class="well">
                            <label for="member" style="color: red;">1.Member</label>

                            <div class="form-group">
                                First Name:<input type="text" class="form-control"  name="firstName" required="required">
                            </div>
                            <div class="form-group">
                                Last Name:<input type="text" class="form-control"  name="lastName" required="required">
                            </div>
                            <div class="form-group">
                                Email:<input type="email" class="form-control" name="email" required="required">
                            </div>
                            <div class="form-group">
                                Phone:<input type="text" class="form-control" name="phone" required="required">
                                <p>Please enter your phone number in format (XXX) XXX-XXXX</p>

                            </div>
                            <div class="form-group">
                                <h4>Age Range:</h4>
                                <input type="radio"  name="ageRange" value="18-25">18-25
                                <input type="radio" name="ageRange" value="26-35">26-35
                                <input type="radio" name="ageRange" value="36-45">36-45
                                <input type="radio" name="ageRange" value="46+">46+
                            </div>
                            <div class="form-group">
                                <h4>Gender:</h4>
                                <input type="radio"  name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="div1" ><a href="adult-member2.php">add member</a></div>
<!--                            <div id="div2" ><a href="adult-member3.php">add member3</a></div>
                            <div id="div3" ><a href="adult-member4.php">add member4</a></div>
                            <div id="div4" ><a href="adult-member5.php">add member5</a></div>-->
                        </div>
                        <!-- ----------------------------------------------------------------------------------------------------------------- -->

                        <h3>Kids Informationالرجاء تعبءة البيانات التي تخص الاطفال من عمر0 الى عمر 18</h3><br>

                        <div class="well">
                            <label for="member" style="color: red;">1.Member</label>

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
                            <!--<div><input type="button" name="btn" value="Save member">
                                <button type="reset" name="btn" value="Cancel"></button></div>-->
                        </div>
                        <div class="form-group">
                            <div id="div1" ><a href="kids-member2.php">add member</a></div>
<!--                            <div id="div2" ><a href="kids-member3.php">add member3</a></div>
                            <div id="div3" ><a href="kids-member4.php">add member4</a></div>
                            <div id="div4" ><a href="kids-member5.php">add member5</a></div>
                            <div id="div5" ><a href="kids-member6.php">add member6</a></div>-->
                        </div>

                        <div class="form-group"><h4>Address:</h4><input type="text" class="form-control" required="required" ></div>
                        <div class="form-group"><h4>Postal Code:</h4><input type="text" class="form-control" required="required"></div>
                        <div class="form-group"><h4> City:</h4>
                            <select name="city" required="required">
                                <option></option>
                                <option>Calgary</option>
                                <option>Edmonton</option>
                                <option>Lethbridge</option>
                                <option>Red Deer</option>
                                <option>Medicine Hat</option>
                                <option>St. Albert</option>
                                <option>Grande Prairie</option>
                                <option>Airdrie</option>
                                <option>Fort McMurray</option>
                                <option>Leduc</option>
                                <option>Spruce Grove</option>
                                <option>Camrose</option>
                                <option>Fort Saskatchewan</option>
                                <option>Lloydminster</option>
                                <option>Brooks</option>
                                <option>Lacombe</option>
                                <option>Cold Lake</option>
                                <option>Wetaskiwin</option>
                                <option>Sherwood Park</option>
                                <option>Canmore</option>
                                <option>Cochrane</option>
                                <option>Chestermere</option>
                                <option>Okotoks</option>
                                <option>Banff</option>
                                <option>Sylvan Lake</option>
                                <option>Strathmore</option>
                                <option>Beaumont</option>
                                <option>Jasper</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="style">Name two ISCA members that you know-اذكر اثنين تعرفهم من منتسبي النادي العراقي في البرتا </label>
                        </div>
                        <div class="form-group">
                            <h4>First member:</h4><input type="text" name="firstMemberName" class="form-control"required="required"><br>
                            <h4>Second member:</h4><input type="text" name="secondMemberName" class="form-control" required="required">
                        </div>
                        <div class="container">
                            <input type="submit" class="btn btn-info" name="submit" value="Submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </body>
</html>
