<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Joes Food Palace website">
	<meta name="author" content="Joe Burnside">
    <title>Imogens Xmas List</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="stylesheet" href="stylespf.css" type="text/css" media="print" />
	<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
  <![endif]-->
  <?php
include "connection.php";
$sqlst = "SELECT * FROM tbl_menu WHERE reservedby = 'nobody' ORDER BY Name";
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
		<h1>Edit List</h1><br>
		<h1><a href=newitem.php><img src=images/new.png width=20%></a></h1>
		<br>
		<h1>List</h1>
        <SPAN STYLE="font-weight:bold; color:white">
		<?php
		$result = mysqli_query($con, $sqlst);
while($row = mysqli_fetch_assoc($result)){
	echo "<p>" .
		 "<table width=100%>" .
		 "<tr>" .
		 "<td width = 10%></td>" .
		 "<td width=10%><img src=getImage.php?ID=" . $row["ID"] . " width=100%></td>" .
		 "<td width = 5%></td>" .
         "<td width = 25%>". $row["Name"] . "</td>" .
		 "<td width = 15%><a href=edititem.php?ID=" . $row["ID"] . "><img src=images/edit.png width=100%></a></td>" .
		 "<td width = 15%><a href=deleteitem.php?ID=" . $row["ID"] . "><img src=images/delete.png width=100%></a></td>" .
		 "<td width = 10%></td>" .
	     "</tr>" .
		 "</table>" .
		 "</p>";
	}


?>
</SPAN>
		</article>
		
        <footer>
		<h1>&#169; Joe Burnside 2016</h1>
    	</footer>
		
	  </div>	
  </body>
</html>
