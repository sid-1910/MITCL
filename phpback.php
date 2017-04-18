<?php  
error_reporting(0);
  $id=$_POST["id"];
   
    $server="localhost";
    $unm="root";
    $pwd="";
    $db="mitcl";
    
    $con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MITCL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  
   <style>
      .text-center{
        text-align:center;
      }
    </style>
    <section id="intro" class="text-intro no-padding-bottom">
      <div class="container text-center">
        <div class="col-sm-12">
        </div>
      </div>
    </section>
    <img src="download.png" style="width:130px;top:10px;left:-450px; position:relative;">  
    <img src="MITCL.png" style="width:90px; position:relative;right:-550px;">  
    <img src="ozw.png" style="width:4%; position: relative; top:640px; right:-320px;">
    <section id="about" class="section">

      <div class="container">
        <div class="row">

          <div class="col-sm-5 text-center">
            <h2 class="heading"></h2>
          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 text-left"> 
              <!--photo -->
<?php
error_reporting(0);
      $qrysel="SELECT name,year,role,FITNESS,FIELDING,BATTING,Bowling,BASE,imagePath FROM player WHERE playerId = '$id'"; 
      $result = mysqli_query($con, $qrysel);
      if (mysqli_num_rows($result) == 0) {
      echo "sorry";}
      else{
      while($row = mysqli_fetch_assoc($result)) {
          $i = $row['imagePath'];        
?>

                <p><img src="<?php echo $i; ?>" alt="This is me" class="image img-circle img-responsive" style="width:30%; position:fixed;top:190px;" /></p>
              </div>
              <div class="col-sm-6">
                <p><h3>  
<?php
          echo $row['name']."<br/>" ;
          $pName = $row['name']; 

?>

        </h3> <strong>

<?php 

        echo $row['role']."<br/>" ;
          $pRole = $row['role']; 
?>
       </strong><br> 
        <h3><p>Year :  
<?php 
        echo  " ".$row['year']."<br/>";
        $pYear = $row['year'];
?>
       </h3></p>
       <p><h3> Base Price :
<?php
        echo  " ".$row['BASE']."K";     
      #more fields for skill sets 
        $fit = $row['FITNESS'];
        $fie = $row['FIELDING'];
        $bat = $row['BATTING'];
        $bow = $row['Bowling'];
                }
            } 

      #inserting into link pId, pName, pYear
      if ($id!=0) {
     $query1="INSERT INTO link (playerId, playerName, year) VALUES ('$id','$pName','$pYear')";
if(mysqli_query($con,$query1))
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
        </h3></p>
                
                <div class="skill-item">
                  <div class="progress-title">Batting</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
                    style="width:<?php echo $bat*(3)."%"; ?>"
                     class="progress-bar progress-bar-skill1"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">Bowling</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bat*(3)."%"; ?>" class="progress-bar progress-bar-skill2"><span class="sr-only"></span></div>
                  </div>
                </div>
                  <div class="skill-item">
                  <div class="progress-title">FITNESS</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bat*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">Fielding</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bat*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div>
                  </div>
                </div>    
              </div>
            </div>
          </div>
         </div>
    </section>
   
    <section id="contact">
      <div class="container clearfix">
          <div class="col-md-12">
            <h2 class="heading"></h2>
            <div class="row">
              <div class="col-md-6">
                  <form method="POST">
                  <div id="playerD" style="">
                  ID:<input type="number" style="height:25px;width:50px;" name="id">
                  <button type="submit" style="height:25px;width:50px;">Load</button>
                  </div>
                  </form> 
                    <div id="playerD" style="">
                        Price:<input type="number" style="height:25px;width:50px;" name="price">
                            TeamId:<input type="number" style="height:25px;width:50px;" name="tId">
                                <button style="height:25px;width:50px;">insert</button>
                              </div>            
                    </form>
              </div>
              </div>
              </div>
              </div>
                    <div class="col-md-6">
              
              </div>
            </div>
          </div>
      </div>
    </section>
<!--link2 -> final -->
<?php
error_reporting(0);

      
  $qrysel2="SELECT playerId,playerName,year FROM link ORDER BY ID DESC LIMIT 1";
  
$result = mysqli_query($con, $qrysel2);
if (mysqli_num_rows($result) == 0) {
  echo "";}
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
  echo"";
    echo '';

}
}
  
  $qrysel13="SELECT teamId,teamName FROM link2 ORDER BY ID DESC LIMIT 1";
  $result1 = mysqli_query($con, $qrysel13);
if (mysqli_num_rows($result1) == 0) {
  echo "";}
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

<!--onClick databse page -->
<form action="teamDisplay.php">
<button style="position:relative;bottom:30px;left:-290px;">info</button>
</form>


    <!-- map-->
    <div id="map></div>
    <footer class="footer">
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <b><p style="position:relative;top:0px;right:-1000px;">&copy;OrionZen Networks 2016</p></b>
            </div>
            <div class="col-md-6">
              <p class="credit pull-right"></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/ekko-lightbox.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
