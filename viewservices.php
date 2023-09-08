<?php
     include_once 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">


    <!--Jquery-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #993303; /* Change navigation bar color */
            color: #fff;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            overflow-y: auto;
        }
        .sidebar a {
            display: block;
            color: #fff;
            text-align: left;
            padding: 16px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .profile-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 20px auto;
            background-color: #555;
            background-image: url('img/admin.jpg'); /* Add user profile image here */
            background-size: cover;
            background-position: center;
        }

        /* Content Styles */
        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px; /* Adjust based on your sidebar width */
        }

        /* Section Styles */
        .section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .section h2 {
            margin-top: 0;
        }

        /* Creative Buttons */
        .creative-button {
            background-color: #993303; /* Change button color */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50px; /* Adjust for a more creative shape */
            cursor: pointer;
            margin-right: 10px; /* Spacing between buttons */
        }
        .creative-button:hover {
            background-color: #6e2005; /* Change hover color */
        }

        /* Table CSS */
        #attendance-table thead tr th {
            text-align: center;
        }
        #attendance-table tbody tr td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div class="sidebar">
            <div class="profile-photo"></div>
            <a href="admin.php">Home</a>
            <a href="about_team.php">About Us</a>
            <a href="ongoing_projects.php">Projects</a>
            <a href="#">Events</a>
            <a href="index.php">Log Out</a>
        </div>

        <div class="content">
            
        <div class="session-table">

    <table class="table table-light table-hover" id="attendance-table">
      <thead>
        <tr>
          <th scope="col">Full Name</th>
          <th scope="col">Organization</th>
          <th scope="col">Type Of Services</th>
          <th scope="col">Services Description</th>
          <th scope="col">TimeLine</th>
          <th scope="col">Budget</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php try
{
    $sql = "SELECT * FROM services";

    if (mysqli_query($conn, $sql))
    {
        $result = mysqli_query($conn, $sql);
        $resultRows = mysqli_num_rows($result);

        if ($resultRows > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            { ?>
                        <tr>
                            <td><?php echo $row["fullName"]; ?></td>
                            <td><?php echo $row["organization"]; ?></td>
                            <td><?php echo $row["typeOfServices"]; ?></td>
                            <td><?php echo $row["servicesDescription"]; ?></td>
                            <td><?php echo $row["timeLine"]; ?></td>
                            <td><?php echo $row["budget"]; ?></td>
                            <td>
                                <div style="display:flex; flex-direction:row; align-atems:center; justify-content:center; gap:5px;">
                                    <div>
                                        <a href="gen_pdf_services.php"  
                                            type="button" 
                                            class="btn btn-primary" 
                                            style="padding-top: 8px; padding-bottom: 8px;"
                                            > 
                                            Dowload
                                        </a> 
                                    </div>
                                    <div>
                                        <a  
                                            type="button" 
                                            class="btn btn-info" 
                                            style="padding-top: 8px; padding-bottom: 8px;"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#exampleModal"
                                            > 
                                            View
                                        </a> 
                                    </div>
                                    <div>
                                        <a href="deleteservices.php?serviceid=<?php echo $row['id'] ?>"  
                                            type="button" 
                                            class="btn btn-danger" 
                                            style="padding-top: 8px; padding-bottom: 8px;"
                                            > 
                                            Delete
                                        </a> 
                                    </div>
                                </div>   
                            </td>
                        </tr>

                        <?php
            }
        }
        else
        {
?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h5><?php echo "Records are not found"; ?></h5>
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
} ?>
      </tbody>
    </table>
</div>
        </div>
    </div>

    <!--Modal for view details-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Services Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-responsive-sm table-hover">
                <?php 
                try
                    {
                        $sql = "SELECT * FROM services";

                        if (mysqli_query($conn, $sql))
                        {
                            $result = mysqli_query($conn, $sql);
                            $resultRows = mysqli_num_rows($result);

                            if ($resultRows > 0)
                            {
                                while ($row = mysqli_fetch_assoc($result))
                                { ?>
                                <tr>
                                    <td><strong>Full Name</strong></td>
                                    <td>
                                        <?php
                                            echo $row["fullName"];;
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>Organization</strong></td>
                                    <td>
                                        <?php
                                            echo $row["organization"]; 
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>Address</strong></td>
                                    <td>
                                        <?php
                                            echo $row["address"]; 
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>
                                        <?php
                                            echo $row["email"]; 
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>Mobile Number</strong></td>
                                    <td>
                                        <?php
                                            echo $row["phoneNumber"]; 
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>typeOfServices</strong></td>
                                    <td>
                                        <?php
                                            echo $row["typeOfServices"];
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>servicesDescription</strong></td>
                                    <td>
                                        <?php
                                            echo $row["servicesDescription"];
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>timeLine</strong></td>
                                    <td>
                                        <?php
                                            echo $row["timeLine"];
                                        ?>	
                                    </td>						
                                </tr>
                                <tr>
                                    <td><strong>Budget</strong></td>
                                    <td>
                                        <?php
                                            echo $row['budget'];                               
                                        ?>	
                                    </td>						
                                </tr>     

                                    <?php
                                }
                            }
                            else
                            {
                    ?>

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h5><?php echo "Service applications are not found"; ?></h5>
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
                    } ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
            </div>
        </div>
    </div>

    <!-- Scripts for DataTables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function () {
    $("#attendance-table").DataTable();
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
