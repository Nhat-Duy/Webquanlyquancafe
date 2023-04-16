
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand logo" href="#"><p>ND Coffee</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbar1">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?quanly=sanpham&id=1">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
            </li>

              <?php
                if (isset($_SESSION['dangky'])) {
              ?>
                <li class="nav-item"><a id="nav-a" class="nav-link" href="index.php?dangxuat=1">Đăng Xuất</a></li>
              <?php
              }else {
              ?>
                <li class="nav-item"><a id="nav-a" class="nav-link" href="index.php?quanly=dangky">Đăng Ký</a></li>
              <?php
              }
              ?>
          </ul>
          <p>
          <form action="index.php?quanly=timkiem" method="POST" style="display: flex;">
            <input style="border-radius: 5px;" class="nav-link" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
            <input style="border-radius: 5px;" class="nav-link" type="submit" name="timkiem" value="Tìm kiếm">
          </form>
          </p>
        </div>
      </nav>
