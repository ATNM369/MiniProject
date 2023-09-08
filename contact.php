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
    <section class="sub-header">
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
                   
                    <li><a href="#">Login <i class="fa fa-sort-desc"></i></a>
                        <div class="sub-nav-links">
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="index_admin.php">Admin</a></li>
                </ul>
            </div>
        </nav>

        <h1>CONTACT US</h1>


    </section>

<!------------------------------------------contact content--------------------------------------------->

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.65560357074244!2d80.79009285951196!3d6
        .709937449303774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38b063acf7385%3A0xa948247d57ecaf5c!2sG
        eo%20Tech-Hub!5e0!3m2!1sen!2slk!4v1691433899180!5m2!1sen!2slk" width="600" height="450" style="border:0;" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="contact">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Geo-Tech Hub,</h5>
                           <p>Faculty of Geomatics,<br>
                            Sabaragamuwa University of Sri Lanka.</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+94715446569</h5>
                        <p>Monday to Friday, 7AM to 8PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>geoinfobox.freelance@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
            <form action="process_form.php" method="post">

            <input type="text" placeholder="Enter your name" name="name" id="name" required><br><br>

            <input type="email" placeholder="Enter email address" name="email" id="email" required><br><br>

            <textarea name="message"  placeholder="Message" id="message" rows="5" required></textarea><br><br>
            <button type="submit" value="Submit" class="hero-btn red-btn" >Send Message</button>

            </form>
            </div>
        </div>
    </section>




<!--------------------------------------------Footer---------------------------------------------------->
<footer class="footer">
    <div class="contain">
        <div class="row">
            <div class="footer-col">
                <h4>DISCOVER</h4>
                <ul>
                    <li><a href="https://www.sab.ac.lk/">SUSL</a></li>
                    <li><a href="https://www.sab.ac.lk/geo/">FOG</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>GET STARTED</h4>
                <ul>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Join community</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>FOLLOW US</h4>
                <ul>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>RESEARCH CENTER</h4>
                <ul>
                    <li><a href="#">Help center</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>CONTACT US</h4>
                <ul>
                    <li><a href="contact.php">Contact US</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



</body>
</html>