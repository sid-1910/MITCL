<?php
//error_reporting(0);
$id = $_POST["id"];
      $qrysel="SELECT name,year,role,FITNESS,FIELDING,BATTING,Bowling,BASE,imagePath FROM player WHERE playerId = '$id'"; 
      $result = mysqli_query($con, $qrysel);
      if (mysqli_num_rows($result) == 0) {
      echo "sorry";}
      else{
      while($row = mysqli_fetch_assoc($result)) {
          $i = $row['imagePath'];        

                "<p><img src=" echo $i; "alt='This is me' class='image img-circle img-responsive' style='width:400px;height:400px; position:relative;top:-5px;'/></p>"
              "</div>"
              "<div class='col-sm-6'>"
                "<p><h3>  "
          echo $row['name']."<br/>" ;
          $pName = $row['name']; 



        "</h3> <strong>"

 

        echo $row['role']."<br/>" ;
          $pRole = $row['role']; 

       "</strong> 
        <h3><p>Year :"  

        echo  " ".$row['year']."<br/>";
        $pYear = $row['year'];

       "</h3></p>"
       "<p><h3> Base Price :"

        echo  " ".$row['BASE']."K";     
      #more fields for skill sets 
        $fit = $row['FITNESS'];
        $fie = $row['FIELDING'];
        $bat = $row['BATTING'];
        $bow = $row['Bowling'];
                }
            } 
        "</h3></p>"
                
                "<div class='skill-item'>"
                  "<div class='progress-title' style='font-size:18px;'>Batting</div>
                  <div class='progress'>
                    <div role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' 
                    style='width:"echo $bat*(3).'%';
                     "class='progress-bar progress-bar-skill1'><span class='sr-only'></span></div>
                  </div>
                </div>
                <div class='skill-item'>
                  <div class='progress-title' style='font-size:18px;'>Bowling</div>
                  <div class='progress'>
                    <div role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:"echo $bat*(3).'%' "class='progress-bar progress-bar-skill2'><span class='sr-only'></span></div>
                  </div>
                </div>"
                  
                  /*

                  <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">FITNESS</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bat*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title" style="font-size:18px;">Fielding</div>
                  <div class="progress">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $bat*(3)."%"; ?>" class="progress-bar progress-bar-skill3"><span class="sr-only"></span></div> */
                  "</div>
                </div>    
              </div>
            </div>
          </div>
         </div>
    </section>"

    ?>
