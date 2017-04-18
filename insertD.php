<?php
	


    $server="localhost";
    $unm="root";
    $pwd="";
    $db="mitcl";
    
    $con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
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
      echo "";
      break;
   }


#link2 team id and name 
if ($tid!=0) {
     $query12="INSERT INTO link2 (teamId,teamName) VALUES ('$tid','$tname')";
if(mysqli_query($con,$query12))
{
  echo"";
  header('Location:'); 
}
else
{
  echo"error";
    echo '';

}
}

	

?>