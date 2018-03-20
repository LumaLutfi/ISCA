<?php
include 'header.php';
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<script src="javaScript/login.js"></script>
      <script>
      $(document).ready(function(){
          $("#btn").click(function(){
            //write ajax
            $.ajax({
                type:"POST",
                url:"myLog.php",
                data:{
                    userName:$("#userName").val(),
                    password:$("#pass").val()
                       },success:function(myData){
                    if(myData==1){
                       window.location = 'welcome.php';
                   }
                     else
                         $("#myDiv").html("<p style='color:red;'>Please Try again!!</p>");
                }
            }); //end ajax
          });// end btn click
      });  //end jquery
      </script>

<section id="login">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-wrap">
  <h1> Log in with user name</h1>
  <form>
  <div class="form-group">
  <input type="text" name="userName" id="userName" class="form-control" placeholder="user name">
</div>
<div class="form-group">
  
<input type="password" name="password" id="pass" class="form-control" placeholder="password">
</div>
<div class="checkbox">
  <span class="character-checkbox" onclick="showPassword()"></span>
  <span class="label">Show password</span>
</div>
<input type="button" id="btn" class="btn btn-custom btn-lg btn-block" value="Log in">
<div id="myDiv"></div>
</form>
<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your Password?</a>
<hr>
</div>
</div>
</div>
</div>
  </section>
  <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
</body>
</html>
