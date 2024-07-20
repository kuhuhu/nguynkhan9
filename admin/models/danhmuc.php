<?php
// thêm danh  mục 
function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
// xóa danh mục 
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
// hiện thị tất cả danh mục 
function loadall_danhmuc(){
$sql="select *from danhmuc order by id desc";
$listdanhmuc=pdo_query($sql);
return $listdanhmuc;
}
// hiển thị 1 danh mục 
function loadone_danhmuc($id){
    $sql="select *from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
// cập nhật danh mục 
function update_danhmuc($id,$tenloai){
    $sql="UPDATE `danhmuc` SET `name` = '$tenloai' WHERE `danhmuc`.`id` = $id"; 
    pdo_execute($sql);
}
?>