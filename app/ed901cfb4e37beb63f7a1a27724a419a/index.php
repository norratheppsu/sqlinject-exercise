<!DOCTYPE html>
<html>
<head>
</head>
<body>	<!-- Fixed navbar -->
	<div id="login" class="span4 well" style='background :white; border:1px silver solid;'>
			
		<form class="form-signin" action="verify.php" method="post" style="border:0px;">
		<h4>User Id </h4>
		<input type="text" class="input-block-level" placeholder="User Id" name="UserId" id="UserId">
		<h4>Password  </h4> 
		<input type="password" class="input-block-level" placeholder="Password" name="Password" id="Password"><br>
		<input class="btn  btn-primary" type="submit" name='Login' value = "Log in" style='margin-top:10px;'/>
		<!-- Testing: username=user, password=user -->
		</form>
	</div>
</body>
</html>
