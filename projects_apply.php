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
    <title>GEO-TECH HUB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #f5f5f5;
            padding: 2rem;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
        }
        button[type="submit"],
        button[type="button"] {
            background-color: #333;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>GEO-TECH HUB</h1>
        <h2>Project Application Form</h2>
    </header>
    
    <main>
        <section id="projects">
            <h2>Projects</h2>
            <form action="addprojects.php" method="POST" id="projectsRequestForm">
                <h3>Personal Information</h3>

                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="Address">Address:</label>
                <input type="text" id="Address" name="Address" required>

                <label for="EmailAddress">Email Address:</label>
                <input type="email" id="EmailAddress" name="EmailAddress" required>

                <label for="PhoneNumber">Phone Number:</label>
                <input type="tel" id="PhoneNumber" name="PhoneNumber" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <h3>Educational Qualifications</h3>
                
                <label for="HEL">Highest Education Level:</label>
                <textarea id="HEL" name="HEL" rows="6" maxlength="1000" required></textarea>

                <label for="AcademicBackground">Academic Background:</label>
                <textarea id="AcademicBackground" name="AcademicBackground" rows="6" maxlength="1000" required></textarea>

                <h3>Work Experience</h3>
                
                <label for="PreviousWorkExperience">Previous Work Experience:</label>
                <textarea id="PreviousWorkExperience" name="PreviousWorkExperience" rows="6" maxlength="1000" required></textarea>

                <label for="JobResponsibilities">Job Responsibilities:</label>
                <textarea id="JobResponsibilities" name="JobResponsibilities" rows="6" maxlength="1000" required></textarea>

                <h3>Skills and Competencies</h3>
                
                <label for="SkillsAndCompetencies">Skills and Competencies:</label>
                <textarea id="SkillsAndCompetencies" name="SkillsAndCompetencies" rows="6" maxlength="1000" required></textarea>
                
               <button type="submit">Submit</button>
                <a href="index1.php"><button type="button" id="cancelButton">Cancel</button></a>
            </form>
        </section>
    </main>
    
    <script>
        // Your JavaScript code here
    </script>
</body>
</html>
