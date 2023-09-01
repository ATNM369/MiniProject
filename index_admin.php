<?php include_once 'db.php' ?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        </div>
    </form>
</body>
 
</html>

<?php
 
