<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Gunpla World</title>
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

        .nutdangki,
        .change-sign-up {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }


        .change-sign-up:hover {
            color: #007bff;
        }

        .nutdangnhap {
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

        .nutdangnhap:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="../backend/index.php" onclick="goBack()" class="back-button">Quay Trở Lại</a>
    <div class="wrapper-login">
        <form action="" method="POST" class="form-sign-in" id="form-sign-in">
            <table border="1" class="table-login" style="text-align: center;">
                <tr>
                    <td colspan="2"><h3>Đăng nhập GW</h3></td>
                </tr>
                <tr>
                    <td><b>Tài khoản</b></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><b>Mật khẩu</b></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>
                        <a class="nutdangki"><b>Chưa có tài khoản?</b></a>
                    </td>
                    <td>
                        <a class="change-sign-up" href="../backend/signin.php"><b>Đăng ký</b></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input class="nutdangnhap" type="submit" name="dangnhap" value="Đăng Nhập"></td>
                </tr>
            </table>
        </form>
        <form action="./backend/signin.php" class="change-sign-up"></form>
    </div>
</body>
</html>
