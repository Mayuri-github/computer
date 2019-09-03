<?php

include_once'connection.php';

$db=mysqli_connect($servername,$username,$password,$dbname);

if($db->connect_error){
	die("connection failed:".$db);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
    <div class="container">
		<div class="nav">
			<div class=nav_link>
        		
        		<a href="publish.php?edit=<?php echo $new_id; ?>">Publish</a>
        		<a href="manage.php?edit=<?php echo $new_id; ?>">Manage Publication</a>
        		<a href="logout.php">Logout</a>
    		</div>
    		<div class="nav_img">
    			<img src="logo.png" alt="avatar">
    		</div>
        </div>
        <div class="main">
				
				<h2>Hello User you have <?php $i=0; echo ++$i;?> publication</h2>
		

				 <div class="row">
					<?php 

					  //fetching
						$query="SELECT title,content FROM publish";
                    
						//loop rows
						if($result=mysqli_query($db,$query))
						{
							while($row=mysqli_fetch_row($result)){
								echo('
									<div class="column"> 
										<img src="c7.jpg" alt="computer" style="width:100%">
										<div class="first">
											<h3>'.$row[0].'</h3>
										</div>
										<div class="cnt">
										'.$row[1].'
										</div>
										<div class="last">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
										</div>
									</div>');
							}
							mysqli_free_result($result);
						}
						mysqli_close($db);
                    ?>

			    </div>             
        </div>
    </div>
</body>
</html>
