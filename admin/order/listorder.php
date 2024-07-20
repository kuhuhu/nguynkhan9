<div class="row">
    <div class="row frmtitle"><h1>Đơn hàng</h1></div>
    <div class="row fromcontent">
        <div class="row mb frmdsloai table">
            <table>
                <tr>
                    <th></th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>Họ Tên </th>
                    <th>Tổng Tiền</th>
                    <th>Địa chỉ</th>
                    <th>Ngày Mua</th>
                    <th>Trạng Thái</th>
                    <th></th>
                    <th>Chi Tiết</th>
                </tr>
                <?php
                foreach ($listorder as $order) {
                    extract($order);

                    echo '
                    <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $tongtien . '</td>
                            <td>' . $address . '</td>
                            <td>' . $ngaymua . '</td>
                            <td>

                            ';
                    if($trangthai == 0){
                        echo'
                        <form method="post" action="index.php?act=listorder">
                        <input type="hidden" name ="id_dathang" value="'.$id.'">
                        <select name="order">
                            <option value="0">Chưa xác nhận</option>
                            <option value="1">Xác nhận</option>
                            <option value="2">Đang vận chuyển</option>
                            <option value="3">Hoàn thành</option>
                            <option value="4">Hủy</option>
                        </select>
                        <td><input type="submit" value="Update"></td>
                        <td> <a href="index.php?act=chitietdh&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Chi Tiết</button></a></td>
                        </form>';
                    } else if($trangthai == 1){
                        echo'
                        <form method="post" action="index.php?act=listorder">
                        <input type="hidden" name ="id_dathang" value="'.$id.'">
                        <select name="order">
                        <option value="1">Xác nhận</option>
                        <option value="2">Đang vận chuyển</option>
                        <option value="3">Hoàn thành</option>
                        <option value="4">Hủy</option>
                        </select>
                        <td><input type="submit" value="Update"></td>
                        <td> <a href="index.php?act=chitietdh&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Chi Tiết</button></a></td>
                        </form>';
                    } else if($trangthai == 2){
                        echo'
                        <form method="post" action="index.php?act=listorder">
                        <input type="hidden" name ="id_dathang" value="'.$id.'">
                        <select name="order">
                        <option value="2">Đang vận chuyển</option>
                        <option value="3">Hoàn thành</option>
                        <option value="4">Hủy</option>
                        </select>
                        <td><input type="submit" value="Update"></td>
                        <td> <a href="index.php?act=chitietdh&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Chi Tiết</button></a></td>
                        </form>';
                    } else if($trangthai == 3){
                        echo'
                        <form method="post" action="index.php?act=listorder">
                        <input type="hidden" name ="id_dathang" value="'.$id.'">
                        <select name="order">
                        <option value="3">Hoàn thành</option>

                        </select>
                        <td><input type="submit" value="Update"></td>
                        <td> <a href="index.php?act=chitietdh&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Chi Tiết</button></a></td>
                        </form>';
                    } else if($trangthai == 4){
                        echo'
                        <form method="post" action="index.php?act=listorder">
                        <input type="hidden" name ="id_dathang" value="'.$id.'">
                        <select name="order">
                        <option value="4">Hủy</option>

                        </select>
                        <td><input type="submit" value="Update"></td>
                        <td> <a href="index.php?act=chitietdh&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Chi Tiết</button></a></td>
                        </form>';
                    }
                          
                }
                ?>
                
            </table>
        </div>
    </div>
</div>