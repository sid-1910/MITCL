<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color:orange;}
#customers tr:nth-child(odd){background-color:black;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:center;
    background-color: black;
    color: white;
}
</style>
</head>
<body>
<img src="download.png" style="position:relative;left:10px; height:120px; width:110px;">
<img src="MITCL.png" style="position:relative;left:530px; height:130px; width:120px;">
<img src="ozw.png" style="position:relative;left:900px; height:130px; width:130px;">
<table id="customers">
    <?php

    $server="localhost";
    $unm="root";
    $pwd="";
    $db="mitcl";

    $con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>  
  <tr>
    <th style="font-size:18px;">HURRICANES</th>
    <th style="font-size:18px;">NINJAS</th>
    <th style="font-size:18px;">PIRATES</th>
    <th style="font-size:18px;">TITANS</th>
    <th style="font-size:18px;">SAMURAIS</th>
    <th style="font-size:18px;">WIZARDS</th>
  </tr>
  <tr>
    <td><img src="Hurricanes.png" style="width:175px; height:175px;"></td>
    <td><img src="ninjas.png" style="width:175px; height:175px;"></td>
    <td><img src="pirates.png" style="width:175px; height:175px;"></td>
    <td><img src="titans.png" style="width:175px; height:175px;"></td>
    <td><img src="samurai.png" style="width:175px; height:175px;"></td>
    <td><img src="wizards.png" style="width:175px; height:175px;"></td>
  </tr>
  <tr style="color:white">
  
    <td><?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Hurricanes'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName'];
}
}


    ?>
    </td>
    <td>
        
                  <?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Ninjas'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName']."<br><br>"."";
}
}

?>

    </td>

    <td>
        
                  <?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Pirates'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName']."<br><br>"."";
}
}

?>

    </td>

    <td>
        
                <?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Titans'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName']."<br><br>"."";
}
}

?>

    </td>
    <td>
      
                <?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Samurai'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName']."<br><br>"."";
}
}

?>

    </td>
    <td>
      
              <?php
        $qrysel1="SELECT pId, pName, pYear, pPrice, pTeamId FROM final WHERE pTeamName='Wizards'";
          $result = mysqli_query($con, $qrysel1);
if (mysqli_num_rows($result) == 0) {
  echo "sorry";}
  else{
  while($row = mysqli_fetch_assoc($result)) {
            echo $row['pName']."<br><br>"."";
}
}

?>
    </td>
  </tr>
<br>
  <a href="finalO.php" style="position:relative;color:red;bottom:-600px;right:-1160px;">main</a>
  <!--
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="color:white;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

  
-->
  </table>

</body>
</html>
