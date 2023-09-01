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
    </header>
    
    <main>
        <section id="publication">
            <h2>Publications</h2>
            <form id="publicationRequestForm">
                <h3>Personal Information</h3>

                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" required>

                <label for="Affiliation">Affiliation:</label>
                <input type="text" id="Affiliation" required>

                <label for="EmailAddress">Email Address:</label>
                <input type="email" id="EmailAddress" required>

                <label for="PhoneNumber">Phone Number:</label>
                <input type="tel" id="PhoneNumber" required>

                <h3>Research Details</details></h3>
                
                <label for="TitleOfResearch">Title of the Research:</label>
                <input type="text" id="TitleOfResearch" required>

                <label for="Abstract">Abstract:</label>
                <input type="text" id="Abstract" required>

                <label for="Keywords">Keywords:</label>
                <input type="text" id="Keywords" required>

                <h3>Manu Script or Research Document:</h3>

                <label for="fileUpload">Upload a File:</label>
                <input type="file" id="fileUpload" name="fileUpload">
                

                <h3>Permissions and Copyright</h3>
                
                <label for="CopyrightStatement">Copyright Statement:</label>
                <input type="text" id="CopyrightStatement" required>

                <label for="PermissionToPublish">Permission to Publish:</label>
                <input type="text" id="PermissionToPublish" required>

                <h3>Author Information</h3>
                
                <label for="CoAuther">Co-auther:</label>
                <input type="text" id="CoAuther" required>

                <label for="AutherBiography">Author Biography:</label>
                <input type="text" id="AutherBiography" required>

                <h3>Citation and Attribution</h3>
                
                <label for="CitationFormat">Citation Format:</label>
                <input type="text" id="CitationFormat" required>

                <label for="AttributionPreferences">Attribution Preferences:</label>
                <input type="text" id="AttributionPreferences" required>

                <h3>Publication Release Date:</h3>
                
                <label for="DesiredPublicationDate">Desired Publication Date:</label>
                <input type="date" id="DesiredPublicationDate" required><br><br>

                <button onclick="alert('Your Submission is Successful!')" type="submit">Submit</button>
                <a href="index1.php"><button type="button" id="cancelButton">Cancel</button></a>
            </form>
        </section>
    </main>
    
    <script>
        // Your JavaScript code here
    </script>
</body>
</html>
