<?php
include 'header.php';
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://www.clubdesign.at/floatlables.js"></script>
<link rel="stylesheet" href="css/registration.css">
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
  
    <script>
    $(document).ready(function(){
      $("#btn").click(function(){
        //write ajax
        $.ajax({
          type:"POST",
          url:"conn_register.php",
          data:{
            userName:$("#userName").val(),
            password:$("#pass").val(),
            email:$("#email").val()
          },success:function(myData){
            if(myData==1){
              $("#myDiv").html("<p>Thank you for register please go to <a href='login.php'>Log In</a></p>");
            }
          }
        }); //end ajax
      });// end btn click
    });  //end jquery
    </script>
    <div class="container">
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-2 col-md-offser-4">
          <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Please sign up for Registration </h3>
          </div>
          <div class="panel-body">
            <form role="form">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="user_name" id="userName" class="form-control input-sm floatlables" placeholder="user name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="password" id="pass" name="password" class="form-control input-sm" placeholder="Password">
                  </div>
                </div>
              </div>
                    <input type="button" value="Register" id="btn" class="btn btn-info btn-block">
                    <div id="myDiv"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
      </html>
