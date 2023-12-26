<?php
    session_start();
    $mysqli = new mysqli("localhost","root","","project");

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
    exit();
    }
    if(isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hovaten'] ?? '';
        $email = $_POST['email'] ?? '';
        $dienthoai = $_POST['dienthoai'] ?? '';
        $matkhau = md5($_POST['matkhau'] ?? '');
        $diachi = $_POST['diachi'] ?? '';          
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if ($sql_dangky) {
            echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
        }
    }    

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
            <td><b>Họ và tên</b></td>
            <td><input type="text" size="50" name="hovaten"></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" size="50" name="email"></td>
        </tr>
        <tr>
            <td><b>Điện thoại</b></td>
            <td><input type="text" size="50" name="dienthoai"></td>
        </tr>
        <tr>
            <td><b>Địa chỉ</b></td>
            <td><input type="text" size="50" name="diachi"></td>
        </tr>
        <tr>
            <td><b>Mật khẩu</b></td>
            <td><input type="password" size="50" name="matkhau"></td>
        </tr>
        <tr>
            
            <td colspan="2"><input class="nutdangky" type="submit" name="dangky" value="Đăng Ký"></td>
        </tr>
    </table>
    </form>
</div> 
</body>
</html>