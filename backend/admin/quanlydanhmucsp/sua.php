<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<form method="post" action="quanlydanhmucsp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>">
    <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
    ?>
    <tr>
        <td>Tên danh mục</td>
        <td><input autocomplete="off" type="text" value="<?php echo $dong['tensanpham']?>" name="tensanpham"></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input autocomplete="off" type="text" value="<?php echo $dong['thutu']?>" name="thutu"></td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
    </tr>
    <?php
    }
    ?>

</form>
</table>