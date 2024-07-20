
<?php
include "view/header.php";
?>
<style>
        .container_1 {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .success-icon {
            color: #28a745;
            font-size: 3em;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #218838;
        }
        .abc{
         text-align: center;
         margin-left: 550px;
        }
    </style>
</head>
<body>
   <div class="abc">
   <br><br><br><br><br>
    <div class="container_1">
        <div class="success-icon">&#10004;</div>
        <h1>Đặt Hàng Thành Công!</h1>
        <p>Cảm ơn bạn đã mua sắm tại trang web của chúng tôi.</p>
        <p>Chúc bạn có một trải nghiêm tốt khi sử dụng sản phẩm (^-^)</p>
        <a href="index.php" class="button">Quay lại trang chủ</a>
        <a href="index.php?act=listorder" class="button">Thông tin đơn hàng</a>
    </div>
   </div>
   <br><br>
</body>
</html>
<?php
include "view/footer.php";
include "view/startcart.php";
?>