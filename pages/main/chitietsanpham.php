<div id="section-index">
      <i></i>
      <span id="section-title-main">Chi tiết sản phẩm</span>
      <i></i>
</div>

<?php 
	$sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
	while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
	<div class="row">
            <div class="col-md-5">
                  <img class="border border-success img_ctsp" style="width: 400px;" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                  <p class="mt-2">
                        <img style="width: 130px;" class="border border-success img_ctsp" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                  </p>
            </div>
            <div class="col-md-7">
                  <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                        <div class="chitiet_sanpham ">
                              <p style="font-size: 35pt;font-weight: bold;"><?php echo $row_chitiet['tensanpham'] ?></p>
                              <hr>
                              <p style="font-size: 20pt;font-weight: 500;">Giá sản phẩm : <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . 'vnđ' ?></p>
                              <hr>
                              <p style="font-size: 22pt;font-weight: 500;">Thông tin sản phẩm: </p>
                              
                              <p>Mã sản phẩm: <?php echo $row_chitiet['masp']; ?></p>
                              <p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc']; ?></p>

                              
                              <hr>
                              <p style="font-size: 20pt;font-weight: 500;">Mô tả: </p>
                              <p>Giao hàng tận nhà nội thành Cần Thơ với hóa đơn tối thiểu 50k</p>
                              <p>
                                    <input name="soluong" type="number" max="100" min="0" value="0" size="3" style="margin-left: 20px;">
                                    <input type="submit" name="themgiohang" class="btn-cart" value="Thêm sản phẩm" style="margin-left: 12px;">
                              </p>
                        </div>
                  </form>
            </div>
    </div>
<?php
}
?>