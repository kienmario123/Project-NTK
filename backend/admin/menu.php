<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    
?>

<ul class="adminmenu-list">
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them"><b>Quản lý danh mục sản phẩm</b></a></li>
    
    <li><a href="index.php?action=quanlysp&query=them"><b>Quản lý sản phẩm</b></a></li>
    
    <!-- <li><a href="index.php?action=quanlydanhmucbaiviet&query=them"><b>Quản lý danh mục bài viết</b></a></li>
    <li><a href="index.php?action=quanlybaiviet&query=them"><b>Quản lý bài viết</b></a></li> -->
    
</ul>