<?php 
	$sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p>Liệt kê đơn hàng</p>
<!-- <a class="themdm" href="?action=quanlydanhmucsanpham&query=them">Thêm danh mục mới</a> -->
<table class="table table-striped">
     <tr style="text-align: center;">
     	<td>ID</td>
      	<td>Mã đơn hàng</td>
      	<td>Tên khách hàng</td>
      	<td>Địa chỉ</td>
      	<td>Email</td>
      	<td>SĐT</td>
      	<td>Tình trạng</td>
      	<td>Quản lý</td>
     </tr>
     <?php 
     $i =0;
     while ($row = mysqli_fetch_array($query_lietke_dh)) {
     	$i++;
     ?>
     <tr>
     	<td><?php echo $i ?></td>
       	<td><?php echo $row['code_cart'] ?></td>
       	<td><?php echo $row['tenkhachhang'] ?></td>
       	<td><?php echo $row['diachi'] ?></td>
       	<td><?php echo $row['email'] ?></td>
       	<td><?php echo $row['dienthoai'] ?></td>
       	<td>
       		<?php 
       			if($row['cart_status']==1){
       				echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
       			}else{
       				echo 'Đã xem';
       			}
       		?>
       	</td>

       <td>
       	<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
       </td>
     </tr>
    <?php
 	}
    ?>
  </table>