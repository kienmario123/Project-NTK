<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="quanlysp/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tenproducts"></td>
    </tr>
    <tr>
        <td>Mã sp</td>
        <td><input type="text" name="maproducts"></td>
    </tr>
    <tr>
        <td>Giá sp</td>
        <td><input type="text" name="giaproducts"></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td><textarea rows="10" width="100%"  name="tomtat" style="resize: none"></textarea></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
    </tr>
    <tr>
        <td>Tình trạng</td>
        <td>
            <select name="tinhtrang">
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