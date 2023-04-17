<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}

$sql_pro = "SELECT  * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%' ";
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
    <h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa']; ?> </h3>
    <div class="products mt-3">
      <ul>
        <?php
        while ($row_pro = mysqli_fetch_array($query_pro)) {
        ?>
          <div class="products_list">
            <li class="">
              <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?>">
                <a style="text-decoration: none;" href="index.php?quanly=chitietsanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
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


