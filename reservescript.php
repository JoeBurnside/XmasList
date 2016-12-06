<?PHP
include "connection.php";

$id = $_POST["id"];

if($_POST["username"] != ""){
	$username = $_POST["username"];
}
else{
	$username = 'Anon';
}
$sql = "UPDATE tbl_menu SET reservedby = '$username' WHERE ID = '$id'";
if(mysqli_query($con, $sql)){
		header("Location: confirm.php");
}
?>