<?php
function insert_order($id_user, $name, $tongtien, $address, $ngaymua, $trangthai)
{
    $sql = "INSERT INTO `dathang` (`id_user`, `name`, `tongtien`, `address`, `ngaymua`, `trangthai`) VALUES ('$id_user', '$name', '$tongtien', '$address', '$ngaymua', '$trangthai')";
    pdo_query($sql);
}

function loadall_order()
{
    $sql = "select *from dathang order by id desc";
    $listorder = pdo_query($sql);
    return $listorder;
}

function update_order($trangthai, $id)
{
    $sql="UPDATE `dathang` SET `trangthai` = '$trangthai' WHERE `id` = '$id'"; 
    pdo_execute($sql);
}
function update_lsdh($trangthai, $id)
{
    $sql="UPDATE `chitietdonhang` SET `trangthai` = '$trangthai' WHERE `iddh` = '$id'"; 
    pdo_execute($sql);
}
?>