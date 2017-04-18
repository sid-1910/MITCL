<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$server="localhost";
		$unm="root";
		$pwd="";
		$db="phppot_examples";

		$con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
	$qrysel="SELECT imagePath FROM output_images WHERE imageId = '8'";
	
$result = mysqli_query($con, $qrysel);
if (mysqli_num_rows($result) == 0) {
	echo "sorry";}
	else{
	while($row = mysqli_fetch_assoc($result)) {
        
     $i = $row['imagePath'];
     
     }
     }
     ?>

		<img src="<?php echo $i; ?>" /><br/>
		<img src="images/MITCL.png" /><br/>
	

</body>
</html>