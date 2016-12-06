<?php
include "connection.php";
$id = $_GET["ID"];
$sqlremove = "DELETE FROM tbl_menu WHERE ID = '$id'";
if(mysqli_query($con, $sqlremove)){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{
	echo "Error: " .mysqli_error($con);
}
?>