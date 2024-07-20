<?php
// $tt = $_POST['order'];
// $id_dathang = $_POST['id_dathang'];

// echo $tt;
// if($trangthai == "Chờ xác nhận"){
// echo '1';
// } else if($trangthai == "Đã xác nhận"){
//     echo '2';
// }else if($trangthai == "Đang vận chuyển"){
//     echo '3';
// }else{
//     echo '4';
// }

// Kiểm tra xem có dữ liệu được gửi từ form hay không

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Lấy dữ liệu từ phần tử select có name là "order"
//     $selectedOption = $_POST['order'];

//     // Hiển thị dữ liệu đã chọn
//     echo "Option được chọn là: " . $selectedOption;



// }

// echo '
// <script>
// function confirmCancel() {
//   var confirmCancel = confirm("Bạn có chắc chắn hủy đơn hàng?");
//   if (confirmCancel) {
//     // Thực hiện hành động hủy đơn hàng ở đây
//   } else {
//     // Không thực hiện hành động gì đó khi người dùng không muốn hủy đơn hàng
//   }
// }
// </script>
// ';


// echo '<script>
// alert("Vui lòng đăng nhập");
// </script>';





// if(isset($_POST['addToCart'])) {

//   if($user) {
//       $id = $_POST['id_sanpham'];
//       $name = $_POST['name'];
//       $img = $_POST['images'];
//       $price = $_POST['gia'];
//       $soluong = $_POST['quantity'];
//       $thanhtien = $price * $soluong;
      
//       // $itemExists = false;

//       $index = count($_SESSION['mycart']);
      
//       if($_SESSION['mycart']){
//           foreach($_SESSION['mycart'] as $key => $value) {
//               if($value['id_sanpham'] == $id) {
//                   $_SESSION['mycart'][$key]['quantity'] += $soluong;
//                   break;
//               } else {
//                   $_SESSION['mycart'][$index]=$_POST;
//                   $_SESSION['mycart'][$index]['thanhtien']=$thanhtien;
//                   break;
//               }
//           }
//       }else{
//           $_SESSION['mycart'][$index]=$_POST;
//           $_SESSION['mycart'][$index]['thanhtien']=$thanhtien;
//       }
      

      // foreach ($_SESSION['mycart'] as &$cartItem) {
      //     if ($cartItem[0] == $id) {
      //         // Cập nhật số lượng và tổng giá của sản phẩm đã tồn tại
      //         $cartItem[4] += $soluong;
      //         $itemExists = true;
      //         break;
      //     }
      // }

      // if (!$itemExists) {
      //     // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm nó vào giỏ
      //     $sanphamadd = [$id, $name, $img, $price, $soluong, $thanhtien];
      //     $_SESSION['mycart'][] = $sanphamadd;
      // }

//       echo '<script>alert("Thêm vào giỏ hàng thành công")</script>';
//       echo '<script>window.location.href="index.php?act=chi-tiet-san-pham&giay='.$_POST['id_sanpham'].'"</script>';
//   } else {
//       echo '<script>alert("Vui lòng đăng nhập!")</script>';
//       echo '<script>window.location.href="index.php"</script>';
//   }}


?>
<form action="view/sulythanhtoan.php" method="post">
    <input type="submit" name = "payUrl">
</form>


