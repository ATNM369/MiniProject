<?php 
    include_once 'db.php';

    if(isset($_GET['messageid'])){  
        $messageid = $_GET['messageid'];

        $sql = "DELETE FROM message WHERE id=?";
        try {
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $messageid);
                mysqli_stmt_execute($stmt);
        
                // Close the statement and the database connection
                mysqli_stmt_close($stmt);
                header("Location:viewMessage.php?delete_successful");
                exit;
            } else {
                throw new Exception(mysqli_error($conn));
            }
        } catch (Exception $e) {
            header("Location:index.php");
            exit;
        }
        

    } else{
        echo "None";
    }
?>