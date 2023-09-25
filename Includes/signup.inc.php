<?php
require_once '../db.php';
require_once 'function.inc.php';

if (isset($_POST["signup"])) {
    try {
        $fname = $_POST["FirstName"];
        $lname = $_POST["lastName"];
        $username = $_POST["UserName"];
        $bdate = $_POST["birthdate"];
        $email = $_POST["email"];
        $pnumber = $_POST["phone"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["passwordrepeat"];

        $invalidUid = invalidUid($username);

        if ($invalidUid !== false) {
            header("Location: ../signup.php?error=invaliduid");
            exit;
        }

        if ($pwd !== $pwdRepeat) {
            header("Location: ../signup.php?error=passwordsdontmatch");
            exit;
        }

        // Hash the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO myguests (`FirstName`, `LastName`, `UserName`, `BirthDate`, `Email`, `MobileNum`, `Password`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $fname, $lname, $username, $bdate, $email, $pnumber, $hashedPwd);

        if ($stmt->execute()) {
            // Successful signup, display a success message
            $successMessage = "User added successfully. Click <a href='../login.php'>here</a> to login.";
        } else {
            throw new Exception("Error executing SQL statement: " . $stmt->error);
        }

        $stmt->close();
    } catch (Exception $e) {
        // Handle the exception (e.g., display an error message)
        $errorMessage = "Error: " . $e->getMessage();
    } finally {
        $conn->close();
    }
} else {
    header('Location: ../index1.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Result</title>
</head>
<body>
    <?php
    if (isset($successMessage)) {
        echo "<div style='color: green; font-weight: bold; text-align: center;'>$successMessage</div>";
    } elseif (isset($errorMessage)) {
        echo "<div style='color: red; font-weight: bold; text-align: center;'>$errorMessage</div>";
    }
    ?>
</body>
</html>

