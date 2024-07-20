
<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Authentication</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      
        <div class="row">
          <div class="col-12 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
             <div class="card rounded-0">
               <div class="card-body p-4">
                 <h4 class="mb-0 fw-bold text-center">Registration</h4>
                 <hr>
                 <p class="mb-2">Join / Sign Up using</p>
                 <div class="social-login mb-4">
                  <div class="row g-4">
                    <div class="col-xl-6">
                        <button type="button" class="btn bg-facebook btn-ecomm w-100 text-white"><i class="bi bi-facebook me-2"></i>Facebook</button>
                    </div>
                    <div class="col-xl-6">
                      <button type="button" class="btn bg-pinterest btn-ecomm w-100 text-white"><i class="bi bi-google me-2"></i>Google</button>
                  </div>
                   </div>
                 </div>
                 <?php
                  if($check==0){
                    echo'<div class="separator mb-4">
                    <div class="line"></div>
                    <p class="mb-0 fw-bold" style="color: red;">You have successfully registered</p>
                    <div class="line"></div>
                  </div>';
                  } else {
                    echo'<div class="separator mb-4">
                    <div class="line"></div>

                    <div class="line"></div>
                  </div>';
                  }
                 ?>


                 <form action="index.php?act=dangky" method="post" >
                  <div class="row g-4">
                    <div class="col-12">
                        <label for="exampleName" class="form-label">User</label>
                        <input type="text" class="form-control rounded-0" name="user">
                    </div>
                    <div class="col-12">
                      <label for="examplePassword" class="form-label">Password</label>
                      <input type="password" class="form-control rounded-0" name="pass">
                    </div>
                    <div class="col-12">
                      <label for="exampleEmail" class="form-label">Email</label>
                      <input type="email" class="form-control rounded-0" name="email">
                    </div>
                    <div class="col-12">
                        <label for="exampleName" class="form-label">Address</label>
                        <input type="text" class="form-control rounded-0" name="address">
                    </div>
                    <div class="col-12">
                      <label for="exampleMobile" class="form-label">Mobile</label>
                      <input type="text" class="form-control rounded-0" name="tel">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree to Terms and Conditions
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                     <hr class="my-0">
                    </div>
                    <div class="col-12">
                        <input type="submit" name="dangky" class="btn btn-dark rounded-0 btn-ecomm w-100" value="Sign up" />
                    <div class="col-12 text-center">
                      <p class="mb-0 rounded-0 w-100">Already have an account? <a href="index.php?act=dangnhap" class="text-danger">Sign In</a></p>
                    </div>
                  </div><!---end row-->
               </form>


               
               </div>
             </div>
          </div>
        </div><!--end row-->
       
    </div>
  </section>
   <!--start product details-->


 </div>
  <!--end page content-->


  <!--start footer-->
