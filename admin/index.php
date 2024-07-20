<?php
include "models/pdo.php";
include "view/layout/header.php";
include "models/danhmuc.php";
include "models/sanpham.php";
include "models/taikhoan.php";
include "models/binhluan.php";
include "models/order.php";
include "models/thongke.php";
include "models/dathang.php";



// Controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // Code cho danh mục
        case 'adddm':
            // kiểm tra xem người dùng có click vào nút add hay không 
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = pdo_query("SELECT * FROM danhmuc ORDER BY id DESC");
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        // Code cho sản phẩm
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $target_dir = "../upload/";
                $hinh = $_FILES['hinh']['name'];
                echo $hinh;
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    echo"bạn up thanh cong";
                } else {echo "ban up chua thanh cong";}
                insert_sanpham($tensp, $giasp, $hinh, $motasp, $iddm);
                $thongbao="Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $target_dir = "../upload/";
                $hinh = $_FILES['hinh']['name'];
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // Upload thành công
                } else {
                    // Upload thất bại
                }

                update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/list.php";
            break; 
            
        case 'dsbl':
             $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
             break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = pdo_query("SELECT * FROM binhluan ORDER BY id DESC");
            include "binhluan/list.php";
            break;    

        case 'listorder':
            if(isset($_POST['order'])){
                $tt = $_POST['order'];
                $id_dathang = $_POST['id_dathang'];
                update_order($tt,$id_dathang);
                update_lsdh($tt, $id_dathang);
            }
                $listorder = loadall_order(); 
                include('order/listorder.php');
                break;
        case 'chitietdh':
            // if(isset($_POST['order'])){
            //     $tt = $_POST['order'];
            //     $id_dathang = $_POST['id_dathang'];
            //     update_order($tt,$id_dathang);
            //     update_lsdh($tt, $id_dathang);
            // }
            //     $listorder = loadall_order(); 
            if(isset($_GET['idls']) && $_GET['idls'] > 0){
                $listlsdh = load_lsdathang($_GET['idls']);
                $dh = loadone_ttdon($_GET['idls']);
                extract($dh);
                if($trangthai == 3){
                    update_ttdon($_GET['idls'] ,1);
                } else {
                    update_ttdon($_GET['idls'],0); 
                }
                if($trangthaidon == 1){
                    $ttd = "Đã Thanh Toán"; 
                } else {
                    $ttd = "Chưa Thanh Toán";
                }
              }
                include('order/order.php');
                break;
        case 'dskh':

            $listtaikhoan = loadall_taikhoan("", 0);
            include "tkhoan/list.php";
            break;

         
        case "thongke":
                $dsthongke = load_thongke_sanpham_danhmuc();
                include "thongke/list.php";
                break;

        case "bieudo":
                $dsthongke = load_thongke_sanpham_danhmuc();
                include "thongke/bieudo.php";
                break;
        case "bieudo1":
                $dsthongke = load_thongke_sanpham_danhmuc();
                $thang = load_thang(12);
                $dt = 0;
                foreach ($thang as $th) {
                    extract($th);
                    $dt += $tongtien;
                }
                include "thongke/bieudo1.php";
                break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan("", 0);
            include "tkhoan/list.php";
            break;

        default:
            include "./view/layout/home.php";
            break;
    }
} else {
    include "./view/layout/home.php";
}

include "./view/layout/footer.php";
?>