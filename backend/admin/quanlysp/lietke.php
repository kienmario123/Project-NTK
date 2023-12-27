<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>

    </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            $i++;
        ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td>
            <a href="?action=quanlydanhmucsanpham&query=sua&idsanpham=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | 
            <a href="./quanlydanhmucsp/xuly.php?idsanpham=<?php echo $row['id_danhmuc'] ?>">Xoá</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>