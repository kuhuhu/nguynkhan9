<?php
if (is_array($sanpham)) {
    $sanpham['fullname'] = $sanpham['name'];
    extract($sanpham);
}
$hinhpath = "../upload/".$img;

if (is_file($hinhpath)) {
    $hinh= "<img src='".$hinhpath."' height='80px'>";
   
} else {
    $hinh = "no photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Cập nhật loại hàng loại hàng hóa </h1>
    </div>
    <div class="row fromcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb">
            <select name="iddm" >
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract(($danhmuc));
            if($iddm==$id) $s="selected";else $s="";
                echo ' <option value="' . $id . '" '.$s.'>' . $name . '</option>';
          }
          
          if(!empty($_GET['id'])){
            $id = $_GET['id'];
          }
          ?>

        </select>
            </div>
            <div class="row mb">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="" value="<?php echo $fullname ?>">
            </div>
            <div class="row mb">
                Giá sản phẩm <br>
                <input type="text" name="giasp" id="" value="<?php echo $price ?>">
            </div>
            <div class="row mb">
                Hình <br>
                <input type="file" name="hinh" id="">
                <?php echo $hinh ?>
            </div>
            <div class="row mb">
                Mô tả <br>
                <textarea name="motasp" id="" cols="30" rows="10"><?php echo $mota ?></textarea>
            </div>
            <!-- <div class="row mb">
                        Lượt xem <br>
                        <input type="text" name="luotxemsp" id="">
                    </div> -->
            <div class="row mb">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="capnhat" id="" value="Cập nhật">
                <input type="reset" name="" id="" value="Nhập lại">
                <a href="index.php?act=listsp"> <input type="button" name="" id="" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>