<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí Gunpla World</title>
    <style type="text/css">
        body {
            background: #CA9EE7;
            font-family: Arial, sans-serif;
        }

        .wrapper-login {
            width: 50%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table.table-login {
            width: 100%;
            border-collapse: collapse;
        }

        table.table-login tr td {
            padding: 10px;
        }

        h3 {
            margin: 0;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .nutdangky {
        width: 100%;
        padding: 12px; 
        background-color: #28a745; 
        color: #fff; 
        border: none;
        border-radius: 5px; 
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s; 
    }

    .nutdangky:hover {
        background-color: #218838; /* màu nền khi hover */
    }
    </style>
</head>
<body>
<a href="../backend/index.php" onclick="goBack()" class="back-button">Quay Trở Lại</a>
<div class="wrapper-login">
    <form action="" autocomplete="off" method="POST">
        <table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
        <tr>
            <td colspan="2"><h3><b>Đăng kí GW</b></h3></td>
        </tr>
        <tr>
            <td><b>Tên Tài khoản</b></td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><b>Mật khẩu</b></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><b>Nhập lại Mật khẩu</b></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><b>Nhập lại Email</b></td>
            <td><input type="text" name="repemail"></td>
        </tr>
        <tr>
            <td><b>Số Điện Thoại</b></td>
            <td><input type="text" name="sdt"></td>
        </tr>
        <tr>
            
            <td colspan="2"><input class="nutdangky" type="submit" name="dangki" value="Đăng Ký"></td>
        </tr>
    </table>
    </form>
</div> 
</body>
</html>
 
