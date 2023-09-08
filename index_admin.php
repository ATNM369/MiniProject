<?php include_once 'db.php' ?>

<?php

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
 
<style>
      body {
         background-image:url("img/aaron-burden-0fA3gVTGwjQ-unsplash.jpg");
      }
   </style>


<body>


    <form action="valid.php" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
           <div class="text-center">
           <?php
           // SQL query to count the number of rows with distinct usernames
            $sql = "SELECT COUNT(DISTINCT userName) AS user_count FROM admin";
            $result = $conn->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                $userCount = $row['user_count'];

                // Close the result set
                $result->close();

                // Close the database connection
                $conn->close();

                // Conditionally display the signup button based on the number of distinct usernames
                if ($userCount < 3) {
                    // Hide the signup button using CSS
                    echo '<a href="admin_signup.php" class="btn button">Sign up</a>';
                }
            }               
           ?>
            
           </div>         
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
 
</html>

<?php
 
