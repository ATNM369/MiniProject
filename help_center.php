<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button[type="submit"],
        button[type="button"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Help Center</h2>
        <form id="contactForm" action="#" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <br><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit">Submit</button>
            <a href= "index.php" ><button type="button" id="cancelButton">Cancel</button></a>
        </form>
    </div>

    <script>
        const contactForm = document.getElementById('contactForm');
        const cancelButton = document.getElementById('cancelButton');

        contactForm.addEventListener('submit', (event) => {
            event.preventDefault();
          
        });

        cancelButton.addEventListener('click', () => {
            contactForm.reset();
        });
    </script>
</body>
</html>
