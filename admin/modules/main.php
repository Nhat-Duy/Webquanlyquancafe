<div class="clear"></div>
<div class="main" style="margin-top: 50px;">
    <?php

        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];

        }else{
            $tam = '';
            $query = '';
        }
        if($tam=='quanlydanhmucsanpham' && $query=='lietke'){           
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif($tam=='quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmucsp/them.php");
        }elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmucsp/sua.php");
        }
        // quan ly san pham
        elseif($tam=='quanlysp' && $query=='lietke'){
            include("modules/quanlysp/lietke.php");
        }elseif ($tam=='quanlysp' && $query=='them') {
            include("modules/quanlysp/them.php");
        }elseif ($tam=='quanlysp' && $query=='sua') {
            include("modules/quanlysp/sua.php");
        }
        // quan ly don hang
        elseif ($tam=='quanlydonhang' && $query=='lietke') {
            include("modules/quanlydonhang/lietke.php");
        }elseif ($tam=='donhang' && $query=='xemdonhang') {
            include("modules/quanlydonhang/xemdonhang.php");
        }
        elseif ($tam=='quanlykhachhang' && $query=='lietke') {
            include("modules/quanlykhachhang/lietke.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>
