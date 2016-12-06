<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Joes Food Palace website">
	<meta name="keywords" content="Food,Restaurant,Menu,Nottingham,Drink,Booking,Report">
	<meta name="author" content="Joe Burnside">
    <title>Joe's Food Palace</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="stylesheet" href="stylespf.css" type="text/css" media="print" />
	<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
  <![endif]-->
  <?php
include "connection.php";
?>
  </head>
  <body>
	  <div id="wrapper">
  		<header>
			<div id="logo">
			</div>
			<div id="titlebar">
				<h1>Imogen's Xmas List</h1>
			</div>
  		</header>
		<article>
		<h1>New List Item</h1><br>
		<h2><form action="createmenu.php" method="post" enctype="multipart/form-data">
Name: <br> <input type="text" name="name" required="true"><br><br>
Description: <br> <textarea name="description" rows="5" cols="31"></textarea><br><br>
Image: <br> <input type="file" name="image" accept="image/jpg"><br><br><br>
<input type="image" src="images/new.png" width=20% alt="Submit Form" />
</form></h2>
		</article>
        <footer>
		<h1>&#169; Joe Burnside 2015</h1>
    	</footer>
		
	  </div>	
  </body>
</html>
