<?php
include 'connect.php';
session_start();
include 'functies/sideMenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-NFCD</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>

    <!-- Side Menu from sideMenu.php -->
    <?php include 'functies/sideMenu.php'; ?>

    <!-- Main content area -->
    <div class="main-content">
        <h1>Admin Panel</h1>
        <p>Welkom, <?php echo $_SESSION['klantnaam']; ?>!</p>

        <div class="lijst">
            <a href="user.php" class="btn">Beheer Klanten</a>
            <br>
            <a href="afspraakAdmin.php" class="btn">Beheer Afspraken</a>
        </div>
    </div>

<script src="libraries/aos.js"></script>
<script>
    function openNav() {
        document.getElementById("sidenav").style.width = "250px"; // Open de sidenav
    }

    function closeNav() {
        document.getElementById("sidenav").style.width = "0"; // Sluit de sidenav
    }

    AOS.init();
</script>

</body>
</html>
