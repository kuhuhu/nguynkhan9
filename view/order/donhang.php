

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


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      <div class="d-flex align-items-center px-3 py-2 border mb-4">
        <div class="text-start">
          <h4 class="mb-0 h4 fw-bold">Account - Orders</h4>
       </div>
      </div>
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
       <div class="row">
          <?php
            include "view/boxleft.php"
          ?>
          <div class="col-12 col-xl-9">

            <div class="card rounded-0 mb-3 bg-light">
              <div class="card-body">
                <div class="d-flex flex-column flex-xl-row gap-3 align-items-center">
                  <div class="">
                     <h5 class="mb-1 fw-bold">All Orders</h5>
                     <p class="mb-0">for anytime</p>
                  </div>
                  <div class="order-search flex-grow-1">
                     <form>
                      <div class="position-relative">
                        <input type="text" class="form-control ps-5 rounded-0" placeholder="Search Product...">
                        <span class="position-absolute top-50 product-show translate-middle-y"><i class="bi bi-search ms-3"></i></span>
                     </div>
                     </form>
                  </div>
                  <div class="filter">
                    <button type="button" class="btn btn-dark rounded-0" data-bs-toggle="modal" data-bs-target="#FilterOrders"><i class="bi bi-filter me-2"></i>Filter</button>
                  </div>
                </div>
              </div>
            </div>
          
          <?php
          foreach ($listdathang as $dh) {
            extract($dh);
            if($trangthai == 0){
              $tthai = "Wait for confirmation";
            } else if($trangthai == 1){
              $tthai = "Confirmed";
            } else if($trangthai == 2){
              $tthai = "Being transported";
            } else if($trangthai == 3){
              $tthai = "Complete";
            } else if($trangthai == 4){
              $tthai = "Cancelled";
            }
            
            if($trangthaidon == 0){
              $tthaidon = "Unpaid";
            }else if($trangthaidon == 1){
              $tthaidon = "Paid";
            }
            if($loaithanhtoan == 0){
              $ltt = "Payment on delivery";
            } else{
              $ltt = "Pay with Momo wallet";
            }
          
          echo'
          <div class="card rounded-0">
              <div class="card-body">
                <div class="d-flex flex-column flex-xl-row gap-3">
                 <div class="product-img">
                    <img src="assets/images/featured-products/06.webp" width="120" alt="">
                 </div>
                  <div class="product-info flex-grow-1">
                    <h5 class="fw-bold mb-1">'.$name.'</h5>
                      <p class="mb-0"> Delivery address: '.$address.'</p>
                      <p class="mb-0"> Payment methods: '.$ltt.'</p>
                     <div class="mt-3 hstack gap-2">
                       <button type="button" class="btn btn-sm border rounded-0">Total amount : '.$tongtien.' $</button>
                       <button type="button" class="btn btn-sm border rounded-0">Date of purchase  : '.$ngaymua.'</button>
                       <button type="button" class="btn btn-sm border rounded-0">Status  : '.$tthai.'</button>';
                       
                       if($trangthai == 0 ||$trangthai == 1 ||$trangthai == 2 ||$trangthai == 3){
                        echo'
                       <button type="button" class="btn btn-sm border rounded-0">Order status  : '.$tthaidon.'</button>';
                       }
                       
                      
                       echo'
                  </div>
                 </div>
                 <div class="d-none d-xl-block vr"></div>
                 <div class="d-grid align-self-start align-self-xl-center">
                  <a href="index.php?act=lsorder&idls='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">View Details</button></a>
                  </div>';

                  if($trangthai == 0 || $trangthai == 1 || $trangthai == 2){
                  echo'
                  <div class="d-grid align-self-start align-self-xl-center">
                  <a href="index.php?act=deleteorder&id='.$id.'"><button type="button" class="btn btn-outline-dark btn-ecomm">Cancel order</button></a>
                 </div>';
                  }
                 echo'
                </div>
              </div>
              <div class="card-footer rounded-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                 
                </div>
              </div>
            </div>
          ';
          }
?>

          </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


   <!-- filter Modal -->
    <div class="modal" id="FilterOrders" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Filter Orders</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h6 class="mb-3 fw-bold">Status</h6>
              <div class="status-radio d-flex flex-column gap-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    All 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    On the way
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                  <label class="form-check-label" for="flexRadioDefault3">
                    Delivered
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                  <label class="form-check-label" for="flexRadioDefault4">
                    Cancelled
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                  <label class="form-check-label" for="flexRadioDefault5">
                    Returned
                  </label>
                </div>
              </div>
              <hr>
              <h6 class="mb-3 fw-bold">Time</h6>
              <div class="status-radio d-flex flex-column gap-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault6" checked>
                  <label class="form-check-label" for="flexRadioDefault6">
                    Anytime 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault7">
                  <label class="form-check-label" for="flexRadioDefault7">
                    Last 30 days
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault8">
                  <label class="form-check-label" for="flexRadioDefault8">
                    Last 6 months
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault9">
                  <label class="form-check-label" for="flexRadioDefault9">
                    Last year
                  </label>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center gap-3 w-100">
              <button type="button" class="btn btn-outline-dark btn-ecomm w-50">Clear Filters</button>
              <button type="button" class="btn btn-dark btn-ecomm w-50">Apply</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Filters Modal -->


 </div>
  <!--end page content-->

