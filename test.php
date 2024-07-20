<?php

// $i = [1,3,5,6];
// $s = 0;
// foreach($i as $a){
//     $s+=$a;
   


// }
// echo $s;


// include "admin/models/taikhoan.php";
//   include "admin/models/sanpham.php";
//   include "admin/models/pdo.php";
//   include "admin/models/danhmuc.php";
//   include "admin/models/binhluan.php";
//   include "admin/models/dathang.php";
//   include "global.php";
// $ttg = 0;
// $gg = 0;
// $tt = 0;
// $idspf = $_POST['idspf'];
// foreach($idspf as $idsp) {
// $spchon = loadone_giohangchon($idsp, 1);
// extract($spchon);
// $ttg += ($price*$soluong);
// $gg += (($price-$pricesale)*$soluong);
// $tt += ($pricesale*$soluong);
// }
// $ttiengoc = $ttg;
// $giagiam = $gg;
// $ttien = $tt;
// echo $ttiengoc.'<br>';

// echo $giagiam.'<br>';

// echo $ttien;


//             $name = $_POST['name'];
//             $addressmain = $_POST['addressmain'];
//             $ngaymua = date("Y-m-d H:i:s");
//             $trangthai = 'Chờ xác nhận';


// echo $name ."<br>";
// echo $addressmain ."<br>";
// echo $ngaymua ."<br>";
// echo $trangthai ."<br>";
// insert_dathang(1, $name, '757471t34', $addressmain, $ngaymua, $trangthai);



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// echo 'thanhcong';

// } else echo 'ko thành công';

                          // echo'
                          // <form action="test2.php" method="post">
                          // <select name="order">
                          //       <option value="Chờ xác nhận">Chưa xác nhận</option>
                          //       <option value="Đã xác nhận">Xác nhận</option>
                          //       <option value="Đang vận chuyển">Đang vận chuyển</option>
                          //       <option value="Hoàn thành">Hoàn thành</option>
                          //   </select>
                          //   <input type="submit" value="Update">
                            
                          //   </form>
                          // ';

                          
                            
?>
<!-- file index.php -->
<!DOCTYPE html>
<html>
<body>
<script>
    function disableOption() {
      var selectElement = document.getElementById("order");
      var selectedOption = selectElement.value;
      if (selectedOption === "Hoàn thành") {
        for (var i = 0; i < selectElement.options.length; i++) {
          if (selectElement.options[i].value !== selectedOption) {
            selectElement.options[i].disabled = true;
          }
        }
      }
    }
  </script>
<form method="post" action="test2.php">
  <select name="order">
    <option value="Chờ xác nhận">Chưa xác nhận</option>
    <option value="Đã xác nhận">Xác nhận</option>
    <option value="Đang vận chuyển">Đang vận chuyển</option>
    <option value="Hoàn thành">Hoàn thành</option>
  </select>
  <input type="submit" value="Submit">
</form>

</body>
</html>
