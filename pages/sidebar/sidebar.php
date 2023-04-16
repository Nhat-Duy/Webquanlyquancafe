<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<style>
  .leftMenu ul li{
    font-weight: bold;
    font-size: 15pt;
  
  }.leftMenu ul li a{
    text-decoration: none;
  }
  
</style>
<div id="leftSide">
  <div class="group-box">
    <h1 class="title">DANH MỤC SẢN PHẨM</h1>
    <div class="leftMenu">
      <ul>
        <?php 
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
        <li><a style="color:#376105;" href="index.php?quanly=sanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
        <?php
        } 
        ?>
      </ul>
    </div>
  </div>
</div>