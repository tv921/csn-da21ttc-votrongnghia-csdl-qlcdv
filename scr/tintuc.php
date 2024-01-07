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

        .news-container {
            max-width: 1400px;
            width: 75%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .bottom{
            display: justify;
            justify-content: space-between;
            margin: 10px auto;
            padding: 10px;
            background-color: rgb(48,48,48);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: auto;
            color: white;
            margin-bottom: 0;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;  
        }
    </style>
</head>
<body>

    <header>
    </header>

    <div class="news-container">
    <?php
        $sql= "SELECT * FROM tb_tintuc;";  
        $result = mysqli_query($conn, $sql);      
        $resultCheck = mysqli_num_rows($result);
            while($row=mysqli_fetch_assoc($result))
            {
                $fieldname1 = $row['TIEUDE'];
                if($row['MATINTUC'] === 'tt1')
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
                if($row['MATINTUC'] === 'tt2')
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
                if($row['MATINTUC'] === 'tt3')
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
    <footer>
          <div class="bottom">
            <p>CÔNG ĐOÀN VIÊN</p>
            <p>Số điện thoại: (024)09123456</p>
            <p>Email: myemail@gmail.com</p>
        </div>
    </footer>  
</body>
</html>
