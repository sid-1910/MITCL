<?php  
error_reporting(0);
$server="localhost";
$unm="root";
$pwd="";
$db="mitcl";

$con=new mysqli($server,$unm,$pwd,$db);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
  $id=0;

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
      <img src="download.png" style="width:150px;top:0px;left:50px; position:relative;">  
      <img src="MITCL.png" style="width:120px; position:relative;right:-1000px;">  
      <img src="ozw.png" style="width:7%; position: relative; top:600px; left:-200px;">
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
                  $qrysel="SELECT playerId,playerName,year,role,FITNESS,FIELDING,BATTING,Bowling,BASE,imagePath FROM link ORDER BY ID DESC LIMIT 1"; 
                  $result = mysqli_query($con, $qrysel);
                  if (mysqli_num_rows($result) == 0) {
                  }
                  else{
                    while($row = mysqli_fetch_assoc($result)) {
                      $i = $row['imagePath'];
                      $id = $row['playerId'];
                      ?>

                      <script src="jquery.min.js"></script>
                      <script>

                      function show_img(id)
                     {  
    
        if(id=='bandwidth')
        {
           $("#upload").show();
           $("#bandwidth").show();
        }
       else if(id=='upload')
       {  
         $("#upload").show();
       $("#bandwidth").hide();
        }
    
    return false;
     } 
    </script>
<p>
      <img src="sold/sold.jpg" style="position:fixed;left:250px;top:390px;z-index:1"  id="bandwidth"/>
      <img src="<?php echo $i; ?>" alt="This is me" class="image img-circle img-responsive" style="width:450px;height:450px; position:relative;top:-5px;" " id="upload"/>
    </p>
                    </div>
                    <div class="col-sm-6">
                      <p><h3>  
                        <?php
                        echo $row['playerName']." (".$row['role'].")<br/>";
                        $pName = $row['playerName']; 

                        ?>

                      </h3> <strong>

                      <?php 
                      $pRole = $row['role']; 
                      ?>
                    </strong> 
                    <h3><p>Year :  
                      <?php 
                      echo  " ".$row['year']."<br/>";
                      $pYear = $row['year'];
                      ?>
                    </h3></p>
                    <p><h3> Base Price :
                      <?php
                      setlocale(LC_MONETARY,"en_US");
                      echo  " ".$row['BASE']." K";     
      #more fields for skill sets 
                      $fit = $row['FITNESS'];
                      $fie = $row['FIELDING'];
                      $bat = $row['BATTING'];
                      $bow = $row['Bowling'];



                      if ($bat==0) {
                        $bat = 0.2;
                      }
                      elseif ($bow==0) {
                        $bow = 0.2;
                      }
                    }
                  }
                  $id1 = $id;

      #inserting into link pId, pName, pYear
                  ?>
                </h3></p>
                
                <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">Batting</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="60" aria-valuemin="10" aria-valuemax="100" 
                    style="width:<?php echo $bat*(3)."%"; ?>"
                    class="progress-bar progress-bar-skill1"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">Bowling</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="70" aria-valuemin="10" aria-valuemax="100" style="width:<?php echo $bow*(3)."%"; ?>" class="progress-bar progress-bar-skill2"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">FITNESS</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="10" aria-valuemax="100" style="width:<?php echo $fit*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">Fielding</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="10" aria-valuemax="100" style="width:<?php echo $fie*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div>
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

                        <!--onClick database page -->
                
                    <a href="teamDisplay.php" style="position:relative;color:red;bottom:-30px;right:-1160px;">display</a>
                


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

                  $(ajax).function()
                  {

                  }
                </script>
                <div>
                <b><p style="position:relative;top:-30px;left:60px;">&copy;OrionZen Works 2016</p></b>

                </div>

