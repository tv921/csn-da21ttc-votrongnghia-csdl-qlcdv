<?php
    include 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="sign.css">
    <title>dang nhap</title>    
</head>
<body>
    <style>
        body{
            color:black;
        }
    </style>
<div class="container-fluid">  
    <form class="center" method="post" action="login.php">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error" id="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
</body>
</html>