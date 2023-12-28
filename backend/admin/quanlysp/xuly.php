<?php
    $connect = new mysqli("localhost","root","","project");

    // Check connection
    if ($connect->error) {
        echo "SQL error: " . $connect->error;
    }

if(isset($_POST["themsanpham"])){
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
    $sql_them = "INSERT INTO tbl_sanpham (`ten_sanpham`,`ma_sanpham`,`gia_sanpham`,`soluong`,`anh_sanpham`,`tomtat`,`noidung_sanpham`,`tinhtrang_sanpham`) 
            VALUES ('$ten_sanpham','$ma_sanpham','$gia_sanpham','$soluong','$anh_sanpham','$tomtat','$noidung_sanpham','$tinhtrang_sanpham')";
        move_uploaded_file($anh_sanpham_tmp,'uploads/'.$anh_sanpham);
        if($connect->query($sql_them)){
         header("Location: ../index.php?action=quanlysp&query=them");
        
    }else {
        $error_ntk = "Lỗi thêm mới!" .mysqli_errno($connect);
    }
}elseif(isset($_POST['suasanpham'])){
    //sua
    if ($anh_sanpham != '') {
        move_uploaded_file($anh_sanpham_tmp,'uploads/'.$anh_sanpham);
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['anh_sanpham']);
        }
        $sql_update = "UPDATE tbl_sanpham SET ten_sanpham='".$ten_sanpham."',ma_sanpham='".$ma_sanpham."',gia_sanpham='".$gia_sanpham."',soluong='".$soluong."',anh_sanpham='".$anh_sanpham."',tomtat='".$tomtat."',noidung_sanpham='".$noidung_sanpham."',tinhtrang_sanpham='".$tinhtrang_sanpham."' WHERE id_sanpham='$_GET[idsanpham]'";
} else {
        $sql_update = "UPDATE tbl_sanpham SET ten_sanpham='".$ten_sanpham."',ma_sanpham='".$ma_sanpham."',gia_sanpham='".$gia_sanpham."',soluong='".$soluong."',tomtat='".$tomtat."',noidung_sanpham='".$noidung_sanpham."',tinhtrang_sanpham='".$tinhtrang_sanpham."' WHERE id_sanpham='$_GET[idsanpham]'";
}
    mysqli_query($connect,$sql_update);
        header("Location: ../index.php?action=quanlysp&query=them");
}else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query)){
       unlink('uploads/'.$row['anh_sanpham']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($connect,$sql_xoa);
    header("Location: ../index.php?action=quanlysp&query=them");
}
?>