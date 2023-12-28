<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);

if (!$query_lietke_sp) {
    die("Query failed: " . mysqli_error($mysqli));
}

?>
<p>Liệt kê sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sp</th>
        <th>Số lượng</th>
        <th>Mã sp</th>
        <th>Tóm tắt</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;
        ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['ten_sanpham'] ?></td>
        <td><img src="./quanlysp/uploads/<?php echo $row['anh_sanpham']?>" width="150px"></td>
        <td><?php echo $row['gia_sanpham'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['ma_sanpham'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if($row['tinhtrang_sanpham']==1){
                echo 'Kích hoạt';
            }else{
                echo 'Ẩn';
            }
            ?>

        </td>
        <td>
            <a href="./quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>  
            
        </td>
    </tr>
    <?php
    }
    ?>
</table>