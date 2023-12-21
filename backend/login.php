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
            background:#f2f2f2;
        }
        .wrapper-login {
    width: 15%;
    margin: 0 auto;
    }

    table.table-login {
        width: 100%;
    }

    table.table-login tr td {
        padding: 5px;
    }

    </style>
</head>
<body>
<div class="wrapper-login">
    <form action="" autocomplete="off" method="POST">
        <table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
        <tr>
            <td colspan="2"><h3>Đăng nhập GW</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            
            <td colspan="2"><input type="submit" name="dangnhap" value="login"></td>
        </tr>
    </table>
    </form>
</div> 
</body>
</html>
 
