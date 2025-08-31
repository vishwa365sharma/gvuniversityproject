<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: pink;
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

        h1 {
            color: white;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            background: #fff;
            margin: 30px auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
            font-size: 1em;
            color: #333;
        }
        th {
            background: #eaeaea;
        }
        tr {
            background: #f4f4f4;
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
        <h1>Available Courses</h1>
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
    <main>
        <table>
            <thead>
                <th colspan="5">undergraduate Courses(UG)</th>
                <tr>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Credits</th>
                    <th>Course Fees</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bechlors of Computer Applications</td>
                    <td>Learn the fundamentals of computer science including programming, algorithms, and data structures.</td>
                    <td>3 years</td>
                    <td>120</td>
                    <td>Rs.1,08,000</td>
                </tr>
                <tr>
                    <td>Bechlors of Business Administration</td>
                    <td>A comprehensive program covering management, finance, marketing, and entrepreneurship.</td>
                    <td>3 years</td>
                    <td>90</td>
                    <td>Rs.90,000</td>
                </tr>
                <tr>
                    <td>Bechlors of Science</td>
                    <td>A strong foundation in scientific and technological fields</td>
                    <td>3 years</td>
                    <td>90</td>
                    <td>Rs.1,20,000</td>
                </tr>
                <th colspan="5">postgraduate Courses(PG)</th>
                <tr>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Credits</th>
                    <th>Course Fees</th>
                </tr>
                <tr>
                    <td>Master of Computer Applications</td>
                    <td>Advanced studies in computer applications, software development, and systems management.</td>
                    <td>2 years</td>
                    <td>120</td>
                    <td>Rs.90,000</td>
                </tr>
                <tr>
                    <td>Master of Business Administration</td>
                    <td>In-depth knowledge of business management, leadership, and strategic decision-making.</td>
                    <td>2 years</td>
                    <td>90</td>
                    <td>Rs.80,000</td>
                </tr>
                <tr>
                    <td>Master of Science</td>
                    <td>Specialized studies in various scientific disciplines, focusing on research and innovation.</td>
                    <td>2 years</td>
                    <td>90</td>
                    <td>Rs.1,00,000</td>
                </tr>
            </tbody>
        </table>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <footer>
            <p>&copy; 2025 GV University. All rights reserved.</p>
        </footer>
</body>
</html>