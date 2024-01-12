<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly cong doan vien</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

   * {
      margin:0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
      font-weight: bold;
    }

  body {

    background-size: cover;
    background-attachment: fixed;
  }

  .center {
    margin: auto;
    width: 40%;
    padding: 73px;
  }

  .navbar-brand {
    color:white;
  }

  #div_index{
    display: flex;
    justify-content: space-between;
    max-width: 1400px;
    width:80%;
  }
  
  </style>
  <!--css code-->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
  <div class="container-fluid" id="div_index">
    <a class="navbar-brand">
      <img src="hinh/logo.jpg" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-grand" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="home.php">Trang chủ</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="tintuc.php">Thông báo</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="tintuc.php">Tin tức</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="sign.php">Liên hệ</a>
        </li> 
      </ul>
      <span class="nav-re">
        <a class="nav-link" href="#"></a>
      </span>
    </div>
  </div>
</nav>
    <script src="giao_dien_web/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 