
<?php
//$id=$_POST["id"];

$server="localhost";
$unm="root";
$pwd="";
$db="mitcl";
if(isset($_REQUEST["price"])&&isset($_REQUEST["tId"])&&isset($_REQUEST["id"]))
{
$price=$_REQUEST["price"];
$tId=$_REQUEST["tId"];
$id = $_REQUEST["id"];
}

$con=new mysqli($server,$unm,$pwd,$db);
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
		
	$query99="INSERT INTO final (pId, pPrice, pTeamId) VALUES (".$id."',".$price."', '".$tId."')";
	if(mysqli_query($con,$query99))
	{
		die(mysql_errno());
	}
	else
	{
		echo "enter not inserted!" ;
	}

?>
