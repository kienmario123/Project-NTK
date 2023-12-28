<!DOCTYPE html>
<?php
    $mysqli = new mysqli("localhost", "root", "", "project");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminGW</title>
    <link rel="stylesheet" href="./../css/styleadmin.css">
</head>
<?php
    session_start();
    if (!isset($_SESSION['dangnhap'])) {
        header('Location:../login.php');
    }
?>
<body>
    <h3 class="title-admin">Welcome to AdminGW</h3>
    <div class="wrapper">
        <?php
            $mysqli = new mysqli("localhost", "root", "", "project");

            // Check connection
            if ($mysqli->connect_errno) {
                echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
                exit();
            }
            include("header.php");
            include("menu.php");
            include("main.php");
            include("footer.php");
        ?>
    </div>
</body>
</html>

