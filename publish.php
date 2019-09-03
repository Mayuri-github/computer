<?php 
	include_once'publishdetail.php';


?>
<!DOCTYPE html>
<html>
<head>
    <title>Publish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signup_box">
        <div class="header">
                <h2>PUBLISH</h2>
        </div>
        <form  method="post" action="publishdetail.php" enctype="multipart/form-data">
            <div class="input-group">
                <p>Title</p>
                <input type="text" name="title" placeholder="Enter title">
            </div>  
            
            <div class="input-group">          
                    <p>Content</p>
                    <input type="text" name="content" placeholder="content">
            </div>

            <div class="input-group">  
                    <p>Image</p>
                    <input type="file" name="image" id="fileToUpload">
            </div>

            <div class="input-group">
                <p>Website Link</p>
                <input type="text" name="weblink" placeholder="Website Link or Email">
            </div>

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>   
		</form>
    </div>
</body>
</html>