<!Doctype html>
<html>
	<head>
		<title>News About Computers</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<div class="header">
			<div class="logo">
				<img src="logo.png" class="logo_header">
			</div>

			<div class="head">
				<h1>COMPUTERS NEWS</h1>
				
			</div>
			<div class="head">
				<i class="fa fa-phone"> +91 9706 9752 60</i><br>
				<i class="fa fa-envelope"> computers@gmail.com</i><br><br>
				<a href="login.php">LOG IN </a> | <a href="homepage.php">HOME</a>
			</div>	
		</div>	<hr>	

		<div class="section">
		  <img class="mySlides" src="c7.jpg">
		  <img class="mySlides" src="c11.jpeg">
		  <img class="mySlides" src="c15.jpg">
		</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); 
}
</script>


</body>
</html> 

