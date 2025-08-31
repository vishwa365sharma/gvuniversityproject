<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GV University Admissions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: wheat;
        }
        header {
            background: #003366;
            color: #fff;
            padding: 1.5rem 2rem;
            text-align: center;
        }
        nav {
        box-shadow: 0 2px 8px rgba(0, 80, 158, 0.1);
        border-radius: 0 0 12px 12px;
        margin-top: 20px;
        margin-top: 10px;
        }

        nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        padding: 10px 0;
        background: linear-gradient(90deg, #00509e 60%, #003f7d 100%);
        border-radius: 0 0 12px 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        nav ul li {
        margin: 0 18px;
        position: relative;
        }

        nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        padding: 8px 16px;
        border-radius: 6px;
        transition: 
            background 0.3s,
            color 0.3s,
            box-shadow 0.3s;
        }

        nav ul li a:hover,
        nav ul li a:focus {
        background: #ff9800;
        color: #002855;
        box-shadow: 0 4px 16px rgba(255,152,0,0.15);
        outline: none;
        }

        nav ul li::after {
        content: '';
        display: block;
        margin: 0 auto;
        width: 0%;
        height: 3px;
        background: #ff9800;
        transition: width 0.3s;
        border-radius: 2px;
        }
        
        nav ul li:hover::after,
        nav ul li:focus-within::after {
        width: 80%;
        }

        header h1 {
            color: white;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: whitesmoke;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        }
        h1, h2 {
            color: #2c3e50;
        }
        ul {
            line-height: 1.8;
        }
        .apply-btn {
            display: inline-block;
            background: #2980b9;
            color: #fff;
            padding: 12px 28px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            margin-top: 20px;
            transition: background 0.2s;
        }
        .apply-btn:hover {
            background: #1abc9c;
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background: #003366;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }   
    </style>
</head>
<body>
    <header>
        <h1>Admission Form</h1>
        <p>Join GV University and Shape Your Future</p>
        <nav>
            <ul>
                <li><a href="1home.php">Home</a></li>
                <li><a href="2about.php">About</a></li>
                <li><a href="3courses.php">Courses</a></li>
                <li><a href="4admission.php">Admissions</a></li>
                <li><a href="5contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section id="overview">
            <h2>Welcome to GV University Admissions</h2>
            <p>
                GV University invites applications for undergraduate and postgraduate programs for the academic year 2024-25. Join a vibrant campus, learn from world-class faculty, and shape your future with us!
            </p>
        </section>
        <section id="requirements">
            <h2>Admission Requirements</h2>
            <ul>
                <li>Completed application form</li>
                <li>Official transcripts of previous education</li>
                <li>Proof of identity (Aadhaar card/passport)</li>
                <li>Entrance exam scores (if applicable)</li>
                <li>Passport size photographs</li>
            </ul>
        </section>
        <section id="apply">
            <h2>How to Apply</h2>
            <ol>
                <li>Review the eligibility criteria for your chosen program.</li>
                <li>Gather all required documents.</li>
                <li>Fill out the online application form.</li>
                <li>Submit the application and pay the application fee.</li>
                <li>Wait for confirmation and further instructions via email.</li>
            </ol>
            <a href="6form.php" class="apply-btn">Apply Now</a>
        </section>
    </div>
    <footer>
        &copy; 2025 GV University. All rights reserved.
    </footer>
</body>
</html>