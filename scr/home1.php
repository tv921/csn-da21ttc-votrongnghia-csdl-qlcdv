<?php
    include 'index.php';
    include_once 'connect.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        main {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-container {
            width: 65%;
        }

        .sidebar {
            width: 30%;
            background-color: #eee;
            padding: 10px;
        }

        .bottom{
            display: justify;
            justify-content: space-between;
            margin: 20px auto;
            padding: 20px;
            background-color: skyblue;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: auto;
            color: black;
        }

        .news-item {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .news-item h2 {
            color: #333;
        }

        .news-item p {
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <img src="hinh/hinh.jpg" alt="">
    </header>

    <main>
        <div class="news-container">
            <h1>Tin tức</h1>
        <?php
        $sql= "SELECT * FROM tin_tuc;";  
        $result = mysqli_query($conn, $sql);      
        $resultCheck = mysqli_num_rows($result);
            while($row=mysqli_fetch_assoc($result))
            {
                $fieldname1 = $row['tinTuc'];
                if($row['MaTinTuc'] === '1')
                { 
                    echo '
                    <table>
                    <th>
                    <img src="hinh/logo.jpg" alt="" height="90px" width="90px"> &nbsp; &nbsp;
                    </th>
                    <td>
                    <p><a href="tintuc1.php" style="font-size: 20px;text-decoration: none; color: inherit;">'.$fieldname1.'</a></p><br>
                    </td>
                    </table>';
                }
                if($row['MaTinTuc'] === '2')
                {
                    echo '
                    <table>
                    <th>
                    <img src="hinh/logo.jpg" alt="" height="90px" width="90px"> &nbsp; &nbsp;
                    </th>
                    <td>
                    <p><a href="tintuc2.php" style="font-size: 20px;text-decoration: none; color: inherit;">'.$fieldname1.'</a></p><br>
                    </td>
                    </table>';
                }
                if($row['MaTinTuc'] === '3')
                {
                    echo '
                    <table>
                    <th>
                    <img src="hinh/logo.jpg" alt="" height="90px" width="90px"> &nbsp; &nbsp;
                    </th>
                    <td>
                    <p><a href="tintuc3.php" style="font-size: 20px;text-decoration: none; color: inherit;">'.$fieldname1.'</a></p><br>
                    </td>
                    </table>';
                }         
            } 
        ?>

        </div>

        <div class="sidebar">
            <h2>Đăng nhập</h2>
            <form method="post" action="login.php">
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
       
    </main>

        <div class="bottom">
            <p>ĐOÀN VIÊN CÔNG ĐOÀN</p>
            <p>Số điện thoại: (024)09123456</p>
            <p>Email: myemail@gmail.com</p>
        </div>
</body>
</html>

