
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .binhluan2 table{
      
      width:95%;
      margin-left:5%;
      
    }
    .binhluan2 table td: nth_child(1){
      width: 50%;
    }
    .binhluan2 table td: nth_child(2){
      width: 20%;
    }
    .binhluan2 table td: nth_child(3){
      width: 25%;
    }
  </style>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="row mb">
  <div class="boxtitle">Bình luận</div>
  <div class="boxcontent2 binhluan2">
    <ul>
      <table>
      <?php
      // echo "nội dung bình luận ở đây: ".$idpro;
      foreach ($dsbl as $bl) {
        extract($bl);
        echo '<div class="d-flex flex-column flex-lg-row gap-3">
        <div class=""><span class="badge bg-green rounded-0">5<i class="bi bi-star-fill ms-1"></i></span></div>
        <div class="flex-grow-1">
          <p class="mb-2">'.$noidung.'</p>
          <div class="review-img">
            <img src="assets/images/featured-products/05.webp" alt="" width="70">
          </div>
          <div class="d-flex flex-column flex-sm-row gap-3 mt-3">
            <div class="hstack flex-grow-1 gap-3">
              <p class="mb-0">Jhon Deo</p>
              <div class="vr"></div>
              <div class="date-posted">'.$ngaybinhluan.'</div>
            </div>
          </div>
        </div>
      </div>
      <hr>';
       }
       ?>
      </table>
    </ul>
  </div>
  <div class="boxFooter searbox">
  <form action="index.php?act=chitietsp&id=<?php echo $_GET['id']?>" method="post"> 
      <input type="text" name="noidung">
      <input type="submit" name="guibinhluan" id="" value="Gửi bình luận">
    </form>
  </div>

</div>
</body>
</html>

