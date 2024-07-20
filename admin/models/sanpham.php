<?php
// thêm danh  mục 
function insert_sanpham($tensp, $giasp, $hinh, $motasp, $iddm)
{
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`,`iddm`) VALUES ('$tensp','$giasp','$hinh','$motasp','$iddm')";
    pdo_execute($sql);
}

function insert_giohang($idsp,$id_user, $name, $hinh, $price, $pricesale, $mota, $soluong, $Size)
{
    $sql = "INSERT INTO `giohang`(`idsp`,`id_user`, `name`, `hinh`, `price`, `pricesale`, `mota`, `soluong`, `Size`) VALUES ('$idsp','$id_user', '$name', '$hinh', '$price', '$pricesale', '$mota', '$soluong', '$Size')";
    pdo_execute($sql);
}




function loadall_giohang($id)
{
    $sql = "select * from giohang  where id_user=" .$id;
    $listgio = pdo_query($sql);
    return $listgio;
}

function loadone_giohangchon($id)
{
    $sql = "select * from giohang where id='".$id."'";
    $listgiohang = pdo_query_one($sql);
    return $listgiohang;
}

function loadone_giohangls($id)
{
    $sql = "select * from giohang where id=".$id;
    $list = pdo_query_one($sql);
    return $list;
}

function delete_giohang($id)
{
    $sql = "delete from giohang where id=" . $id;
    pdo_execute($sql);
}

// xóa danh mục 
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
//Hiển thị danh sách top 10
function loadall_sanpham_top10()
{
    $sql = "select *from sanpham  where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// hiển thị sản phẩm
function loadall_sanpham_home()
{
    $sql = "select *from sanpham  where 1 order by id desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanphamgrid()
{
    $sql = "select *from sanpham  where 1";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// hiện thị tất cả danh mục 
function loadall_sanpham($iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($iddm > 0) {
        $sql .= " and iddm=' " . $iddm . "'";
    }

    $sql .= " order by id desc";
    // nối chuỗi trong sql là .= nháy đôi cách khoảng 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// hiển thị 1 danh mục 
function loadone_sanpham($id)
{
    $sql = "select *from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
//
// hiện thị tên danh mục
function load_ten_dm($iddm)
{
    if($iddm>0){
        $sql = "select *from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
   
}
// sản phẩm cùng loại
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select *from sanpham where iddm=".$iddm." AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// cập nhật danh mục 
function  update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $hinh)
{
    if (!$hinh == "") {

        $sql = "UPDATE `sanpham` SET `iddm`='$iddm' ,`name` = '$tensp', `price` = '$giasp', `img` = '$hinh', `mota` = '$motasp' WHERE `id` = $id";
       
    } else {
        $sql = "UPDATE `sanpham` SET `iddm`='$iddm' , `name` = '$tensp', `price` = '$giasp', `mota` = '$motasp' WHERE `id` = $id";
       
    }
    
    pdo_execute($sql);
}



function loadsize_sanpham($id)
{
    $sql = "select * from product_sizes where idsp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}