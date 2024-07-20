<div class="row">
  <div class="row frmtitle mb">
    <h1>Danh sách sản phẩm </h1>
  </div>

  <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" id="">
        <select name="iddm" >
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract(($danhmuc));
            echo ' <option value="' . $id . '">' . $name . '</option>';
          }
          ?>

        </select>
        <input type="submit" name="listok" value="GO" id="">
      </form>

  <div class="row fromcontent">
    <div class="row mb frmdsloai table">
      
      <table>
        <tr>
          <th></th>
          <th>Mã Loại</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá</th>
          <th>Hình </th>
          <th>Mô tả</th>
          <th>Lượt xem</th>
          <th></th>
        </tr>

        <?php
        foreach ($listsanpham as $sanpham) {
          extract($sanpham);
          $suasp = "index.php?act=suasp&id=" . $id;
          $xoasp = "index.php?act=xoasp&id=" . $id;
          $hinhpath = "../upload/" . $img;
          if (is_file($hinhpath)) {
            $hinh = "<img src='" . $hinhpath . "' height='80px'>";
          } else {
            $hinh = "no photo";
          }

          echo '<tr>
  <td><input type="checkbox" name="" id=""></td>
  <td>' . $id . '</td>
  <td>' . $name . '</td>
  <td>' . $price . '</td>
  <td>' . $hinh . '</td>
  <td>' . $mota . '</td>
  <td>' . $luotxem . '</td>
  <td><a href="' . $suasp . '"><input type="button" value="sửa"></a> <a href="' . $xoasp . '"><input type="button" value="xóa"></a></td>
</tr>';
        }
        ?>

      </table>
    </div>
  </div>
  <div class="row mb">
    <input type="button" name="" id="" value="Chọn tất cả">
    <input type="button" name="" id="" value="Bỏ chọn tất cả">
    <input type="button" name="" id="" value="xóa các mục đã chọn">
    <a href="index.php?act=addsp"> <input type="button" name="" id="" value="Nhập thêm"></a>
  </div>
</div>