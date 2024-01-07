<?php
    include 'index.php';
    include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        } 


.news-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 20px auto;
}

 .news-item {
  width: auto;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 10px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding-left: 20%;
  padding-right: 20%;
}

.news-item img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 10px;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 1em;
}

    </style>
</head>
<body> 
   <div class="new-container">
    <div class="news-item"> 
        
    <h2>Hội thi tiếng hát karaoke năm 2023 mừng Ngày Phụ nữ Việt Nam 20/10</h2>
    <img src="hinh/tvu.jpg" alt="">
    <p>(TVU) – Từ ngày 16 -18/10/2023, Công đoàn cơ sở Trường Đại học Trà Vinh tổ chức Hội thi tiếng hát karaoke 2023 kỷ niệm 93 năm ngày Phụ nữ Việt Nam (20/10/1930 – 20/10/2023), chào mừng thành công Đại hội Công đoàn tỉnh Trà Vinh lần thứ XI, nhiệm kỳ 2023-2028. Hội thi thu hút gần 60 thí sinh đến từ các công đoàn bộ phận, tổ công đoàn tham gia</p>
    <p>Phát biểu khai mạc Hội thi, Ông Nguyễn Nhật Thanh, Chủ tịch Công đoàn cơ sở Trường Đại học Trà Vinh gửi lời chúc mừng ngày Phụ nữ Việt Nam 20/10 đến viên chức, công đoàn viên, người lao động nữ đang công tác tại Trường Đại học Trà Vinh. Theo ông, hội thi là sân chơi gắn kết giữa các tổ chức công đoàn với nhau tạo môi trường thân thiện, làm việc thoải mái, lành mạnh với câu khẩu hiệu “Mỗi ngày đến trường là một niềm vui”.</p>

    <p>Các tiết mục dự thi gồm tân nhạc và cổ nhạc với nội dung ca ngợi Đảng, Bác Hồ kính yêu, truyền thống cách mạng, tình yêu quê hương đất nước, ca ngợi người phụ nữ Việt Nam, người lao động trong lao động và sản xuất, ca ngợi quê hương Trà Vinh,… Hội thi diễn ra với vòng thi sơ khảo và chung kết. Ban Giám khảo lựa chọn các tiết mục hay nhất trao giải tại đêm chung kết gồm giải Nhất, Nhì, Ba và Khuyến khích cho các thí sinh xuất sắc trong hội thi.‎</p>

    </div>
   </div>
     <footer>
    <p></p>
  </footer> 
</body>
</html>