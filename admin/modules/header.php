<?php
  if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] == 1){
      unset($_SESSION['dangnhap']);
      header('Location:login.php');
  }
?>
<p class="nav-item">
    <a class="nav-link" href="index.php?dangxuat=1">Đăng xuất: <?php if (isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?></a>
</p>
<h1>Quản lí quán cà phê</h1>