<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="quanlysp/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="ten_sanpham"></td>
    </tr>
    <tr>
        <td>Mã sp</td>
        <td><input type="text" name="ma_sanpham"></td>
    </tr>
    <tr>
        <td>Giá sp</td>
        <td><input type="text" name="gia_sanpham"></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="anh_sanpham"></td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td><textarea rows="10" width="100%"  name="tomtat" style="resize: none"></textarea></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><textarea rows="10" name="noidung_sanpham" style="resize: none"></textarea></td>
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
            <select name="danhmuc">
                <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tensanpham'] ?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <!-- <tr>
        <td>Danh mục sản phẩm</td>
        <td>
            <select name="tinhtrang_sanpham">
                <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc"
                ?>
                <option value="1">Kích hoạt</option>
                
            </select>
        </td>
    </tr> -->
    <tr>
        <td>Tình trạng</td>
        <td>
            <select name="tinhtrang_sanpham">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" name="themsanpham" value="Thêm danh mục sản phẩm"></td>
    </tr>
    
</form>
</table>