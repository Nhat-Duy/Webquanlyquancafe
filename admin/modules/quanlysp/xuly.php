<?php
include('../../config/connect.php');

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];




#them sanpham 
if(isset($_POST['themsanpham'])){
	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,noidung,tinhtrang,id_danhmuc) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlysp&query=lietke');
}elseif (isset($_POST['suasanpham'])) {
#sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."', soluong='".$soluong."', hinhanh='".$hinhanh."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."'  WHERE id_sanpham='$_GET[idsanpham]'";
#xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
	}else {
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."', soluong='".$soluong."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysp&query=lietke');	
}else {
	$id=$_GET['idsanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while ($row = mysqli_fetch_array($query)) {
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysp&query=lietke');

}

?>