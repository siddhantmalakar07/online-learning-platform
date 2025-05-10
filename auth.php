<?php
session_start();

$file = "users.json";
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['user'] = $username;
        header("Location: student_panel/dashboard.php");
        exit();
    } else {
        echo "Invalid login! <a href='login.php'>Try again</a>";
    }
}
?>
