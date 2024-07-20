<div class="row">
         <div class="row frmtitle">
          <h1>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h1>
         </div>
         <div class="row fromconten ">
          <form action="#" method="POST">
          <div class="row mb frmdsloai table">
          <table>
    <tr>
        <th></th>
        <th>MÃ LOẠI</th>
        <th>TÊN LOẠI</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ NHỎ NHẤT</th>
        <th>GIÁ LỚN NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>
        <th>THÁNG</th>
        <th>DOANH THU</th>
    </tr>
    <?php
    foreach ($dsthongke as $thongke) {
        extract($thongke);
    ?>
    <tr>
        <th></th>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $soluong ?></td>
        <td>$ <?php echo $gia_min ?></td>
        <td>$ <?php echo $gia_max ?></td>
        <td>$ <?php echo number_format($gia_avg, 2) ?></td>
        <!-- <td><?php echo $ngaymuahang ?></td>
        <td>$ <?php echo number_format($tttien, 2) ?></td> -->
    </tr>
    <?php
    }
    ?>
</table>

           
            
           </table>
           </div>
           <div class="row mb10 ">
          <html>
            <style>
.custom-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: 2px solid #3498db;
    color: #3498db;
    background-color: #ffffff;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.custom-button:hover {
    background-color: #3498db;
    color: #ffffff;
}



            </style>
           <a href="index.php?act=bieudo">
  <input class="custom-button" type="button" value="XEM BIỂU ĐỒ Thống Kê Danh Mục">
</a>

<a href="index.php?act=bieudo1">
  <input class="custom-button" type="button" value="XEM BIỂU ĐỒ Thống Kê Doanh Thu">
</a>
</html>

           </div>
          </form>
         </div>
        </div>