
<?php
include "../admin/models/dathang.php";
include "../admin/models/sanpham.php";
include "../admin/models/pdo.php";
include "../admin/models/thanhtoanmomo.php";
if(isset($_POST['payUrl']) && $_POST['payUrl']) {
            $tongtien = $_POST['tongtien'];
            $addressmain = $_POST['addressmain'];
            $ngaymua = $_POST['ngaymua'];
            $trangthai = $_POST['trangthai'];
            $trangthaidon = 1;
            $iduser = $_POST['iduser'];
            $user = $_POST['name'];
            $loaithanhtoan = 1;
            insert_dathang($iduser, $user, $tongtien, $addressmain, $ngaymua, $trangthai, $trangthaidon, $loaithanhtoan);
            $idsp = $_POST['idsp'];
            foreach ($idsp as $idgh) {
                $gh = loadone_giohangchon($idgh);
                extract($gh);
                $sl = loadtt_dathang(); 
                extract($sl);
               insert_lsdathang($idgh, $id, $name, $price, $soluong, $hinh, $size, $pricesale, $trangthai);
               delete_giohang($idgh);
             }



            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $tongtien;
            $orderId = rand(00,9999);
            $redirectUrl = "http://localhost/DUAN1-TEAM3-MAIN/DUAN1-TEAM3/hahaha.php";
            $ipnUrl = "http://localhost/DUAN1-TEAM3-MAIN/DUAN1-TEAM3/hahaha.php";
            $extraData = "";

            $requestId = time() . "";
            $requestType = "payWithATM";
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there

            header('Location: ' . $jsonResult['payUrl']);
            }



            
        
            ?>