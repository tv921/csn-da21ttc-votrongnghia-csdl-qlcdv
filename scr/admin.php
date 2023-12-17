<?php
    include 'index.php';
    include_once 'connect.php';
    session_start();

    if (isset($_SESSION['USERS_ID']) && isset($_SESSION['ACCOUNT'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Admin</title>
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
            max-width: 1000px;
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
    <main>
        
        <div class="news-container">
            <h2>Thông tin CDV</h2>
    <?php
        $sql= "SELECT * FROM tb_thongtincdv;";  
        $result = mysqli_query($conn, $sql);      
        $resultCheck = mysqli_num_rows($result);
         echo '<table style="width:100%" border="1" cellspacing="5px" cellpadding="5px "> 
            <tr> 
                <td> <font face="Arial">Ma CDV &nbsp;</font> </td> 
                <td> <font face="Arial">Tên CDV &nbsp;</font> </td> 
                <td> <font face="Arial">Ngày sinh</font> </td> 
            </tr>';   
        if($resultCheck > 0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $fieldname1 = $row['MACDV'];
                $fieldname2 = $row['TENCVD'];
                $fieldname3 = $row['NGAYSINH'];
                echo '<tr>
                    <td>'.$fieldname1." ".'</td>
                    <td>'.$fieldname2." ".'</td> 
                    <td>'.$fieldname3." ".'</td><br> 
                </tr>';
            } 
        }
    ?>
        </div>
        <form action="logout.php" method="post"> 
        <input type="submit" value="Logout"> 
    </form>
    </main>  
</body>
</html>

<?php 
}else{
     header("Location: home1.php");
     exit();
}
 ?>