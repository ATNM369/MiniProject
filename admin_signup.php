<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>

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

        /* Sign up form styles */
        .signup-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        .signup-form h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .signup-form label {
            font-weight: bold;
        }

        .signup-form input[type="text"],
        .signup-form input[type="date"],
        .signup-form input[type="email"],
        .signup-form input[type="tel"],
        .signup-form input[type="password"],
        .signup-form input[type="passwordrepeat"]{
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .signup-form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* The message box is shown when the user clicks on the password field */
        #message {
          display:none;
          color: green;
          position: relative;
          margin-bottom: 10px;
          margin-left: 10px;
        }

        #message p {
          padding: 5px 35px;
          font-size: 15px;
        }
        .valid:before {
          position: relative;
          left: -35px;
          content: "✔";
        }
        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
          color: red;
        }
        .invalid:before {
          position: relative;
          left: -35px;
          content: "✖";
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="signup-form">
            <h1>Admin Sign Up</h1>
            
            <?php
            // Display messages and form
            if (isset($success_message)) {
                echo '<p class="success">' . $success_message . '</p>';
            } elseif (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>

            <form method="POST" action="includes/admin_signup.inc.php">

                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                
                <div id="message">
                  <h3>Password must contain the following:</h3>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <input type="password" name="re-password"  placeholder="Confirm Password" required><br>

                <input type="submit" name="adminsignup" value="Register"><br>

                <br><p>Already have an account?<a href="index_admin.php"> Log in</a></p></br>           
            </form>
        </div>
    </div>

    <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
</script>

</body>
</html>



    
