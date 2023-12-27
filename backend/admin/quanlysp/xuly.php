<?php
    $mysqli = new mysqli("localhost","root","","project");

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
    exit();
    }

    $ten_sanpham = $_POST["ten_sanpham"];
    $ma_sanpham = $_POST["ma_sanpham"];
    $gia_sanpham = $_POST["gia_sanpham"];
    $soluong = $_POST["soluong"];
    //xuly hinh anh
    $anh_sanpham = $_FILES["anh_sanpham"]["name"];
    $anh_sanpham_tmp = $_FILES["anh_sanpham"]["tmp_name"];
    $anh_sanpham = time().'_'.$anh_sanpham;
    $tomtat = $_POST["tomtat"];
    $noidung_sanpham = $_POST["noidung_sanpham"];
    $tinhtrang_sanpham = $_POST["tinhtrang_sanpham"];
    

if(isset($_POST["themsanpham"])){
    "INSERT INTO tbl_sanpham (ten_sanpham,`ma_sanpham`,`gia_sanpham`,`soluong`,`anh_sanpham`,`tomtat`,`noidung_sanpham`,`tinhtrang_sanpham`) 
            VALUES ('$ma_sanpham','$ten_sanpham','$gia_sanpham','$noidung_sanpham','$anh_sanpham','$tomtat','$tinhtrang_sanpham');";
        move_uploaded_file($anh_sanpham_tmp,'uploads/'.$anh_sanpham);
        header("Location: ../index.php?action=quanlysanpham&query=them");
     if($mysqli->query($sql_them)){
        
    }else {
        $error_ntk = "Lỗi thêm mới!" .mysqli_errno($mysqli);
    }
}elseif(isset($_POST['suasanpham'])){
    //sua
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc=$_GET[iddanhmuc]";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}else{

    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}
?>