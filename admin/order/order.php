<div class="row">
    <div class="row frmtitle"><h1>Đơn hàng</h1></div>
    <div class="row fromcontent">
        <div class="row mb frmdsloai table">
            <table>
                <tr>
                    <th></th></th>
                    <th>MÃ CHI TIẾT</th>
                    <th>ẢNH</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>SIZE</th>
                    <th>ĐƠN GIÁ</th>
                    <th>TRẠNG THÁI ĐƠN</th>
                </tr>
                <?php
                foreach ($listlsdh as $od) {
                    extract($od);
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height='80px'>";
                    } else {
                        $img = "no photo";
                    }

                    echo '
                    <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $idsp . '</td>
                            <td>' . $img . '</td>
                            <td>' . $name . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $size . '</td>
                            <td>' . ($price - $pricesale) . '</td>
                            <td>' .$ttd. '</td>
                         
                            ';
                    
                          
                }
                ?>
                
            </table>
        </div>
    </div>
</div>