<?php
    $mysqli = new mysqli("localhost","root","","project");
    
    // Check connection
    if ($mysqli->connect_errno) {
        echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
        exit();
    }
    ?>
<?php   
    $tenloaisp = $_POST["tensanpham"];
    $thutu = $_POST["thutu"];
if(isset($_POST["themdanhmuc"])){
    //them
    $sql_them = "INSERT INTO tbl_danhmuc(tensanpham,thutu) value('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}elseif(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update = "UPDATE tbl_danhmuc SET tensanpham='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc=$_GET[idsanpham]";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}else{

    $id=$_GET['idsanpham'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../index.php?action=quanlydanhmucsanpham&query=them");
}

?>