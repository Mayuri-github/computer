<!DOCTYPE html>
<html>
	<head>
		<title>forgot password</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			 <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="forgot_box">
        <div class="header">
			<h2>Forgot Password?</h2>
			
        </div>

		<form method="post" action="login.php">
			 <div class="input-group">
			    <p> Email</p>
                <input type="email" name="mail_id" placeholder="Email Id">
			    
		    <div class="input-group"> 
				<p> Password</p>
				<input type="password" name="password" placeholder="password" id="pass" >
			</div>
			<div class="input-group">
                <input  type="submit" name="Reset" value="Reset">
            </div>
		</form>
	</div>	

</body>
</html>