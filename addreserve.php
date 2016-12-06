<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Imogens Xmas List">
	<meta name="author" content="Joe Burnside">
    <title>Imogens Xmas List</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="stylesheet" href="stylespf.css" type="text/css" media="print" />
	<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
  <![endif]-->
  <?php
  include "connection.php";
  $id = $_GET["ID"];
  $sql = "SELECT * FROM tbl_menu WHERE ID = '$id'";
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
		<h1>Reserve Item</h1>
        <?php
		$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count > 0){
while($row = mysqli_fetch_assoc($result)){
	echo          "<h1>" . $row["Name"] .
	         "<br><br>" . $row["Description"] .
			 "<h2><form action='reservescript.php' method='post'>" . 
"Please type your name to reserve this item: <br><br><br> <input name = 'id' type = 'hidden' value='" . $id . "'> <input type='text' name='username'><br><br><br>" .
"<input type='image' src='images/login.png' width=20% alt='Submit Form' /></form></h2>";
	}
	}
?>		
		</article>
        <footer>
		<h1>&#169; Joe Burnside 2016</h1>
    	</footer>
		
	  </div>	
  </body>
</html>