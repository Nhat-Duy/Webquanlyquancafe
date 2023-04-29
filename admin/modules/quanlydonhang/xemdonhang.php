<?php 
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details, tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart = '$_GET[code]' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p>Xem đơn hàng</p>
<!-- <a class="themdm" href="?action=quanlydanhmucsanpham&query=them">Thêm danh mục mới</a> -->
<table class="table table-bordered">
     <tr style="text-align: center;">
     	<td>ID</td>
      	<td>Mã đơn hàng</td>
      	<td>Tên sản phẩm</td>
      	<td>Số lượng</td>
      	<td>Đơn giá</td>
      	<td>Thành tiền</td>
      	<!-- <td>Quản lý</td> -->
     </tr>
     <?php 
     $i =0;
     $tongtien = 0;
     while ($row = mysqli_fetch_array($query_lietke_dh)) {
     	$i++;
     	$thanhtien = $row['giasp'] * $row['soluongmua'];
        $tongtien += $thanhtien;
        
     ?>
     <tr>
     	<td><?php echo $i ?></td>
       	<td><?php echo $row['code_cart'] ?></td>
       	<td><?php echo $row['tensanpham'] ?></td>
       	<td><?php echo $row['soluongmua'] ?></td>
       	<td><?php echo number_format($row['giasp'],0,',','.'). 'vnđ' ?></td>
       	<td><?php echo number_format($thanhtien,0,',','.'). 'vnđ' ?></td>
     </tr>
    <?php
 	}
    ?>

    <tr>
        <td colspan="6">
            <p style="font-weight: bold;font-size: 15pt;color:red;float:right; margin-right: 3px;">Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
            
        </td>
    </tr>
  </table>