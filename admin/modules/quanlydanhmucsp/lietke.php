<?php 
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<a class="themdm" href="?action=quanlydanhmucsanpham&query=them">Thêm danh mục mới</a>
<table class="table table-bordered">
     <tr style="text-align: center;">
     	<td>ID</td>
      	<td>Tên danh mục</td>
      	<td>Quản lý</td>
     </tr>
     <?php 
     $i =0;
     while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
     	$i++;
     ?>
     <tr>
     	<td><?php echo $i ?></td>
       	<td><?php echo $row['tendanhmuc'] ?></td>
       <td>
       	<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
       </td>
     </tr>
    <?php
 	}
    ?>
  </table>