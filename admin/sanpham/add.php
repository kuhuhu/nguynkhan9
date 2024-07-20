<div class="row">
            <div class="row frmtitle"><h1>Thêm mới sản phẩm</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                       Danh mục <br>
                   <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract(($danhmuc));
                        echo ' <option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                   
                   </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row mb">
                        Hình <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb">
                       Mô tả <br>
                        <textarea name="motasp" id="" cols="30" rows="10"></textarea>
                    </div>
                    <!-- <div class="row mb">
                        Lượt xem <br>
                        <input type="text" name="luotxemsp" id="">
                    </div> -->
                    <div class="row mb">
                        <input type="submit" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listsp">  <input type="button" name="" id="" value="danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
          </div>
    </div>