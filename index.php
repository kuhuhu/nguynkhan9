  <?php
  session_start();
  include "admin/models/taikhoan.php";
  include "admin/models/sanpham.php";
  include "admin/models/pdo.php";
  include "admin/models/danhmuc.php";
  include "admin/models/binhluan.php";
  include "admin/models/dathang.php";
  include "admin/models/thanhtoanmomo.php";
  include "global.php";
  if(!isset($_SESSION['user'])){
    $_SESSION['user'] = [];
  }
  if(!isset($_SESSION['ttien'])){
    $_SESSION['ttien'] = [];
    $_SESSION['giagiam'] = [];
    $_SESSION['ttiengoc'] = [];
    $_SESSION['idspf'] = [];
  } else {
    $ttien = $_SESSION['ttien'];
    $giagiam = $_SESSION['giagiam'];
    $ttiengoc = $_SESSION['ttiengoc'];
    $idspf = $_SESSION['idspf'];
  }

  $spnb = loadall_sanpham_top10();
  $spmn = loadall_sanpham_home();
  $danhmuc = loadall_danhmuc();
  $diachi = loadall_diachi();
  include "view/header.php";


  if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    
    switch ($act) {
      
      
      case 'dangky':
        if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            insert_taikhoan($user,$pass,$email, $address, $tel);
            $check = 0;
        } else {
          $check = 1;
        }
        include "view/login/dangky.php";
        break;
      case 'dangxuat':
        $_SESSION['user'] = [];
        echo'
        <script>alert("Bạn đã Đăng Xuất Thành Công!")</script>
        <script>window.location.href="index.php?act=account"</script>
        ';
        break;

        case 'dangnhap':
          $check = 0;
          if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkuser = checkuser($user, $pass);
            if (!is_array($checkuser)) {
              $check = 1;
            } else {
              $_SESSION['user'] = $checkuser;
              echo "<script>window.location = 'index.php';</script>";
            }
        }
          include "view/login/dangnhap.php";
          break;


        case 'profile':
          extract($_SESSION['user']);
          $tk = loadone_taikhoan($id);
          include "view/profile.php";
          break;


        case 'account':
          extract($_SESSION['user']);
          include "view/account.php";
          break;

        case 'listorder':
          extract($_SESSION['user']);
          $listdathang = loadall_dathang($id);
          
          include "view/order/donhang.php";
          break;
        case 'deleteorder':
          if(isset($_GET['id']) && $_GET['id'] > 0){
            update_lsorder($_GET['id'],4);
            update_ctorder($_GET['id'],4);

          }
          $listdathang = loadall_dathang($id);  
          include "view/order/donhang.php";
          break;


          case 'lsorder':
            extract($_SESSION['user']);
            if(isset($_GET['idls']) && $_GET['idls'] > 0){
              $listlsdathang = load_lsdathang($_GET['idls']);
            }
            include "view/cart/chitietdathang.php";
            break;

          case 'allsp':
            $listsp = loadall_sanphamgrid();
            include "view/allsanpham.php";
            break;
       

        case 'htthanhtoan':
          if(isset($_POST['thanhtoan']) && $_POST['thanhtoan']){
            extract($_SESSION['user']);
            $name = $_POST['name'];
            $addressmain = $_POST['addressmain'];
            $ngaymua = date("Y-m-d H:i:s");
            $trangthai = 0;
            $trangthaidon = 0;
            $loaithanhtoan = 0;
            insert_dathang($id, $name, $ttien, $addressmain, $ngaymua, $trangthai, $trangthaidon, $loaithanhtoan);
          
            foreach ($idspf as $idgh) {
               $gh = loadone_giohangchon($idgh);
               extract($gh);
               $sl = loadtt_dathang(); 
               extract($sl);
              insert_lsdathang($idgh, $id, $name, $price, $soluong, $hinh, $size, $pricesale, $trangthai);
              delete_giohang($idgh);
            }
        
            include "hahaha.php";
            }       
            break;
          
     
      
      
            case 'thanhtoan':
          extract($_SESSION['user']);
          $addresstk = loadone_taikhoan($id);
          extract($addresstk);
          $addressdc = $_POST['flexRadioDefault'];
          $checkdc = loadone_diachi($id, $addressdc);
          $tk = loadone_taikhoan($id);
          $addressmain = "";
            if($address == $addressdc){
              extract($tk);
              // insert_dathang($id, $user, $ttien, $address, $ngaymua, $trangthai);
              $name = $user;
              $addressmain = $address;
            } else {
              extract($checkdc);
              // insert_dathang($id, $name, $ttien, $addressdc, $ngaymua, $trangthai);
              $addressmain = $addressdc;
            }
          
          include "view/bill/thanhtoan.php";
          break;
        case 'deladdress':
          if (isset($_GET['idadr']) && $_GET['idadr'] > 0) {
            delete_diachi($_GET['idadr']);
          }
          echo "<script>window.location = 'index.php?act=address';</script>";
          break;
        case 'address':
          
          if (isset($_POST['order']) && ($_POST['order'])) {
            $ttg =0;
            $gg = 0;
            $tt = 0;
            $idspf = $_POST['idspf'];
            $_SESSION['idspf'] = $idspf;
            foreach($idspf as $idsp) {
            extract($_SESSION['user']);
            $spchon = loadone_giohangchon($idsp, $id);
            extract($spchon);
            $ttg += ($price*$soluong);
            $gg += (($price-$pricesale)*$soluong);
            $tt += ($pricesale*$soluong);
            }
            $ttiengoc = $ttg;
            $giagiam = $gg;
            $ttien = $tt;
            $_SESSION['ttiengoc'] = $ttiengoc;
            $_SESSION['giagiam'] = $giagiam; 
            $_SESSION['ttien'] = $ttien;

        }
        
        
        extract($_SESSION['user']);
          $tk = loadone_taikhoan($id);
          $check = checkiduser($id);
          
          if (isset($_POST['Continue']) && ($_POST['Continue'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $name = $_POST['name'];
              $address = $_POST['address'];
              insert_diachi($id, $name, $tel, $email, $address);
          }
          include "view/bill/address.php";
          break;

        case 'bill':
          
          include "view/bill/bill.php";
          break;


        case 'wishlist':
          
          include "view/wishlist/wishlist.php";
          break;


        case 'delcart':
          if (isset($_GET['idcart']) && $_GET['idcart'] > 0) {
            delete_giohang($_GET['idcart']);
        } 
        echo "<script>window.location = 'index.php?act=cart';</script>";
        break;        


          case 'cart':
            if ($_SESSION['user']==[]) {
              echo '
              <script>alert("Vui lòng đăng nhập!")</script>
              <script>window.location.href="index.php?act=dangnhap"</script>
              ';
            }
            extract($_SESSION['user']);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = $_POST['name'];
              $hinh = $_POST['hinh'];
              $price = $_POST['price'];
              $pricesale = $_POST['pricesale'];
              $mota = $_POST['mota'];
              $soluong = $_POST['soluong'];
              $Size = $_POST['selectedSize'];
              $idsp = $_POST['idsp'];
              insert_giohang($idsp,$id, $name, $hinh, $price, $pricesale, $mota, $soluong,$Size);
            }
            $giohang = loadall_giohang($id);
            include "view/cart/cart.php";
            break;


        case "chitietsp":
          extract($_SESSION['user']);
          $idpro = $_GET['id'];
          $dsbl=loadall_binhluancl($idpro);
          if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $ngaybinhluan = date("Y-m-d H:i:s");
            insert_binhluan($noidung, $id, $idpro, $ngaybinhluan);
            echo "<script>window.location = 'index.php?chitietsp&id=' . \$_GET['id'];</script>";
          }
          if(isset($_GET['id']) && $_GET['id'] > 0){
            $sanpham = loadone_sanpham($_GET['id']);
            $sanphamcl = load_sanpham_cungloai($_GET['id'], $sanpham['iddm']);
            $size = loadsize_sanpham($_GET['id']);
            $chk = "";
            include "view/chitietsp.php";
        }else{
            include "view/home.php";            
        }
        break;
        case 'sanpham':
          if (isset($_POST['kyw']) && ($_POST['kyw'] > 0)) {
              $kyw = $_POST['kyw'];
          } else {
              $kyw = "";
          }
          if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
              $iddm = $_GET['iddm'];
          } else {
              $iddm = 0;
          }
          $dssp = loadall_sanpham($iddm);
          include "view/theloai.php";
          break;
        
  
        
    }


  } else {
    include "view/banner.php";
    include "view/spnoibat.php";
    include "view/spmoinhat.php";
    include "view/home.php";  
  }
  include "view/footer.php";
  include "view/startcart.php";
 

 
  
  ?>

         
  <!--end page content-->





  