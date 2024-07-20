<div class="row">
            <div class="row frmtitle"><h1>Danh sách Tài Khoản </h1></div>
            <div class="row fromcontent">
              <div class="row mb frmdsloai table">
                <table>
                    <tr>
                        <th></th>
                        <th>mã tk</th>
                        <th>Tên người dùng </th>
                        <th>Mật khẩu</th>
                        <th>email</th>
                        <th>address</th>
                        <th>tel</th>
                        <th>role</th>
                        <th></th>
                    </tr>
<?php
foreach ($listtaikhoan as $taikhoan){
  extract($taikhoan);
//   $suatk="index.php?act=suatk&id=".$id;
  $xoatk="index.php?act=xoatk&id=".$id;
  echo '<tr>
  <td><input type="checkbox" name="" id=""></td>
  <td>'.$id.'</td>
  <td>'.$user.'</td>
  <td>'.$pass.'</td>
  <td>'.$email.'</td>
  <td>'.$address.'</td>
  <td>'.$tel.'</td>
  <td>'.$role.'</td>
  <td><a href="'.$xoatk.'"><input type="button" value="xóa"></a></td>
</tr>';
}
?>
                    
                </table>
              </div>
            </div>
           
          