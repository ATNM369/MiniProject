<!--<!DOCTYPE html>-->

<div class="form">
    <!--<center><h1>GEO TECH-HUB</h1></center>-->
    <form action="includes/login.inc.php" method="post">



<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1, p, input, button {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Container for centering the form */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

/* Login form styles */
.login-form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.login-form h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.login-form label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-form button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.login-form button[type="submit"]:hover {
    background-color: #0056b3;
}

.login-form .error {
    color: #ff0000;
    margin-top: 10px;
    text-align: center;
}

.password-input {
    position: relative;
}

#eye-icon {
    position: absolute;
    top: 35%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}


</style>

</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Welcome Back!</h1>
            
            <?php if (isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>

            <br><form method="POST" action="includes/login.inc.php">
                
                <label for="username">Username or Email:</label>
                <input type="text" name="username" required><br>
                
                <label for="password">Password:</label>
                <div class="password-input">
                    <input type="password" name="password" id="password" required>
                    <i class="fa fa-eye-slash" id="eye-icon" aria-hidden="true"></i>
                </div>

                
                <button name="login" type="submit">Login</button>
            </form></br>
			
			<p>Didn't sign up yet? here<a href="SignUp.php"> sign up !</a></p>
			
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById("password");
        const eyeIcon = document.getElementById("eye-icon");

        eyeIcon.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        });
    </script>

</body>
</html>

</form>
</div>
