<?php 
	include_once'signupdetails.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signup_box">
        <div class="header">
                <h2>Sign up</h2>
        </div>
        <form  method="post" action="signupdetails.php">
            <div class="input-group">
                <p>   First Name</p>
                <input type="text" name="first_name" placeholder="First Name">
            </div>  
            <div class="input-group">          
                    <p>   Last Name</p>
                    <input type="text" name="last_name" placeholder="Last Name">
            </div>
            <div class="input-group">
                <p>  User Name</p>
                <input type="text" name="user_name" placeholder="User name">
            </div>

            <div class="input-group">
			    <p> Email</p>
                <input type="email" name="mail_id" placeholder="Email Id">
            </div>

            <div class="input-group">
                <p> Password</p>
                <input type="password" name="password" placeholder="password" id="pass" >
            </div>
            <div class="input-group">
			    <p>  Confirm Password</p>
                <input type="password" name="confirm_pass" placeholder="Password" id="confirm_pass">
            </div>
           

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit" onclick="validate()">
            </div>

            
		</form>
    </div>
    
	<script>
        function validate(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("confirm_pass").value;
            if (a!=b){
               alert("Password do no match");
               return false;
            }
        }
     </script>
</body>


</html>