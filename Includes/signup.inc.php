<?php
require_once '../db.php';
require_once 'function.inc.php';

if (isset($_POST["signup"])) {
    $fname = $_POST["FirstName"];
    $lname = $_POST["lastName"];
    $username = $_POST["UserName"];
    $bdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $pnumber = $_POST["phone"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["passwordrepeat"]; 

    $invalidUid = invalidUid($username);
    $pwdMatch = pwdMatch($pwd , $pwdRepeat);

    if ($invalidUid !== false) {
        header("Location:../signup.php?error=invaliduid");
        exit();
    }

    if ($pwdMatch !== false) {
        header("Location:../signup.php?error=passwordsdontmatch");
        exit();
    }

    // Hash the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO myguests (`FirstName`, `LastName`, `UserName`, `BirthDate`, `Email`, `MobileNum`, `Password`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $fname, $lname, $username, $bdate, $email, $pnumber, $hashedPwd);

    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
else {
    header('Location:../login.php');
    exit();
}
?>
