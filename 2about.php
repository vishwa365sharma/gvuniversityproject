<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(universe.jpg);
            background-size: cover;
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
        
        .about {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            backdrop-filter: blur(10px);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
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
        <h1>Welcome to University Portal</h1>
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
    <div class="about">
        <h2>About Our University</h2>
        <p>
            Our university is committed to providing quality education and fostering research and innovation. Explore our programs, connect with faculty, and become part of a vibrant academic community.
        </p>
        <h3>Latest News</h3>
        <ul>
            <li>Admissions are open</li>
            <li>Don't delay in Admission, just fill the form with criteria and get the opportunities</li>
            <img src="admissionopen.jpg" alt="Admissions Open" style="width:50%; height:auto; border-radius:8px;">
            <li>New research center inaugurated in the Science Department.</li>
            <img src="inaugration.jpg" alt="Research Center" style="width:50%; height:auto; border-radius:8px;">
            <li>Annual cultural fest scheduled for September.</li>
            <img src="culturalfest.jpg" alt="Cultural Fest" style="width:50%; height:auto; border-radius:8px;">
        </ul>
    </div>
    <footer>
        &copy; 2025 GV University. All rights reserved.
    </footer>
</body>
</html>