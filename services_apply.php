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
        <main>
        <section id="services">
            <h2>Services</h2>
            <form action="addservices.php" method="POST" id="servicesRequestForm">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
                
                <label for="organization">Organization:</label>
                <input type="text" id="organization" name="organization">
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
                
                <label for="serviceType">Type of Services:</label>
                <select id="serviceType" name="serviceType">
                    <option value="landSurveying">Land Surveying</option>
                    <option value="gisAnalysis">GIS Analysis</option>
                    <option value="remoteSensing">Remote Sensing Data</option>
                    <option value="other">Other</option>
                </select>
                
                <label for="serviceDescription">Service Description:</label>
                <textarea id="serviceDescription" name="serviceDescription" rows="6" maxlength="1000" required></textarea>
                
                <label for="timeline">Timeline:</label>
                <input type="text" id="timeline" name="timeline">
                
                <label for="budget">Budget:</label>
                <input type="text" id="budget" name="budget">
                
                <button type="submit">Submit</button>
                <a href="index1.php"><button type="button">Cancel</button></a>
            </form>
        </section>
    </main>
    </main>
    
    <script>
        // Your JavaScript code here
    </script>
</body>
</html>