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
            <form action="addpublishes.php" method="POST" id="publicationRequestForm" enctype="multipart/form-data">
                <h3>Personal Information</h3>

                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="affiliation">Affiliation:</label>
                <input type="text" id="affiliation" name="affiliation" required>

                <label for="emailAddress">Email Address:</label>
                <input type="email" id="emailAddress" name="emailAddress" required>

                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>

                <h3>Research Details</h3>
                
                <label for="titleOfResearch">Title of the Research:</label>
                <input type="text" id="titleOfResearch" name="titleOfResearch" required>

                <label for="abstract">Abstract:</label>
                <textarea id="abstract" name="abstract" rows="4" required></textarea>

                <label for="keywords">Keywords:</label>
                <input type="text" id="keywords" name="keywords" required>

                <h3>Manuscript or Research Document</h3>

                <label for="fileUpload">Upload a File:</label>
                <input type="file" id="fileUpload" name="pdfFile" required>

                <h3>Permissions and Copyright</h3>
                
                <label for="copyrightStatement">Copyright Statement:</label>
                <input type="text" id="copyrightStatement" name="copyrightStatement" required>

                <label for="permissionToPublish">Permission to Publish:</label>
                <input type="text" id="permissionToPublish" name="permissionToPublish" required>

                <h3>Author Information</h3>
                
                <label for="coAuthor">Co-author:</label>
                <input type="text" id="coAuthor" name="coAuthor" required>

                <label for="authorBiography">Author Biography:</label>
                <textarea id="authorBiography" name="authorBiography" rows="4" required></textarea>

                <h3>Citation and Attribution</h3>
                
                <label for="citationFormat">Citation Format:</label>
                <input type="text" id="citationFormat" name="citationFormat" required>

                <label for="attributionPreferences">Attribution Preferences:</label>
                <input type="text" id="attributionPreferences" name="attributionPreferences" required>

                <h3>Publication Release Date:</h3>
                
                <label for="desiredPublicationDate">Desired Publication Date:</label>
                <input type="date" id="desiredPublicationDate" name="desiredPublicationDate" required><br><br>

                <button type="submit">Submit</button>
                <a href="index1.php"><button type="button" id="cancelButton">Cancel</button></a>
            </form>
        </section>
    </main>
    
</body>
</html>
