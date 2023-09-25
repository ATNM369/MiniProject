<?php
    session_start();
    include_once "db.php";
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!--Jquery-->
	    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <!--Ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

<body>
    <section class="sub-headerB">
        <nav>
            <a href="index.php"><img src="img/GeoTechHUB2.png"></a>
            <div class="nav-links">
               <ul style="margin-bottom:0;">
                  <li><a href="index.php">HOME</a></li>
                  <li>
                     <a href="#">ABOUT US <i class="fa fa-sort-desc"></i></a>
                     <div class="sub-nav-links">
                        <ul style="margin:auto; padding:0;">
                           <li><a href="overview.php">OVERVIEW</a></li>
                           <li><a href="about_team.php">OUR TEAM</a></li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="#">PROJECTS <i class="fa fa-sort-desc"></i></a>
                     <div class="sub-nav-links">
                        <ul style="margin:auto; padding:0;">
                           <li><a href="ongoing_projects.php">ONGOING</a></li>
                           <li><a href="completed_projects.php">COMPLETED</a></li>
                        </ul>
                     </div>
                  </li>
                  <li><a href="publications.php">PUBLICATIONS</a></li>
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
        <h1>COMPLETED PROJECTS</h1>
    </section>


<!----------------------------------------Ongoing Projects---------------------------------------------------->
    <section class="ongoing">

    <?php 
            try{
            $sql = "SELECT * FROM project WHERE projectStatus='completed'";

            if (mysqli_query($conn, $sql))
            {
                $result = mysqli_query($conn, $sql);
                $resultRows = mysqli_num_rows($result);

                if ($resultRows > 0)
                {
                    while ($row = mysqli_fetch_assoc($result))
                    { ?>
                        
                        <div class="card mt-2 mb-2">
                        <h5 class="card-header"><?php echo $row['projectTitle'] ?></h5>
                            <div class="card-body">
                                <p class="card-text"> <?php echo $row['projectDesc'] ?></p>
                                <?php

                                if (isset($_SESSION["userName"]) && $_SESSION["role"] == "admin") {
                                    // If $_SESSION["userName"] is set, display the link
                                    echo '<a type="button" class="btn btn-info" style="padding-top: 8px; padding-bottom: 8px;" href="?showModal=true&projectId=' . $row['projectId'] . '">view</a>';
                                }
                                ?>

                            </div>
                        </div>

                    <?php
                    }
            }
            else
            {
        ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h5><?php echo "Projects are not found"; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            }
        }
    }
            catch(mysqli_sql_exception $e)
            {
                // Handle the exception
                header("Location:viewAttendance.php?showModal=true&status=unsuccess&message=Database error");
                exit();
            } 
        ?>
        

<!----------------------------------------Footer---------------------------------------------------->

<!--Modal for view publications-->
<div class="modal fade" id="editProject" tabindex="-1" aria-labelledby="editProjectLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Completed Projects</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-responsive-sm table-hover">
            <?php 
                try
                    {
                        if(isset($_GET['projectId'])){
                            $projectId = $_GET['projectId'];
                            // Now you can use $projectId in your SQL query or for any other purpose.
                            $sql = "SELECT * FROM project WHERE projectId = $projectId";

                            if (mysqli_query($conn, $sql))
                        {
                            $result = mysqli_query($conn, $sql);
                            $resultRows = mysqli_num_rows($result);

                            if ($resultRows > 0)

                            {
                                $row = $result->fetch_assoc()

                                ?>
                                    <form action="updateProjectCompleted.php?projectId=<?php echo $row['projectId'] ?>" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Project Title</label>
                                            <input type="text" name="projectTitle" value="<?php echo $row['projectTitle']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                            <textarea class="form-control" name="projectDesc" id="exampleFormControlTextarea1" rows="10"><?php echo $row['projectDesc']; ?></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="projectUpdate" class="btn btn-secondary">Update</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                <?php
                            }

                        }
                        }

                        
                    }
                catch(mysqli_sql_exception $e)
                    {
                        // Handle the exception
                        header("Location:index.php?showModal=true&status=unsuccess&message=Database error");
                        exit();
                    } ?>
            </table>
        </div>
        
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container" style="display: block; flex-direction: row; justify-content: space-between;">
        <div class="footer-row" style="display:flex; flex-direction:row; justify-content:space-between;">
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
                <h4>CONTACT US</h4>
                <ul>
                    <li><a href="contact.php">Contact US</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function(){
    // check if the "showModal" parameter is present in the URL
    const urlParams = new URLSearchParams(window.location.search);
    const showModal = urlParams.get('showModal');
    if (showModal === 'true') {
        // show the modal popup
        $('#editProject').modal('show');

        //jQuery code to clear URL parameters on modal close with delay
        window.history.replaceState({}, document.title, window.location.pathname);
    }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>