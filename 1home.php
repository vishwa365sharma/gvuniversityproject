<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GV UNIVERSITY</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background: #f5f5f5;
  color: #333;
  background-image: url(image.jpg);
}

header {
  background-color: #002855;
  color: white;
  padding: 15px 20px;
  margin-bottom: 0;
}

.logo-container {
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo {
  width: 60px;
  height: 60px;
  margin-right: 15px;
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
span {
  font-family: Arial, sans-serif;
  font-size: 5rem;
  color: #ff5722;
  top: 20px;
  display: inline-block;
  position: relative;
  animation: bounce 2s infinite;
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  60% {
    transform: translateY(-15px);
  }
}
.about-content {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px 20px;
  backdrop-filter: blur(10px);
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(121, 43, 43, 0.1);
}
.about-content h2 {
  width: 100%;
  text-align: center;
  color: white;
}
.about-content p {
  max-width: 500px;
  font-size: 24px;
  line-height: 1.6;
  color: orangered;
  text-align: justify;
  margin: 0 auto;
}

footer {
  background-color: #002855;
  color: white;
  text-align: center;
  padding: 15px 20px;
  width: 100%;
  margin-top: 20px;
}
  </style>
</head>
<body>
  <header>
    <div class="logo-container">
      <img src="https://t3.ftcdn.net/jpg/04/91/76/62/360_F_491766294_h4j7LbW2YgfbNHhq7F8GboIc1XyBSEY5.jpg" alt="University Logo" class="logo">
      <h1>GV UNIVERSITY</h1>
    </div>
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
  <h3 style="text-align: center; margin-top: 20px;">
    <span>W</span>
    <span>e</span>
    <span>l</span>
    <span>c</span>
    <span>o</span>
    <span>m</span>
    <span>e</span>
    <span>!</span>
  </h3>
  <br>
  <br>
  <div class="about-content">
    <h2>About GV University</h2>
      <p>
        GV University is a world-renowned institution committed to academic excellence, innovation, and leadership. With state-of-the-art facilities and a vibrant campus life, we prepare students to shape the future.
      </p>
    </div>
  <footer>
    <p>&copy; 2025 GV University. All rights reserved.</p>
  </footer>
</body>
</html>
