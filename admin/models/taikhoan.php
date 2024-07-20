<?php

function delete_taikhoan($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
}

function delete_diachi($id){
    $sql="delete from dia_chi where id=".$id;
    pdo_execute($sql);
}

function loadall_diachi()
{
    $sql = "select *from dia_chi  where 1 ";
    $diachi = pdo_query($sql);
    return $diachi;
}
function loadone_diachi($id_user, $address)
{
    $sql = "select name from dia_chi  where id_user='" . $id_user."' AND addressother='".$address   ."'";
    $diachi = pdo_query_one($sql);
    return $diachi;
}

function insert_taikhoan($user, $pass, $email, $address, $tel)
{
    $sql = "INSERT INTO `taikhoan`( `user`, `pass`,`email`,`address`,`tel`) VALUES ('$user','$pass','$email','$address','$tel')";
    pdo_execute($sql);
}

function insert_diachi($id_user,$name, $tel, $email, $addressother)
{
    $sql = "INSERT INTO `dia_chi`( `id_user`,`name`, `tel`,`email`,`addressother`) VALUES ('$id_user','$name','$tel','$email','$addressother')";
    pdo_execute($sql);
}

function loadall_taikhoan(){
$sql="select *from taikhoan order by id desc";
$listtaikhoan=pdo_query($sql);
return $listtaikhoan;
}

function loadone_taikhoan($id){
    $sql="select * from taikhoan where id=".$id;
    $taikhoan= pdo_query_one($sql);
    return $taikhoan;
    }


function checkuser($user,$pass){
    $sql = "select * from taikhoan where user='" . $user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkiduser($id){
    $sql = "SELECT *
    FROM dia_chi
    WHERE id_user = '".$id."'
    AND EXISTS (SELECT * FROM taikhoan WHERE taikhoan.id = dia_chi.id_user)";
    $sp = pdo_query($sql);
    return $sp;
}

function checkemail($email){
    $sql = "select * from taikhoan where email='" . $email."'";
    $sp = pdo_query_one($sql);
    return $sp;
    
}
function  update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="UPDATE `taikhoan` SET `user` = '$user', `pass` = '$pass', `email` = '$email', `address` = '$address  ', `tel` = '$tel' WHERE `taikhoan`.`id` = {$id}";
    pdo_execute($sql);

}
?>