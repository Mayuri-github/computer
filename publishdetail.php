<?php

    include_once'connection.php';

    $db=mysqli_connect($servername,$username,$password,$dbname);
	

	if(isset($_POST['submit']))
		{

				$title= $_POST['title'];
				$content = $_POST['content'];
				$image = $_POST['image'];
				$weblink = $_POST['weblink'];

				$query = "INSERT INTO publish (title,content,image,weblink,timestamp) VALUES ('$title','$content','$image','$weblink','$timestamp')";

				mysqli_query($db,$query);
				header('location: homepage.php'); 
		}
			 
		

		$results = mysqli_query($db,"SELECT * FROM publish");

?>