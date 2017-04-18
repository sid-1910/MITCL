<!DOCTYPE HTML>

<html>
	<head>
		<title>MITCL Auction</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
	
	<form method="POST">
<div id="playerD" style="">
	ID:<input type="number" name="id"><br>
	<button type="submit">Load</button>
</div>
	</form>


		<!-- Wrapper
			<div id="wrapper">
				
					<div id="main">
						
						<!-- Me 
							<article id="me" class="panel">
								<header>
<!--Player name PHP -->									<h1>
<?php	
#error_reporting(0);
 	$id=$_POST["id"];
	 
		$server="localhost";
		$unm="root";
		$pwd="";
		$db="mitcl";

		$con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 



	$qrysel="SELECT name,year,disp,basePrice FROM players WHERE playerId = '$id'";
	
$result = mysqli_query($con, $qrysel);
if (mysqli_num_rows($result) == 0) {
	echo "sorry";}
	else{
	while($row = mysqli_fetch_assoc($result)) {
        echo $row['name']."<br/>" ?> </h1> <br> <p> <?php 
        echo  "year: ".$row['year']."<br/>".$row['disp']."<br><br>".$row['basePrice'] ;     
     
     $pName = $row['name'];
     $pYear = $row['year'];
    }
} 

#link database
if ($id!=0) {
		 $query1="INSERT INTO link (playerId, playerName, year) VALUES ('$id','$pName','$pYear')";
if(mysqli_query($con,$query1))
{
	echo"Succesfully";
	header('Location:'); 
}
else
{
	echo"Some thing went wrong<br/>";
		echo 'try again';

}
}

?>														
								
									
								</header>
								<!--<a class="jumplink pic">
								</a>
							</article>
                            <article id="logo" >
                            	<img src="images/MITCL.png" style="position: fixed; padding-left:900px;  width:1100px;height:800px; " />  -->
                            </article>
						
					</div>
		</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<p>Designed by OrionZen Works</p>
						</ul>
					</div>
		
			</div>


<div id="playerI" style="padding-top:250px;">
<form method="POST" action="">
	Price:<input type="number" name="price"><br>
	TeamId:<input type="number" name="tId"><br>
	<button>insert</button>
</form>
</div>

	
									<?php
	/*								while($row = mysql_fetch_array($result)) {
										?>
									<img style="height=1100px; width= 1200px;" src="imageViewTest.php?image_id=<?php echo $id; ?>" />
									<?php		
										}
	*/								?>



<!-- inserting into final database -->
<?php

			
	$qrysel2="SELECT playerId,playerName,year FROM link ORDER BY ID DESC LIMIT 1";
	
$result = mysqli_query($con, $qrysel2);
if (mysqli_num_rows($result) == 0) {
	echo "sorry";}
	else{
	while($row = mysqli_fetch_assoc($result)) {
     $pName1 = $row['playerName'];
     $pYear1 = $row['year'];
     $pID1 = $row['playerId'];
    }
} 



	 $price=$_POST["price"];
	 $tid=$_POST["tId"];
	 
	 switch ($tid) {
	 		case 1:
	 		$tname = 'Hurricanes';
	 		break;
	 		case 2:
	 		$tname = 'Ninjas';
	 		break;
	 		case 3:
	 		$tname = 'Pirates';
	 		break;
	 		case 4:
	 		$tname = 'Samurai';
	 		break;
	 		case 5:
	 		$tname = 'Titans';
	 		break;
	 		case 6:
	 		$tname = 'Wizards';
	 		break;

	 	default:
	 		echo "wrong team ID try again";
	 		break;
	 }


#link2 team id and name 
if ($tid!=0) {
		 $query12="INSERT INTO link2 (teamId,teamName) VALUES ('$tid','$tname')";
if(mysqli_query($con,$query12))
{
	echo"Succesfuly";
	header('Location:'); 
}
else
{
	echo"Some thing went wrong<br/>";
		echo 'try again';

}
}
	
	$qrysel13="SELECT teamId,teamName FROM link2 ORDER BY ID DESC LIMIT 1";
	$result1 = mysqli_query($con, $qrysel13);
if (mysqli_num_rows($result1) == 0) {
	echo "sorry";}
	else{
	while($row = mysqli_fetch_assoc($result1)) {
     
     $teid = $row['teamId'];
     $teamN = $row['teamName'];

     }
} 



	 if ($pID1!=0) {
	 	 
$query99="INSERT INTO final (pId, pName, pYear, pPrice, pTeamId, pTeamName) VALUES ('$pID1','$pName1','$pYear1','$price', '$teid','$teamN')";
if(mysqli_query($con,$query99))
{
	echo"";
	header('Location:'); 
}
else
{
	echo"";
		echo '';

}
}
?>

<form action="teamDisplay.php">
<button>info</button>
</form>
	</body>
</html>