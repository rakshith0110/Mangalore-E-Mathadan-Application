<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>MANGALORE E-MATDAAN 2024</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.php"><span class="subFont"><strong>Candidates List</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Admin's Password</strong></span></a></li>
            <li><a href="add_voter.html"><span class="subFont"><strong>Add voter</strong></span></a></li>
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2><br>
            <p class="normalFont">Vote Counts</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $BJP=0;
              $INC=0;
              $UPP=0;
              $BSP=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //BJP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BJP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BJP++;
                  }

                  $bjp_value= $BJP*10;

                  echo "<strong>Captain Brijesh Chowta</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$bjp_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bjp_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                  echo "<span class='normalFont'>BJP Total Votes: $BJP</span><br><br>";
                }

                // CONGRESS
                $sql ="SELECT * FROM tbl_users WHERE voted_for='INC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $INC++;
                  }


                  $inc_value= $INC*10;

                  echo "<strong>Padmaraj R Poojary</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$inc_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                  echo "<span class='normalFont'>INC Total Votes: $INC</span><br><br>";
                }

                // UPP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='UPP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $UPP++;
                  }


                  $aap_value= $UPP*10;

                  echo "<strong>Prajaakeeya Manohara</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$aap_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                  echo "<span class='normalFont'>UPP Total Votes: $UPP</span><br><br>";
                }

                // BSP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BSP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BSP++;
                  }


                  $tmc_value= $BSP*10;

                  echo "<strong>Kanthappa Alangar</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$tmc_value."%'>
                      <span class='sr-only'>BSP</span>
                    </div>
                  </div>
                  ";
                  echo "<span class='normalFont'>TMC Total Votes: $BSP</span><br><br>";
                }

               echo "<hr>";

                

                // Total
              /*  $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }  */


                  $total= $BJP+$INC+$UPP+$BSP;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                  
                

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
