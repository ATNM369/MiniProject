<?php 
    include_once 'db.php';

    if(isset($_GET['projectid'])){  
        $projectid = $_GET['projectid'];

        $sql = "DELETE FROM projects WHERE id=?";
        try {
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $projectid);
                mysqli_stmt_execute($stmt);
        
                // Close the statement and the database connection
                mysqli_stmt_close($stmt);
                header("Location:viewprojects.php");
                exit;
            } else {
                throw new Exception(mysqli_error($conn));
            }
        } catch (Exception $e) {
            header("Location:admin.php");
            exit;
        }
        

    } else{
        echo "None";
    }
?>