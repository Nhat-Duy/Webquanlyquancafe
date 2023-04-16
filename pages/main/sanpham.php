<?php

  $sql_pro = "SELECT * FROM tbl_sanpham 
  where tbl_sanpham.id_danhmuc ='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC ";
  $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<div id="contentWrapper">
  <?php
  include("pages/sidebar/sidebar.php");
  ?>

  <div id="mainContent">
    <div id="section-index">
      <i></i>
      <span id="section-title-main">Sản Phẩm</span>
      <i></i>
    </div>
    <div class="products mt-3">
      <ul>
        <?php
        while ($row_pro = mysqli_fetch_array($query_pro)) {
        ?>
          <div class="products_list">
            <li class="">
              <form method="POST" action="">
                <a style="text-decoration: none;" href="">
                  <img class="img-product" src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                  <p class="title_product"><?php echo $row_pro['tensanpham'] ?></p>
                  <p class="price_product"><?php echo number_format($row_pro['giasp'], 0, ',','.') . 'đ' ?></p>
                </a>
                <input name="soluong" type="number" max="100" min="0" value="0" size="3" style="margin-left: 30px;">
                <input type="submit" name="themgiohang" class="btn-cart" value="Thêm sản phẩm" style="margin-left: 12px;">
              </form>
            </li>
          </div>
          <?php 
          }
          ?>
      </ul>
    </div>
  </div>
</div>