<!DOCTYPE html>
|<?php
 $mysqli = new mysqli("localhost","root","","project");
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminGW</title>
    <link rel="stylesheet" href="backend/css/styleadmin.css">
</head>
<body>
    <h3 class="title-admin">Welcome to AdminGW</h3>
    <?php 
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
    ?>
</body>
</html>

