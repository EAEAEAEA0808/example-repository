<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboardddddd</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #111;
    color: white;
}

/* NAVBAR */
.navbar {
    background: #1a1a1a;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 20px;
    font-weight: bold;
}

.nav-links a {
    color: #ccc;
    text-decoration: none;
    margin-left: 20px;
    font-size: 15px;
}

.nav-links a:hover {
    color: white;
}

/* CONTENT */
.container {
    padding: 60px 20px;
    text-align: center;
}

.card {
    background: #1a1a1a;
    padding: 30px;
    max-width: 500px;
    margin: auto;
}

@media(max-width:600px){
    .nav-links a {
        margin-left: 10px;
        font-size: 14px;
    }
}

</style>
</head>
<body>

<!-- NAVIGATION BAR -->
<div class="navbar">
    <div class="logo">My Dashboard</div>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="card">
        <h2>Welcome, <?php echo $_SESSION['username']; ?> 👋</h2>
        <p>You are successfully logged in.</p>
    </div>
</div>

</body>
</html>
