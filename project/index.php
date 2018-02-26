<?php
   session_start();
   $_SESSION['logged_in']=false;
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            <link rel="stylesheet" href="materialize/css/materialize.min.css">
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="style/index.css">
          <meta charset="utf-8">
    <title>Bidding Corporation</title>
  </head>
  <body class="green accent-1">
    <!--Navigation Header-->
    <nav>
      <div class="nav-wrapper black">
        <a href="index.php" class="brand-logo logo">GEU Bid</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="login.php"><i class="material-icons left">account_circle</i>Log In</a></li>
            <li><a href="register.php"><i class="material-icons left">add_circle</i>Register</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav light-blue darken-4">
            <li><a href="login.php"><i class="material-icons left">account_circle</i>Log In</a></li>
            <li><a href="register.php"><i class="material-icons left">add_circle</i>Register</a></li>
          </ul>
      </div>
    </nav>
    <!--Floating buttons-->
    <div class="fixed-action-btn">
      <a href="#" class="btn-floating red large tooltipped"><i class="large material-icons">add </i></a>
        <ul>
          <li><a href="#" class="btn-floating large blue tooltipped" data-position="top" data-tooltip="Contact on Faceboook"><i class="fa fa-facebook-official" style="font-size:24px"></i></a></li>
          <li><a href="https://plus.google.com/u/0/110378863211673805314" class="btn-floating large red tooltipped" data-position="top" data-tooltip="Contact on google plus"><i class="fa fa-google-plus" style="font-size:24px"></i></a></li>
          <li><a href="http://www.github.com/prithvisbisht" class="btn-floating large black tooltipped" data-position="top" data-tooltip="Contact on github"><i class="fa fa-github-square" style="font-size:24px"></i></a></li>
        </ul>
    </div>

    <!--footer-->
          <div class="footer">© 2017 Copyright Text</div>


    <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     <script>
       $(".button-collapse").sideNav();
     </script>
  </body>
</html>
<?php 
        require 'db.php';
        $sql = "SELECT * FROM item";
        $result = mysqli_query($mysqli,$sql);
          if(mysqli_num_rows($result) > 0) 
          {
            echo'<div class="row">';
            while($row=mysqli_fetch_assoc($result)) 
              { $row['name']=strtoupper($row['name']);
               echo '
                      <div class="col m4 col offset-m1 col s6 col offset-s3">
                        <h5>'.$row['name'].'</h5>
                        <img class="boximage polaroid container" src="images/'.$row['image'].'">
                    </div>';
               /*echo'<div class="col s3 col offset-s1">
                      <div class="teal">
                        <div class="card-image">
                          <img class="boximage polaroid container" src="images/'.$row['image'].'" alt=""><br>
                          <strong><span class="card-title">'.$row['name'].'</span></strong>
                        </div>
                      </div>
                    </div>';*/
              }
            echo'</div>';
            
          }
 ?>