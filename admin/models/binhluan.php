<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="INSERT INTO `binhluan` (`noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binhluan where 1";
    //idpro='".$idpro."' order by id desc";
    if($idpro>0)  $sql.= "AND idpro='".$idpro."'";
    $sql.= " order by id desc ";
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadall_binhluancl($idpro){
    $sql = "SELECT * FROM binhluan WHERE idpro =".$idpro; 
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadone_binhluan($id){
    $sql = "SELECT * FROM binhluan WHERE id =".$id; 
    $bl = pdo_query_one($sql);
    return $bl;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE id =".$id; 
    pdo_execute($sql);
}
function update_binhluan($id,$noidung){
    $sql="UPDATE binhluan SET noidung='".$noidung."' where id=".$id;
    pdo_execute($sql);
}
?>