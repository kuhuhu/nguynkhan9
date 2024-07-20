
<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop With Grid</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product grid-->
   <section class="py-4">
    <h5 class="mb-0 fw-bold d-none">Product Grid</h5>
    <div class="container">
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-funnel me-1"></i> Filters</span></div>
       <div class="row">
          <div class="col-12 col-xl-9">
            <div class="shop-right-sidebar">
              <div class="card rounded-0">
                <div class="card-body p-2">
                  <div class="d-flex align-items-center justify-content-between bg-light p-2">
                     <!-- <div class="product-count">657 Items Found</div> -->
                     <div class="view-type hstack gap-2 d-none d-xl-flex">
                      <p class="mb-0">Grid</p>
                      <div>
                        <a href="shop-grid.html" class="grid-type-3 d-flex gap-1">
                          <span></span>
                          <span></span>
                          <span></span>
                        </a>
                      </div>
                      <div>
                        <a href="shop-grid-type-4.html" class="grid-type-3 d-flex gap-1 active">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        </a>
                      </div>
                   </div>
                     <form>
                      <div class="input-group">
                        <span class="input-group-text bg-transparent rounded-0 border-0">Sort By</span>
                        <!-- <select class="form-select rounded-0">
                          <option selected>Whats'New</option>
                          <option value="1">Popularity</option>
                          <option value="2">Better Discount</option>
                          <option value="3">Price : Hight to Low</option>
                          <option value="4">Price : Low to Hight</option>
                          <option value="5">Custom Rating</option>
                        </select> -->
                      </div>
                    </form> 
                  </div>
                </div>
              </div>

              <div class="product-grid mt-4">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


                <?php
                  foreach ($listsp as $sp) {
                    extract($sp);
                    $hinh = $avatar_path.$img;
                    echo'
                    <div class="col">
                      <div class="card border shadow-none">
                        <div class="position-relative overflow-hidden">
                          <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                            <a href="javascript:;"><i class="bi bi-heart"></i></a>
                            <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                            <a href="javascript:;"><i class="bi bi-zoom-in"></i></a>
                          </div>
                          <a href="javascript:;">
                            <img src="'.$hinh.'" class="card-img-top" alt="...">
                          </a>
                        </div>
                        <div class="card-body border-top">
                          <h5 class="mb-0 fw-bold product-short-title">'.$name.'</h5>
                          <p class="mb-0 product-short-name">'.$mota.'</p>
                          <div class="product-price d-flex align-items-center gap-2 mt-2">
                            <div class="h6 fw-bold">$'.($price - ($price*$sale/100)).'</div>
                            <div class="h6 fw-light text-muted text-decoration-line-through">$'.($price*$sale/100).'</div>
                            <div class="h6 fw-bold text-danger">('.$sale.'% off)</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    ';
                  }

                 
                  
                ?>  

              </div><!--end row-->
            </div>

            </div>
          </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->
