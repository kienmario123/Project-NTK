<div class="clear"></div>
<div class="main">

    <?php

       if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query = '';
        }
        if($tam== "quanlydanhmucsanpham" &&  $query=='them'){
            include("quanlydanhmucsp/them.php");
            include("quanlydanhmucsp/lietke.php");
        }elseif ($tam == "quanlydanhmucsanpham" &&  $query=='sua') {
            include("quanlydanhmucsp/sua.php");
        }elseif ($tam == "quanlysp" &&  $query=='them') {
            include("quanlysp/them.php");
            include("quanlysp/lietke.php");
        }elseif($tam == "quanlysp" &&  $query=='sua'){
            include("quanlysp/sua.php");
        }
        else{
            include("dashboard.php");
        }
    ?>
   
</div>