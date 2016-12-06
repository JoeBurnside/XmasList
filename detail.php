<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<?php
		$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count > 0){
while($row = mysqli_fetch_assoc($result)){
	echo          "<h1>" . $row["Name"] .
	     "<br><br><img src=getImage.php?ID=" . $row["ID"] . " width=50%>" .
	         "<br><br>" . $row["Description"] .
			 "<br><br><a href=addreserve.php?ID=" . $row["ID"] . "><img src=images/basket.png width=20%></a>";
	}
	}
?>
<br><br><a href=index.php><img src=images/menu.png width=20%></a>
</h1>
		</article>
        <footer>
		<h1>&#169; Joe Burnside 2016</h1>
    	</footer>
		
	  </div>	
  </body>
</html>