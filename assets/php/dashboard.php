<?php
session_start();
//include auth_session.php file on all user panel pages
// include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['image']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="../../login.html">Logout</a></p>
    </div>
</body>

</html>