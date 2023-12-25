<?php
    $mysqli = new mysqli("localhost","root","","project");
    
    // Check connection
    if ($mysqli->connect_errno) {
        echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
        exit();
    }
    ?>
<?php   
    $tenproducts = $_POST["tenproducts"];
    $maproducts = $_POST["maproducts"];
    $giaproducts = $_POST["giaproducts"];
    $soluong = $_POST["soluong"];
    //xuly hinh anh
    $hinhanh = $_FILES["hinhanh"]["name"];
    $hinhanh_tmp = $_FILES["hinhanh"]["tmp_name"];
    $hinhanh = time().'_'.$hinhanh;
    $tomtat = $_POST["tomtat"];
    $noidung = $_POST["noidung"];
    $tinhtrang = $_POST["tinhtrang"];
   


if(isset($_POST["themsanpham"])){
    //them
    $sql_them = "INSERT INTO ntk_products(tenproducts,maproducts,giaproducts,soluong,hinhanh,tomtat,noidung,tinhtrang) value('".$tenproducts."','".$maproducts."','".$giaproducts."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh); 
    header("Location: ../index.php?action=quanlysanpham&query=them");
}elseif(isset($_POST['suasanpham'])){
    //sua
    $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tenloaisp."',thutu='".$thutu."' WHERE id_sanpham=$_GET[idsanpham]";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}else{

    $id=$_GET['idsanpham'];
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}

?>