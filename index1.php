<?php
    session_start();

    if(!isset($_SESSION['userName'])){      
        header ('Location:index.php');
        exit;
    }
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
                    <li><a href="logout.php">Log Out</a></li>
                </ul>

</div>
        </nav>

    <div class="text-box">
        <h1>GEO-TECH HUB</h1>
        <p>Smart Land-Management and Governance</p>
        <a href="https://www.sab.ac.lk/" class="hero-btn">Visit to sabaragamuwa University of Sri Lanka</a>

    </div>


    </section>

    <section class="services">

        <div class="row">
            <div class="services-col">
                <h3>Services</h3>
                <p>Land Surveying, Land Management Consultancy, Land Administration, Land Governance, 
                    Urban Planning, 3D Modelling, UAV Surveying, LiDAR, Land Management Platform Development, and 
                    Research and Analysis</p>
                    <center><a href="services_apply.php"><button type="submit" class="hero-btn1 red-btn1">Apply</button></a> </center>
            </div>

                <div class="services-col">
                    <h3>Projects</h3>
                    <p>The Geo-Tech HUB of Sabaragamuwa University of Sri Lanka(SUSL) established under the 
                        guidance of the University Grants Commission(UGC), Sri Lanka at the premises of the 
                        Faculty of Geomatics, SUSL.</p>
                        <center><a href="projects_apply.php"><button type="submit" class="hero-btn1 red-btn1">Apply</button></a></center>
                </div>
        
                    <div class="services-col">
                        <h3>Publishes</h3>
                        <p>The Geo-Tech HUB of Sabaragamuwa University of Sri Lanka(SUSL) established under the 
                            guidance of the University Grants Commission(UGC), Sri Lanka at the premises of the 
                            Faculty of Geomatics, SUSL.</p>
                            <center><a href="publishes_apply.php"><button type="submit" class="hero-btn1 red-btn1">Apply</button></a></center>
                    </div>
        </div>

    </section>
 
<!---------------------------------------our instruments------------------------------->
<section class="instruments">
    <h1>Our Instruments</h1>
    <p>The Geo-Tech HUB of Sabaragamuwa University of Sri Lanka(SUSL) established under the 
        guidance of the University Grants Co
    </p>
    
    <div class="row">
        <div class="instruments-col">
            <img src="img/4 copy.jpg">
            <h3>DJI Phantom 4</h3>
        </div>

        <div class="instruments-col">
            <img src="img/4 rtk copy.jpg">
            <h3>DJI Phantom 4 RTK</h3>
        </div>

        <div class="instruments-col">
            <img src="img/esy copy.jpg">
            <h3>E-Survey GNSS RTK</h3>
        </div>
    </div>

</section>

<!---------------------------------------our softwares------------------------------->
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
        </div>


   
<?php
     include_once 'footer.php';
?>