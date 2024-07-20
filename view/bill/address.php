

<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">checkout</a></li>
          <li class="breadcrumb-item active" aria-current="page">Address</li>
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
          <h4 class="mb-0 h4 fw-bold">Select Delivery Address</h4>
       </div>
      </div>
	   <div class="row g-4">
	     <div class="col-12 col-lg-8 col-xl-8">

        <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Default Address</h6>
		    <div class="card rounded-0 mb-3">
        <form action="index.php?act=thanhtoan" method="post">
        <?php
			  extract($tk);
        echo '
        <div class="card-body">
			    <div class="d-flex flex-column flex-xl-row gap-3">
            <div class="address-info form-check flex-grow-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value = "'.$address.'" id="flexRadioDefault1" checked>
              <input type="hiden" name ="name" value="'.$user.'" hidden>
              <label class="form-check-label" for="flexRadioDefault1">
                <span class="fw-bold mb-0 h5">'.$user.'</span><br>
                '.$address.'<br>
                Mobile: <span class="text-dark fw-bold">'.$tel.'</span>
             </label>
            </div>
           <div class="d-none d-xl-block vr"></div>
           <div class="d-grid gap-2 align-self-start align-self-xl-center">
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm">Remove</button>
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm" data-bs-toggle="modal" data-bs-target="#EditAddress">Edit</button> 
           </div>
			  	</div>
			  </div>';
        ?>

			</div> 

      <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Other Address</h6>
		    


        <?php
			  if($check ==[]){
 
        } else {
          foreach ($check as $ck) {
            extract($ck);
        echo '
        <div class="card rounded-0 mb-3">
        <div class="card-body">
			    <div class="d-flex flex-column flex-xl-row gap-3">
            <div class="address-info form-check flex-grow-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value = "'.$addressother.'" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                <span class="fw-bold mb-0 h5">'.$name.'</span><br>
                '.$addressother.'<br>
                Mobile: <span class="text-dark fw-bold">'.$tel.'</span>
             </label>
            </div>
           <div class="d-none d-xl-block vr"></div>
           <div class="d-grid gap-2 align-self-start align-self-xl-center">
              <a href="index.php?act=deladdress&idadr='.$id.'"><button type="button" class="btn btn-outline-dark px-5 btn-ecomm">Remove</button></a>
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm" data-bs-toggle="modal" data-bs-target="#EditAddress">Edit</button> 
           </div>
			  	</div>
			  </div>
        </div> ';
          }
        }
        ?>



			

      <div class="card rounded-0">
			  <div class="card-body">
        <button type="button" class="btn btn-outline-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#NewAddress"><a href="index.php?act=bill" style="color: black;" >Add New Address</a></button> 
			  </div>
			</div> 
		     

          <?php
          echo'
          </div> 

             <div class="col-12 col-lg-4 col-xl-4">
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
             <div class="d-grid mt-4">
                <a href="index.php?act=thanhtoan"><button type="submit" class="btn btn-dark btn-ecomm py-3 px-5">Pay</button></a>
             </div>
           </div>
         </div>
           
          ';
          
           
          ?>
</form>

         





	 </div><!--end row-->
       
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->

