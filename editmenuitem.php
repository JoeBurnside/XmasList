<?PHP
include "connection.php";
session_start();

$id = $_GET["ID"];

if(isset($_POST["name"])){
	$name = $_POST["name"];
	echo $name;
}

if(isset($_POST["description"])){
	$description = $_POST["description"];
}

if(isset($_FILES['image']))
{
echo "imageset";
$content = file_get_contents($_FILES['image']['tmp_name']);
$content = addslashes($content);
$sql = "UPDATE tbl_menu SET Name = '$name', Description = '$description' , image = '$content' WHERE ID = '$id'";
	 }
	 else{
$sql = "UPDATE tbl_menu SET Name = '$name', Description = '$description' WHERE ID = '$id'";
}
if(mysqli_query($con, $sql)){
		header("Location: editmenu.php");
}
?>