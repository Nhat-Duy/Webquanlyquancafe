<div>
    <p>Liệt kê khách hàng</p>
</div>
<?php
$sql_lietke_kh = "SELECT tenkhachhang,email,dienthoai,diachi,COUNT(tenkhachhang) FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky GROUP BY tenkhachhang";
$query_lietke_kh =  mysqli_query($mysqli, $sql_lietke_kh);
?>

<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Số đơn hàng đã mua</th>
        <th>Phân hạng khách hàng</th>
        <!-- <th>Quản lý </th> -->
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_kh)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['COUNT(tenkhachhang)'] ?></td>
            <td>
               <?php
                if($row['COUNT(tenkhachhang)']>1)
                {
                    echo'VIP';
                }else{
                    echo'Thường';
                }
               ?>
            </td>
            <!-- <td>
                <a href="?action=quanlykhachhang&query=sua"><i class="fa fa-pencil" style="color: blue; font-size: large;" aria-hidden="true"></i></a>
            </td> -->
        </tr>
    <?php
    }
    ?>
</table>