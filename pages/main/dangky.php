<?php 
    // session_start();
	if (isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if ($sql_dangky) {
			
            $_SESSION['dangky'] = $tenkhachhang;

            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

            echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
            header('Location:index.php?quanly=giohang');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng ký</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="" method="POST">
                                <div class="form-group">
                                	<tr>
                                		<td><input type="text" name="hovaten" class="form-control form-control-user" 
                                    placeholder="Họ và tên"></td>
                                	</tr>
                                </div>
                                <div class="form-group">
                                	<tr>
                                		<td><input type="email" name="email" class="form-control form-control-user" 
                                        placeholder="Email Address"></td>
                                	</tr>
                                </div>
                                <div class="form-group">
                                	<tr>
                                		<td><input type="text" name="dienthoai" class="form-control form-control-user" 
                                        placeholder="Điện thoại"></td>
                                	</tr>
                                </div>
                                <div class="form-group">
                                	<tr>
                                		<td><input type="text" name="diachi" class="form-control form-control-user" 
                                        placeholder="Địa chỉ"></td>
                                	</tr>
                                </div>
                                <div class="form-group">
                                    <tr>
                                    	<td><input type="password" name="matkhau" class="form-control form-control-user"
                                              placeholder="Password"></td>
                                    </tr>
                                </div>
                                <div class="form-group">
                                    <tr>
                                    	<td><input type="submit" name="dangky" class="btn btn-primary btn-user btn-block" value="Đăng ký"></td>
                                        <td></td>
                                    </tr>
                                </div>
                                
                            </form>
                            
                            <div class="text-center">
                                <a  href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>