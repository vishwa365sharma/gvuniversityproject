<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - GV University</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
       body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 0;
    }
    header {
  background-color: #002855;
  color: white;
  padding: 15px 20px;
  margin-bottom: 0;
  text-align: center;
}


    header h1 {
  font-size: 24px;
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
    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .contact-info {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-bottom: 30px;
    }

    .info-block {
      flex: 1 1 45%;
      margin-bottom: 20px;
    }

    .info-block h3 {
      margin-bottom: 10px;
      color: #003366;
    }

    .info-block p {
      margin: 5px 0;
      line-height: 1.6;
    }

    .map {
      margin-top: 20px;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: 0;
      border-radius: 10px;
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<header>
  <h1>Contact GV University</h1>
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
  <div class="contact-info">
    <div class="info-block">
      <h3>Contact Information</h3>
      <p><strong>Phone:</strong> +91 1234567899</p>
      <p><strong>Email:</strong> info@gvuniversity.ac.in</p>
      <p><strong>Website:</strong> www.gvuniversity.ac.in</p>
    </div>
    <div class="info-block">
      <h3>University Address</h3>
      <p>GV University Campus,</p>
      <p>kurukshetra, Haryana</p>
    </div>
  </div>

  <div class="map">
    <h3>Our Location on Map:</h3>
    <!-- Replace below map link with your actual address from Google Maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13827.09935541719!2d76.81627594999999!3d29.957154499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e38adbb5ad3d9%3A0x890b0805a3a339d8!2sKurukshetra%20University%2C%20Thanesar%2C%20Haryana!5e0!3m2!1sen!2sin!4v1754544966529!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<footer>
  &copy; 2025 GV University. All rights reserved.
</footer>

</body>
</html>

