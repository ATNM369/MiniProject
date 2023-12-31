<?php 
    session_start();
    if(!isset($_SESSION['userName']) ){      
        header ('Location:index.php');
        exit;
    }elseif(isset($_SESSION['role'])){
        if($_SESSION["role"] !== "admin"){
            header ('Location:index.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="sidebar">
            <div class="profile-photo"></div>
            <a href="index12.php">Home</a>
            <a href="about_team.php">About Us</a>
            <a href="ongoing_projects.php">Projects</a>
            <a href="event.php">Events</a>
            <a href="viewMessage.php">Messages</a>
            <a href="logout.php">Log Out</a>
        </div>

        <div class="content">
            <h1>Welcome to the Admin Dashboard</h1>

            <!-- Content for your dashboard goes here -->
            <div class="section">
                <h2>Publishers</h2>
                <a href="viewpublications.php" class="btn creative-button">View</a>
                
                <!-- Add content for the Publishers section here -->
            </div>

            <div class="section">
                <h2>Services</h2>
                <a href="viewservices.php" class="btn creative-button">View</a>
                
                <!-- Add content for the Services section here -->
            </div>

            <div class="section">
                <h2>Projects</h2>
                <a href="viewprojects.php" class="btn creative-button">View</a>
                
                <!-- Add content for the Projects section here -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





