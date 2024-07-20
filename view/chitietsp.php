

<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Page Details</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="py-4">
    <div class="container">
       <div class="row g-4">
          <div class="col-12 col-xl-7">
            <div class="product-images">
                <div class="product-zoom-images">
                  <div class="row row-cols-2 g-3">

                    <?php 
                      extract($sanpham);
                      $hinh = $avatar_path.$img;
                      $pricesale = $price*$sale/100;
                      echo '<form action="index.php?act=cart" method="post">
                      <div class="col">
                      <div class="img-thumb-container overflow-hidden position-relative" data-fancybox="gallery" data-src="assets/images/product-images/01.jpg">
                        <img src="'.$hinh.'" class="img-fluid" alt="">
                        <input type="hidden" name="hinh" value="'.$img.'">
                      </div>
                    </div>
                  </div><!--end row-->
                </div>
            </div>
          </div>
          <div class="col-12 col-xl-5">
            <div class="product-info">
                  <h4 class="product-title fw-bold mb-1">'.$name.'</h4>
                  <input type="hidden" name="name" value="'.$name.'">
                  <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>
                  <div class="product-rating">
                    <div class="hstack gap-2 border p-1 mt-3 width-content">
                      <div><span class="rating-number">4.8</span><i class="bi bi-star-fill ms-1 text-warning"></i></div>
                      <div class="vr"></div>
                      <div>162 Ratings</div>
                    </div>
                  </div>
                  <hr>
                  <div class="product-price d-flex align-items-center gap-3">
                     <div class="h4 fw-bold">$'.$pricesale.'</div>
                     <input type="hidden" name="pricesale" value="'.$pricesale.'">
                     <div class="h5 fw-light text-muted text-decoration-line-through">$'.$price.'</div>
                     <input type="hidden" name="price" value="'.$price.'">
                     <div class="h4 fw-bold text-danger">('.$sale.'% off)</div>  
                  </div>
                  <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                  <div class="more-colors mt-4">
                    <h6 class="fw-bold mb-3">More Colors</h6>
                    <div class="d-flex align-items-center gap-3">
                      <div class="">
                        <a href="javascript:;">
                          <img src="'.$hinh.'" width="65" alt="">
                        </a>
                      </div>
                      <div class="">
                        <a href="javascript:;">
                          <img src="assets/images/featured-products/02.webp" width="65" alt="">
                        </a>
                      </div>
                      <div class="">
                        <a href="javascript:;">
                          <img src="assets/images/featured-products/03.webp" width="65" alt="">
                        </a>
                      </div>
                      <div class="">
                        <a href="javascript:;">
                          <img src="assets/images/featured-products/04.webp" width="65" alt="">
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="quantity mb-4 mb-md-0 d-flex align-items-center">
                                    <div class="border px-3 width-120">
                                        <div class="js-quantity">
                                        <h6 class="fw-bold mb-3">Quantity </h6>
                                            <div class="d-flex align-items-center">
                                                <label class="screen-reader-text sr-only"></label>
                                                <a class="js-minus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="1px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z"></path>
                                                    </svg>
                                                </a>
                                                <input type="number" class="input-text qty text js-result form-control text-center border-0" step="1" min="1" max="100" name="soluong" value="1" title="Qty">
                                                <a class="js-plus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="10px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="size-chart mt-4">
                                <h6 class="fw-bold mb-3">Select Size</h6>
                                    <div class="d-flex align-items-center gap-2 flex-wrap" id="sizeButtons">';
                                        
                                       extract($size);
                                       if($size38 == 0){
                                        $chk == "hidden";
                                       } else if($size39 == 0){
                                        $chk == "hidden";
                                       } else if($size40 == 0){
                                        $chk == "hidden";
                                       } else if($size41 == 0){
                                        $chk == "hidden";
                                       } else if($size42 == 0){
                                        $chk == "hidden";
                                       }
                                        echo'
                                        <div class="">
                                            <button type="button" name="size" value="38" onclick="selectSize(\'38\')" '.$chk.'>38</button>
                                        </div>
                                        <div class="">
                                            <button type="button" name="size" value="39" onclick="selectSize(\'39\')" '.$chk.'>39</button>
                                        </div>
                                        <div class="">
                                            <button type="button" name="size" value="40" onclick="selectSize(\'40\')" '.$chk.'>40</button>
                                        </div>
                                        <div class="">
                                            <button type="button" name="size" value="41" onclick="selectSize(\'41\')" '.$chk.'>41</button>
                                        </div>
                                        <div class="">
                                            <button type="button" name="size" value="42" onclick="selectSize(\'42\')" '.$chk.'>42</button>
                                        </div>
                                        <input type="hidden" id="selectedSizeInput" name="selectedSize" value="">';
                                        
                                    echo'
                                    </div>
                                <div id="selectedSize"></div>
                            
                                <script>
                                
                                    function selectSize(size) {
                                        // Hiển thị size đã chọn
                                        document.getElementById(\'selectedSizeInput\').value = size;
                                        document.getElementById(\'selectedSize\').innerHTML = \'Selected Size: \' + size;
                                    }
                                </script>
                            </div>
                            <input type="hidden" name="idsp" value="'.$_GET['id'].'">

                  <div class="cart-buttons mt-3">
                    <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                    <button type="submit" name="addtobag" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><a href="index.php?act=cart" style="color: aliceblue;" ><i class="bi bi-basket2 me-2"></i>Add to Bag</a></button>
                    <button type="button" name="Wishlist" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><a href="index.php?act=wishlist" class=""><i class="bi bi-suit-heart me-2"></i>Wishlist</a></button>
                      
                    </div>
                  </div>
                  <hr class="my-3">
                  <div class="product-info">
                    <h6 class="fw-bold mb-3">Product Details</h6>
                     <p class="mb-1">'.$mota.'</p>
                     <input type="hidden" name="mota" value="'.$mota.'">
                    
                  </div>
                  </form>';
                   
                  ?>
<!-- 
<a href="index.php?act=cart" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i class="bi bi-basket2 me-2"></i> <input type="submit" name="addtobag">Add to Bag</a> -->

<hr class="my-3">
                  <div class="customer-ratings">
                    <h6 class="fw-bold mb-3">Customer Ratings</h6>
                      <div class="d-flex align-items-center gap-4 gap-lg-5 flex-wrap flex-lg-nowrap">
                        <div class="">
                          <h1 class="mb-2 fw-bold">4.8<span class="fs-5 ms-2 text-warning"><i class="bi bi-star-fill"></i></span></h1>
                          <p class="mb-0">3.8k Verified Buyers</p>
                        </div>
                        <div class="vr d-none d-lg-block"></div>
                        <div class="w-100">
                          <div class="rating-wrrap hstack gap-2 align-items-center">
                            <p class="mb-0">5</p>
                            <div class=""><i class="bi bi-star"></i></div>
                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                            </div>
                            <p class="mb-0">1528</p>
                          </div>
                          <div class="rating-wrrap hstack gap-2 align-items-center">
                            <p class="mb-0">4</p>
                            <div class=""><i class="bi bi-star"></i></div>
                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                            </div>
                            <p class="mb-0">253</p>
                          </div>
                          <div class="rating-wrrap hstack gap-2 align-items-center">
                            <p class="mb-0">3</p>
                            <div class=""><i class="bi bi-star"></i></div>
                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 45%"></div>
                            </div>
                            <p class="mb-0">258</p>
                          </div>
                          <div class="rating-wrrap hstack gap-2 align-items-center">
                            <p class="mb-0">2</p>
                            <div class=""><i class="bi bi-star"></i></div>
                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"></div>
                            </div>
                            <p class="mb-0">78</p>
                          </div>
                          <div class="rating-wrrap hstack gap-2 align-items-center">
                            <p class="mb-0">1</p>
                            <div class=""><i class="bi bi-star"></i></div>
                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"></div>
                            </div>
                            <p class="mb-0">27</p>
                          </div>
                        </div>
                      </div>
                  </div>


                  <?php
                   include "view/binhluan/binhluanform.php";
                  ?>

                   
              
                  

                 
            </div>
          </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


  <!--start product details-->
  <section class="section-padding">
    <div class="container">
      <div class="separator pb-3">
        <div class="line"></div>
        <h3 class="mb-0 h3 fw-bold">Similar Products</h3>
        <div class="line"></div>
      </div>
      <div class="similar-products">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/best-sellar/03.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/new-arrival/02.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/best-sellar/02.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/new-arrival/04.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
           </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/new-arrival/05.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
             </div>
             </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/trending-product/03.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
             </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/featured-products/05.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
           </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/trending-product/05.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
           </a>
          </div>
          <div class="col">
            <a href="javascript:;">
            <div class="card rounded-0">
              <img src="assets/images/trending-product/01.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
             <div class="card rounded-0">
              <img src="assets/images/trending-product/02.webp" alt="" class="card-img-top rounded-0">
              <div class="card-body border-top">
                <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                <p class="mb-0 product-short-name">Color Printed Kurta</p>
                <div class="product-price d-flex align-items-center gap-3 mt-2">
                  <div class="h6 fw-bold">$458</div>
                  <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h6 fw-bold text-danger">(70% off)</div>
                </div>
              </div>
            </div>
           </a>
          </div>

  
        </div>
        <!--end row-->
      </div>
    </div>
  </section>
  <!--end product details-->

  
 </div>
  <!--end page content-->
