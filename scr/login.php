<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: sign.php?error=Tài khoản không được để trống!");
	    exit();
	}else if(empty($pass)){
        header("Location: sign.php?error=Mật khẩu không được để trống!");
	    exit();
	}else{
		$sql = "SELECT * FROM tb_user WHERE TAIKHOAN='$uname' AND MATKHAU='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['TAIKHOAN'] === $uname && $row['MATKHAU'] === $pass && $row['MAQUYEN'] === '01') {
            	$_SESSION['TAIKHOAN'] = $row['TAIKHOAN'];
				$_SESSION['MATKHAU'] = $row['MATKHAU'];
            	$_SESSION['USERS_ID'] = $row['USERS_ID'];
            	header("Location: admin.php");
		        exit();
            }else if($row['TAIKHOAN'] === $uname && $row['MATKHAU'] === $pass && $row['MAQUYEN'] === '02'){
    			$_SESSION['TAIKHOAN'] = $row['TAIKHOAN'];
				$_SESSION['MATKHAU'] = $row['MATKHAU'];
            	$_SESSION['USERS_ID'] = $row['USERS_ID'];
            	header("Location: admin.php");
		        exit();

			}
			else{
				header("Location: sign.php?error=Sai tài khoản hoặc mật khẩu!");
		        exit();
			}
		}else{
			header("Location: sign.php?error=Sai tài khoản hoặc mật khẩu22!");
	        exit();
		}
	}
	
}else{
	header("Location: sign.php");
	exit();
}