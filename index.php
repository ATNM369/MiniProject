<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Geo-Tech Hub</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="img/GeoTechHUB2.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US <i class="fa fa-sort-desc"></i></a>
                        <div class="sub-nav-links">
                            <ul>
                                <li><a href="overview.php">OVERVIEW</a></li>
                                <li><a href="about_team.php">OUR TEAM</a></li>
                            </ul>
                        </div>
                </li>
                <li><a href="#">PROJECTS <i class="fa fa-sort-desc"></i></a>
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

    <div class="text-box">
        <h1>GEO-TECH HUB</h1>
        <p>Smart Land-Management and Governance</p>
        <a href="https://www.sab.ac.lk/" class="hero-btn">Visit to sabaragamuwa University of Sri Lanka</a>

    </div>


    </section>

    <!------------------------------------------------------------our instruments----------------------------------------------------->


<section class="instruments">
    <h1>Our Instruments</h1>
    <p>These are the high quality surveying instruments that available in Geo-Tech Hub such as DJI Phantom 4 droner, DJI Phantom 4 RTK 
        droner and E-Survey GNSS RTK etc. The Phantom 4 drones are designed for aerial photography and videography, as well as recreational 
        and professional use. The DJI Phantom 4 RTK (Real-Time Kinematic) is a specialized version of the Phantom 4 drone designed 
        specifically for high-precision surveying, mapping, and geospatial applications. It incorporates RTK technology, which is a 
        satellite navigation technique used to enhance the precision of position data. "E-Survey GNSS RTK," stands for Electronic 
        Surveying Global Navigation Satellite System Real-Time Kinematic. GNSS RTK is a technology used in surveying and geospatial 
        applications to achieve high-precision positioning in real-time.These equipment are available to meet the needs of our clients. 
        We always make sure these instruments are ready to use and prepare in excellent condition.
    </p>
    
    <div class="row">
        <div class="instruments-col">
            <img src="img/4 copy.jpg">
            <h3>DJI Phantom 4</h3>
            <p>The DJI Phantom 4 is a series of consumer-grade drones developed by DJI, a well-known manufacturer of unmanned aerial 
                vehicles (UAVs) and camera systems. The Phantom 4 drones are designed for aerial photography and videography, as well as 
                recreational and professional use.
            </p>
        </div>

        <div class="instruments-col">
            <img src="img/4 rtk copy.jpg">
            <h3>DJI Phantom 4 RTK</h3>
            <p>The DJI Phantom 4 RTK (Real-Time Kinematic) is a specialized version of the Phantom 4 drone designed specifically for 
                high-precision surveying, mapping, and geospatial applications. It incorporates RTK technology, which is a satellite 
                navigation technique used to enhance the precision of position data.</p>
        </div>

        <div class="instruments-col">
            <img src="img/esy copy.jpg">
            <h3>E-Survey GNSS RTK</h3>
            <p>It seems like you're referring to "E-Survey GNSS RTK," which likely stands for Electronic Surveying Global Navigation 
                Satellite System Real-Time Kinematic. GNSS RTK is a technology used in surveying and geospatial applications to achieve 
                high-precision positioning in real-time. 
            </p>
        </div>
    </div>

</section>



<!------------------------------------------------apply for a service---------------------------------------------------------->

<section class="pu">
    <div class="row">
    <h1>APPLY FOR A SERVICE</h1>
    </div>

    <div class="row">
        <p>We invite you to apply to publish your research on our website. We are committed to providing a platform for researchers to 
            share their work with the world, and we believe that your research has the potential to make a significant impact.</p>
        </div>
    
    <div class="row">
        <form action="login.php">
            <button type="submit" class="hero-btn1 red-btn1">Apply</button>
        </form>
    </div>

</section>


<!------------------------------------------------------apply for publishes and researches----------------------------------------->

<section class="pu">
<div class="row">
<h1>APPLY FOR A RESEARCH PUBLICATION</h1>
</div>

<div class="row">
    <p>We invite you to apply to publish your research on our website. We are committed to providing a platform for researchers to 
        share their work with the world, and we believe that your research has the potential to make a significant impact.</p>
</div>

<div class="row">
    <form action="login.php">
        <button type="submit" class="hero-btn1 red-btn1">Apply</button>
    </form>
</div>
</section>

<section class="pr">
<div class="row">
<h1>APPLY FOR A PROJECT</h1>
</div>

<div class="row">
    <p>Are you looking for a challenging and rewarding project to work on?<br>
        We are currently looking for qualified individuals to join our team on an ongoing project. This is a great opportunity to gain 
        experience in a fast-paced and dynamic environment.
     </p>
</div>

<div class="row">
    <form action="login.php">
        <button type="submit" class="hero-btn1 red-btn1">Apply</button>
    </form>
</div>
</section>


<!-------------------------------------our softwares------------------------------
<section class="softwares">
    <h1>Softwares</h1>
    <p>The Geo-Tech HUB of Sabaragamuwa University of Sri Lanka(SUSL) established under the 
        guidance of the University Grants Co
    </p>
    
    <div class="row">
        <div class="softwares-col">
            <img src="img/New folder/pix4d.JPG">
            <h3>PIX4Dmapper </h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/contextcaptu.JPG">
            <h3>ContextCapture</h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/agisoft.JPG">
            <h3>Agisoft</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="softwares-col">
            <img src="img/New folder/lidar 360.JPG">
            <h3>LIDAR360</h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/dji terra.JPG">
            <h3>DJI-Terra </h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/3d surveys.JPG">
            <h3>3D survey</h3>
        </div>
    </div>

    <div class="row">
        <div class="softwares-col">
            <img src="img/New folder/civil 3d.JPG">
            <h3>AutoCAD-Civil 3D</h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/surfer.JPG">
            <h3>Surfer </h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/ILWIS.JPG">
            <h3>ILWIS </h3>
        </div>
    </div>

    <div class="row">
        <div class="softwares-col">
            <img src="img/New folder/qgis.JPG">
            <h3>QGIS </h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/arcgis.JPG">
            <h3>ArcGIS</h3>
        </div>

        <div class="softwares-col">
            <img src="img/New folder/cloud compare.JPG">
            <h3>Cloud Compare </h3>
        </div> -->


   
<?php
     include_once 'footer.php';
?>