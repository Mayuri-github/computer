<?php 
    //incluse database connection  value
    include_once'connection.php';
    
    //start session
    session_start();
    $msg="";
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    
   if(isset($_POST['Login']))
		{
		    $username=$_POST['user_name'];
	    	$password=$_POST['confirm_pass'];

            $result = mysqli_query($db,"SELECT user_name,confirm_pass,id FROM users WHERE user_name = '$username'");

            $row = mysqli_fetch_array($result);
            $hashed_password=$row['confirm_pass'];
	
			if($row["user_name"]==$username && password_verify($password,$hashed_password)){
              
                $new_id=$row["id"];
               
                header('Location: homepage.php?id='.$new_id);
            } 
			else {
                $_SESSION['msg']="Please enter valid user name and password";
                header('Location: login.php');
			}
		}
   
?>