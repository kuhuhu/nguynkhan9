<?php
function insert_dathang($id_user, $name, $tongtien, $address, $ngaymua, $trangthai, $trangthaidon, $loaithanhtoan)
{
    $sql = "INSERT INTO `dathang`( `id_user`, `name`,`tongtien`,`address`,`ngaymua`,`trangthai`,`trangthaidon`,`loaithanhtoan`) VALUES ('$id_user','$name','$tongtien','$address','$ngaymua','$trangthai','$trangthaidon','$loaithanhtoan')";
    pdo_execute($sql);
}

function loadall_dathang($id)
{
    $sql = "select * from dathang  where id_user=" .$id;
    $listdathang = pdo_query($sql);
    return $listdathang;
}

function loadone_ttdon($id)
{
    $sql = "select trangthaidon, trangthai from dathang  where id=" .$id;
    $listdathang = pdo_query_one($sql);
    return $listdathang;
}

function loadtt_dathang()
{
    $sql = "SELECT id,trangthai 
    FROM dathang
    WHERE id = (SELECT MAX(id) FROM dathang)";
    $listdathang = pdo_query_one($sql);
    return $listdathang;
}


function insert_lsdathang($idsp, $iddh, $name, $price, $soluong, $hinh, $size, $pricesale, $trangthai)
{
    $sql = "INSERT INTO `chitietdonhang`(`idsp`,`iddh`, `name`, `price`, `soluong`, `hinh`, `size`, `pricesale`, `trangthai`) VALUES ('$idsp','$iddh', '$name', '$price', '$soluong', '$hinh', '$size', '$pricesale', '$trangthai')";
    pdo_execute($sql);
}

function load_lsdathang($id)
{
    $sql = "select * from chitietdonhang  where iddh =" .$id;
    $listlsdathang = pdo_query($sql);
    return $listlsdathang;
}

function loadone_iddathang()
{
    $sql = "SELECT MAX(id) FROM dathang";
    $iddathang = pdo_query_one($sql);
    return $iddathang;
}

function update_ttdon($id,$trangthaidon){
    $sql="UPDATE `dathang` SET `trangthaidon` = '$trangthaidon' WHERE id =".$id; 
    pdo_execute($sql);
}

function update_lsorder($id,$trangthai){
    $sql="UPDATE `dathang` SET `trangthai` = '$trangthai' WHERE id =".$id; 
    pdo_execute($sql);
}
function update_ctorder($id,$trangthai){
    $sql="UPDATE `chitietdonhang` SET `trangthai` = '$trangthai' WHERE iddh =".$id; 
    pdo_execute($sql);
}

function load_thang($thang)
{
    $sql = "SELECT * FROM dathang WHERE MONTH(ngaymua) = ".$thang ;
    $listlsdathang = pdo_query($sql);
    return $listlsdathang;
}

?>