<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/shopingo/demo/shopingo_V1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 06:49:00 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="assets-user/images/favicon-32x32.webp" type="image/webp" />
  <!-- CSS files -->
  <link href="assets-user/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="assets-user/plugins/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets-user/plugins/slick/slick-theme.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="assets-user/css/style.css" rel="stylesheet">
  <link href="assets-user/css/dark-theme.css" rel="stylesheet">
  <style>
    .button-tron {
  width: 42px; /* Kích thước chiều rộng của container */
  height: 42px; /* Kích thước chiều cao của container */
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%; /* Đảm bảo container hiển thị hình tròn */
  background-color: #f0f0f0; /* Màu nền của nút */
  overflow: hidden; /* Đảm bảo kích thước của nút sẽ thay đổi đúng kích thước của container */
}

input[name="size"] {
  width: 100%; /* Kích thước chiều rộng của nút */
  height: 100%; /* Kích thước chiều cao của nút */
  background-color: transparent; /* Xóa màu nền của nút */
  border: none; /* Xóa viền của nút */
  font-size: 16px; /* Cỡ chữ của nút */
  cursor: pointer; /* Đổi con trỏ thành kiểu pointing hand khi di chuột vào nút */
}
  </style>

  <title>Shopingo - eCommerce HTML Template</title>
</head>

<body>


     <!--page loader-->
     <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
   <!--end loader-->

  <!--start top header-->
  <header class="top-header">
    <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
      <a class="navbar-brand d-none d-xl-inline" href="index.php"><img src="assets-user/images/logo.webp" class="logo-img" alt=""></a>
      <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar">
        <i class="bi bi-list"></i>
      </a>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
        <div class="offcanvas-logo"><img src="assets-user/images/logo.webp" class="logo-img" alt="">
          </div>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body primary-menu">
          <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="index.php?act=sanpham&iddm=4"
                data-bs-toggle="dropdown">
                Categories
              </a>
              <div class="dropdown-menu dropdown-large-menu">
                <div class="row">
                  <div class="col-12 col-xl-4">
                    <h6 class="large-menu-title">category</h6>
                    <ul class="list-unstyled">
                      <?php
                        foreach ($danhmuc as $dm) {
                          extract($dm);
                          echo '<li><a href="index.php?act=sanpham&iddm='.$id.'">'.$name.'</a>
                          </li>';
                        }
                      ?>
                      
                    </ul>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-12 col-xl-4 d-none d-xl-block">
                    <div class="pramotion-banner1">
                      <img src="img/anh3.jpg" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="index.php?act=allsp" data-bs-toggle="dropdown">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="account-dashboard.html">Dashboard</a></li>
                <li><a class="dropdown-item" href="account-orders.html">My Orders</a></li>
                <li><a class="dropdown-item" href="account-profile.html">My Profile</a></li>
                <li><a class="dropdown-item" href="account-edit-profile.html">Edit Profile</a></li>
                <li><a class="dropdown-item" href="account-saved-address.html">Addresses</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="authentication-login.html">Login</a></li>
                <li><a class="dropdown-item" href="authentication-register.html">Register</a></li>
                <li><a class="dropdown-item" href="authentication-reset-password.html">Password</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                Blog
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                <li><a class="dropdown-item" href="blog-read.html">Blog Read</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <ul class="navbar-nav secondary-menu flex-row">
        <li class="nav-item">
          <a class="nav-link dark-mode-icon" href="javascript:;">
            <div class="mode-icon">
              <i class="bi bi-moon"></i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.html"><i class="bi bi-search"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?act=wishlist"><i class="bi bi-suit-heart"></i></a>
        </li>
        <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
          <a class="nav-link position-relative" href="index.php?act=cart">
            <!-- <div class="cart-badge">8</div> -->
            <i class="bi bi-basket2"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?act=account"><i class="bi bi-person-circle"></i></a>
        </li>
      </ul>
    </nav>
  </header>
  <!--end top header-->
  