<?php
    session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Geo-Tech Hub</title>
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <section class="sub-headerB">
         <nav>
            <a href="index.php"><img src="img/GeoTechHUB2.png"></a>
            <div class="nav-links">
               <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li>
                     <a href="#">ABOUT US <i class="fa fa-sort-desc"></i></a>
                     <div class="sub-nav-links">
                        <ul>
                           <li><a href="overview.php">OVERVIEW</a></li>
                           <li><a href="about_team.php">OUR TEAM</a></li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="#">PROJECTS <i class="fa fa-sort-desc"></i></a>
                     <div class="sub-nav-links">
                        <ul>
                           <li><a href="ongoing_projects.php">ONGOING</a></li>
                           <li><a href="completed_projects.php">COMPLETED</a></li>
                        </ul>
                     </div>
                  </li>
                  <li><a href="event.php">EVENTS</a></li>
                  <li><a href="contact.php">CONTACT US</a></li>

                  <?php
                  if (isset($_SESSION["userName"])) {
                      // If $_SESSION["userName"] is set, display the link
                      echo '<li><a href="logout.php">LOGOUT</a></li>';
                  } else {
                      // If $_SESSION["userName"] is not set, display the alternative content
                      echo '<li>
                              <a href="login.php">Login <i class="fa fa-sort-desc"></i></a>
                              <div class="sub-nav-links">
                                  <ul>
                                      <li><a href="login.php">Login</a></li>
                                      <li><a href="index_admin.php">Admin</a></li>
                                  </ul>
                              </div>
                            </li>';
                  }
                  ?>

               </ul>
            </div>
         </nav>
         <h1>OUR TEAM</h1>
      </section>

