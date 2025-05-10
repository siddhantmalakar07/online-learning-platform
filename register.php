<?php
// Database credentials
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace your database password
$dbname = "online_learning"; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $state = $_POST['state'];
    $country = "India"; // Default value
    $gender = $_POST['gender'];
    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "";
    $languages = isset($_POST['languages']) ? implode(", ", $_POST['languages']) : "";
    $username = $_POST['username'];
    $password = $_POST['password']; // In a real application, use password_hash()

    // Prepare the SQL statement
    $sql = "INSERT INTO users (name, email, phone, address, state, country, gender, skills, languages, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssssssssss", $name, $email, $phone, $address, $state, $country, $gender, $skills, $languages, $username, $password);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<div class='alert alert-success text-center'>Registration successful! <a href='login.php'>Login here</a></div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error during registration: " . mysqli_error($conn) . " <a href='register.php'>Try again</a></div>";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert alert-danger text-center'>Error preparing statement: " . mysqli_error($conn) . " <a href='register.php'>Try again</a></div>";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            width: 100%;
        }
        .login-link {
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-container">
        <h3 class="text-center text-primary">Student Registration</h3>
        <hr>
        <form method="post" action="register.php">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Distric</label>
                <textarea name="address" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">State</label>
                <select name="state" class="form-select">
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="country" value="India" class="form-control" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </div>

            <div class="mb-3">
                <label class="form-label">Technical Skills</label><br>
                <input type="checkbox" name="skills[]" value="PHP"> PHP
                <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
                <input type="checkbox" name="skills[]" value="Python"> Python
                <input type="checkbox" name="skills[]" value="Java"> Java
            </div>

            <div class="mb-3">
                <label class="form-label">Languages Known</label><br>
                <input type="checkbox" name="languages[]" value="English"> English
                <input type="checkbox" name="languages[]" value="Hindi"> Hindi
                <input type="checkbox" name="languages[]" value="Marathi"> Marathi
                <input type="checkbox" name="languages[]" value="Tamil"> Tamil
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <a href="login.php" class="login-link">Already have an account? Login here</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>