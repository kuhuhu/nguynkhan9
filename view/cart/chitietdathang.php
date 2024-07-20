
<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
          <h4 class="mb-0 h4 fw-bold">Order History</h4>
       </div>
       <div class="ms-auto">
        <a href="index.php?act=listorder" class="btn btn-light btn-ecomm">Back</a>
       </div>
      </div>
	   <div class="row g-4">
	     <div class="col-12 col-xl-8">
       <form action="index.php?act=address" method="post">
		    <div class="card rounded-0 mb-3">
			  <?php
        // $ttiengoc=0;
        // $ttien = 0;
        // $giagiam = 0;
        foreach($listlsdathang as $sp){
          extract($sp);
          if($trangthai == 0){
            $tt = "Wait for confirmation";
          } else if($trangthai == 1){
            $tt = "Confirmed";
          } else if($trangthai == 2){
            $tt = "Being transported";
          } else if($trangthai == 3){
            $tt = "Complete";
          } else if($trangthai == 4){
            $tt = "Cancelled";
          }
        $img = $avatar_path.$hinh;
        $sale = $pricesale*100/$price;
        echo '
        <div class="card rounded-0 mb-3">
        <div class="card-body">
			    <div class="d-flex flex-column flex-lg-row gap-3">
          <input class="form-check-input" type="checkbox" value ="'.$id.'" name="idspf[]">
				   <div class="product-img">  
				      <img src="'.$img.'" width="150" alt="">
				   </div>
				    <div class="product-info flex-grow-1">
				      <h5 class="fw-bold mb-0">'.$name.'</h5>  
					    <div class="product-price d-flex alig n-items-center gap-2 mt-3">
                <div class="h6 fw-bold">$'.($price - $pricesale).'</div>
                <div class="h6 fw-light text-muted text-decoration-line-through">$'.($price*$soluong).'</div>
                <div class="h6 fw-bold text-danger">('.$sale.'% off)</div>
              </div>
					  	 <div class="mt-3 hstack gap-2">
                 <button type="button" class="btn btn-sm btn-light border rounded-0" data-bs-toggle="modal" data-bs-target="#SizeModal">Size : '.$size.'</button>
                 <button type="button" class="btn btn-sm btn-light border rounded-0" data-bs-toggle="modal" data-bs-target="#QtyModal">Qty : '.$soluong.'</button>
						</div>
				   </div>
           <div class="d-none d-lg-block vr"></div>
           <div class="d-grid gap-2 align-self-start align-self-lg-center">
              <button type="button" class="btn dark btn-ecomm">Status: '.$tt.'</button>
           </div>
			  	</div>
			  </div>
        </div>
        
        ';
        // <input type="hidden" name="ttiengoc" value="'.$price*$soluong.'">
        // <input type="hidden" name="giagiam" value="'.($price-$pricesale)*$soluong.'">
        // <input type="hidden" name="ttien" value="'.$pricesale*$soluong.'">
        // $ttiengoc += $price*$soluong;
        // $giagiam += ($price-$pricesale)*$soluong;
        // $ttien += $pricesale*$soluong; 
    }
    ?>


</div> 
</div>
<div class="col-12 col-xl-4">
    <!-- <div class="card rounded-0 mb-3">
      <div class="card-body">
        <h5 class="fw-bold mb-4">Order Summary</h5>
        
        <div class="hstack align-items-center justify-content-between">
          <p class="mb-0">Bag Total</p>
          <p class="mb-0">$'.$ttiengoc.'</p>
           <input type="hidden" name="ttiengoc" value="'.$ttiengoc.'">
        </div>
        <hr>
        <div class="hstack align-items-center justify-content-between">
         <p class="mb-0">Bag discount</p>
         <p class="mb-0 text-success">- $'.$giagiam.'</p>
         <input type="hidden" name="giagiam" value="'.$giagiam.'">
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
         <input type="hidden" name="ttien" value="'.$ttien.'">
       </div> -->
       
        <div class="d-grid mt-4">
        
           <input type="submit" name="reorder" class="btn btn-dark btn-ecomm py-3 px-5"><a href="index.php?act=address" style="color: aliceblue;" value = "Repurchase"></a>
        </div>
      </div>
    </div>

</div>
</form>





	 </div><!--end row-->
       
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->

