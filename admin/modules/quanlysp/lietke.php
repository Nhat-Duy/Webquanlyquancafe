<?php 
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt kê sản phẩm</p>
<table class="table table-bordered">
     <tr style="text-align: center;">
     	<td>ID</td>
      	<td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá sản phẩm</td>
        <td>Số lượng</td>
        <td>Mã sản phẩm</td>
        <!-- <td>Nội dung</td> -->
        <td>Trạng thái</td>
      	<td>Quản lý</td>
     </tr>
     <?php 
     $i =0;
     while ($row = mysqli_fetch_array($query_lietke_sp)) {
     	$i++;
     ?>
     <tr>
     	<td><?php echo $i ?></td>
      <td><?php echo $row['tensanpham'] ?></td>
      <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" ></td>
      <td><?php echo $row['giasp'] ?></td>
      <td><?php echo $row['soluong'] ?></td>
      <td><?php echo $row['masp'] ?></td>
      <td><?php if($row['tinhtrang']==1){
          echo 'Kích hoạt';
        }else{
          echo 'Ẩn';
        } 
        ?>
        
      </td>

      <td>
       	<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
      </td>

    </tr>
    <?php
 	  }
    ?>

  </table>