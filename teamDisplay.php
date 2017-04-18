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
            <h1> <span class="text-primary">MITCL</span></h1>
    
	<?php
		$server="localhost";
		$unm="root";
		$pwd="";
		$db="mitcl";

		$con=new mysqli($server,$unm,$pwd,$db);
      if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
	$qrysel="SELECT pId, pName, pYear, pPrice, pTeamId, pTeamName FROM final";
	
$result = mysqli_query($con, $qrysel);
if (mysqli_num_rows($result) == 0) {
	echo "sorry";}
	else{
	while($row = mysqli_fetch_assoc($result)) {
        echo "player ID : ".$row['pId']."</br>"."name : ".$row['pName']."</br>"."year : ".$row['pYear']."</br>"."team ID : ".$row['pTeamId']."</br>"."Team Name : ".$row['pTeamName']."</br>"."price : ".$row['pPrice']."</br>";
        
    }
}


mysqli_close($con);
?>  
</div><b>
</pre>
        </div>
      </div>
    </section>




<section id="contact">
      <div class="container clearfix">
          <div class="col-md-12">
            <h2 class="heading"></h2>
            <div class="row">
              <div class="col-md-6">
              <!-- php : displaying from final -->

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



     <div id="map></div>
    <footer class="footer">
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2016 Orionzen Networks</p>
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


