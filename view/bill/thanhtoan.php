

<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Checkout</a></li>
          <li class="breadcrumb-item active" aria-current="page">Payment Method</li>
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
          <h4 class="mb-0 h4 fw-bold">Select Payment Method</h4>
       </div>
      </div>
	   <div class="row g-4">
	     <div class="col-12 col-lg-8 col-xl-8">
		    <div class="card rounded-0 payment-method">
          <div class="row g-0">
             <div class="col-12 col-lg-4 bg-light">
              <div class="nav flex-column nav-pills">
                
                <button class="nav-link rounded-0"  data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"><i class="bi bi-cash-stack me-2"></i>Cash On Delivery</button>
                <button class="nav-link rounded-0 border-bottom-0"  id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"><i class="bi bi-bank2 me-2"></i>Momo Banking</button>

                <script>$(document).ready(function(){
                $(".nav-link").click(function(){
                  // Hide all payment forms
                  $(".tab-pane").removeClass("show active");
                  // Show the corresponding payment form based on the clicked button
                  var targetTabId = $(this).attr("data-bs-target");
                  $(targetTabId).addClass("show active");
                });
              });
              </script>
              <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="index.php?act=htthanhtoan">
              </div>
             </div>
             
             <div class="col-12 col-lg-8">
              <div class="tab-content p-3">
                
                <?php
               
                
                echo'
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="addressmain" value="'.$addressmain.'">
                <div class="tab-pane fade show active" id="v-pills-home">
                   <h5 class="mb-3 fw-bold">I would like to pay after product delivery</h5>
                   <input type="submit" name ="thanhtoan" class="btn btn-ecomm btn-dark w-100 py-3 px-5" >
                </div></form>';
                
                $ngaymua = date("Y-m-d H:i:s");
                $trangthai = 0;
                $trangthaidon = 1;
                echo'
                <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                action="view/sulythanhtoan.php">
                <input type="hidden" name ="tongtien" value ="'.intval($ttien*100).'">
                <input type="hidden" name="addressmain" value="'.$addressmain.'">
                <input type="hidden" name="ngaymua" value="'.$ngaymua.'">
                <input type="hidden" name="trangthai" value="'.$trangthai.'">
                <input type="hidden" name="trangthaidon" value="'.$trangthaidon.'">
                <input type="hidden" name="iduser" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">'; ?>
                <?php
                foreach ($idspf as $idsp) {
                  echo'<input type="hidden" name="idsp[]" value="'.$idsp.'">';
                }
               


                echo'
                <div class="tab-pane fade" id="v-pills-settings">
                   <h5 class="mb-3 fw-bold">I would like to pay with Momo wallet</h5>
                   <input type="submit" name ="payUrl" class="btn btn-ecomm btn-dark w-100 py-3 px-5" >
                </div>

                </form>
                
                
                ';
                
                ?>
                <!-- <div class="tab-pane fade" id="v-pills-settings">
                    <div class="mb-3">
                      <p>Select your Bank</p>
                      <select class="form-select form-select-lg rounded-0" aria-label="Default select example">
                        <option selected="">--Please Select Your Bank--</option>
                        <option value="1">MB Bank </option>
                        <option value="2">VCB </option>
                        <option value="3">Agribank </option>
                      </select>
                    </div>
                    <button type="button" name ="thanhtoan" class="btn btn-ecomm btn-dark w-100 py-3 px-5 mb-3">Pay Now</button>
                    <div class="">
                      <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                    </div>
                </div> -->


              </div>
            </div>
          </div><!--end row-->
			</div> 

		 </div>
		 <div class="col-12 col-lg-4 col-xl-4">
      <?php 

      echo '
      <div class="card rounded-0 mb-3">
      <div class="card-body">
        <h5 class="fw-bold mb-4">Order Summary</h5>
        <div class="hstack align-items-center justify-content-between">
          <p class="mb-0">Bag Total</p>
          <p class="mb-0">$'.$ttiengoc.'</p>
        </div>
        <hr>
        <div class="hstack align-items-center justify-content-between">
         <p class="mb-0">Bag discount</p>
         <p class="mb-0 text-success">- $'.$giagiam.'</p>
       </div>
       <hr>
       <div class="hstack align-items-center justify-content-between">
         <p class="mb-0">Delivery</p>
         <p class="mb-0">$0.00</p>
       </div>
       <hr>
       <div class="hstack align-items-center justify-content-between fw-bold text-content">
         <p class="mb-0">Total Amount</p>
         <p class="mb-0">$'.$ttien.'</p>
       </div>
      </div>
    </div>

    
    ';
		    
?>
		 </div>
	 </div><!--end row-->
       
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->

