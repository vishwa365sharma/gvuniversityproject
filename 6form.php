<?php 
include("connection.php");
if(isset($_POST['register'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $fathername = mysqli_real_escape_string($conn, $_POST['fathername']);
    $mothername = mysqli_real_escape_string($conn, $_POST['mothername']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "INSERT INTO studentinfo (fullname, fathername, mothername, gender, email, phone, address, course) 
              VALUES ('$fullname', '$fathername', '$mothername', '$gender', '$email', '$phone', '$address', '$course')";

    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Admission Form</title>
    <style>
        .box {
            height: 180px; 
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: solid;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: transparent;
            backdrop-filter: blur(10px);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url('image2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
        }
        form {
            max-width: 500px;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: lightblue;
            color: white;
        }
        button:hover {
            background-color: navy;
        }
        button a:hover {
            color: white;
        }
        h2 {
            text-align: center;
            color: #002855;
        }
        a {
            color: red;
            text-decoration: none;
        }
        a:hover {
            color: navy;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="box">
    <h2>University Admission Form</h2>
    </div>
    <div class="container">
    <form action="" method="POST">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="fathername">Father's Name</label>
        <input type="text" id="fathername" name="fathername" required>

        <label for="mothername">Mother's Name</label>
        <input type="text" id="mothername" name="mothername" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

        <label for="address">Address</label>
        <textarea id="address" name="address" rows="3" required></textarea>

        <label for="course">Course Applying For</label>
        <select id="course" name="course" required>
            <option value="">Select</option>
            <option value="bca">Bechlors of Computer Applications</option>
            <option value="bba">Bechlors of Business Administration</option>
            <option value="bsc">Bechlors of Science</option>
            <option value="mca">Master of Computer Applications</option>
            <option value="mba">Master of Business Administration</option>
        </select>

        <input type="submit" value="register" class="btn" name="register">
        <p style="text-align: center; color: red;">* All fields are mandatory</p>
        <p style="text-align: center; color: green;">* Please ensure all information is accurate before submitting.</p>
        <input type="reset" value="reset" class="btn" name="reset">
    </form>
    </div>
</body>
</html>

