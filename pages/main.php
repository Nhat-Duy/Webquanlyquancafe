    <div style="margin-top: 50px;">
      <?php 
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam == 'sanpham'){
            include("main/sanpham.php");
        }elseif($tam == 'giohang'){
            include("main/giohang.php");
        }elseif($tam == 'tintuc'){
            include("main/tintuc.php");
        }elseif($tam == 'lienhe'){
            include("main/lienhe.php");
        }elseif($tam == 'dangky'){
            include("main/dangky.php");
        }elseif($tam == 'thanhtoan'){
            include("main/thanhtoan.php");
        }elseif($tam == 'dangnhap'){
            include("main/dangnhap.php");
        }elseif($tam == 'timkiem'){
            include("main/timkiem.php");
        }elseif($tam == 'camon'){
            include("main/camon.php");
        }elseif($tam == 'chitietsanpham'){
            include("main/chitietsanpham.php");
        }else{
            include("main/index.php");
        }
      ?>
    </div>