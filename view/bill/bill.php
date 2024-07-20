
<!--start page content-->
<div class="page-content">

   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">checkout</a></li>
          <li class="breadcrumb-item active" aria-current="page">Billing Details</li>
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
          <h4 class="mb-0 h4 fw-bold">Billing Details</h4>
       </div>
      </div>
      <form action="index.php?act=address" method="post">
	   <div class="row g-4">
	     <div class="col-12 col-lg-8 col-xl-8">

        <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Personal Details</h6>
		    <div class="card rounded-0 mb-3">
			  <div class="card-body">
			    <div class="row g-3">
             <div class="col-12 col-lg-6">
              <div class="form-floating">
                <input type="text" name ="name" class="form-control rounded-0" id="floatingFirstName" placeholder="First Name">
                <label for="floatingFirstName">Full Name</label>
              </div>
             </div>
             <div class="col-12 col-lg-6">

             </div>
             <div class="col-12 col-lg-6">
              <div class="form-floating">
                <input type="text" name = "email" class="form-control rounded-0" id="floatingEmail" placeholder="Email">
                <label for="floatingEmail">Email</label>
              </div>
             </div>

             <div class="col-12 col-lg-6">
              <div class="form-floating">
                <input type="text" name="tel" class="form-control rounded-0" id="floatingMobileNo" placeholder="Mobile No">
                <label for="floatingMobileNo">Mobile No</label>
              </div>
             </div>
          </div><!--end row-->
			  </div>
			</div> 

      <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Shipping Details</h6>
		    <div class="card rounded-0">
			  <div class="card-body">
          <div class="row g-3">
            <div class="col-12 col-lg-12">
             <div class="form-floating">
               <input type="text" name = "address" class="form-control rounded-0" id="floatingStreetAddress" placeholder="Street Address">
               <label for="floatingStreetAddress">Street Address</label>
             </div>
            </div>

         </div><!--end row-->
			  </div>
			</div> 
          
      </div>
          <div class="col-12 col-lg-4 col-xl-4">
          <br>
          <br>
          <input type="submit" name = "Continue" class="btn btn-dark btn-ecomm py-3 px-5" value="Continue">
		  </div>
	 </div><!--end row-->
   </form>
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->

