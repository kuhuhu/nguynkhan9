<div class="col-12 col-xl-3 filter-column">
              <nav class="navbar navbar-expand-xl flex-wrap p-0">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body account-menu">
                    <div class="list-group w-100 rounded-0">
                      <a href="index.php?act=account" class="list-group-item"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                      <a href="index.php?act=listorder" class="list-group-item"><i class="bi bi-basket3 me-2"></i>Orders</a>
                      <a href="index.php?act=profile" class="list-group-item"><i class="bi bi-person me-2"></i>Profile</a>
                      <a href="account-edit-profile.html" class="list-group-item"><i class="bi bi-pencil me-2"></i>Edit Profile</a>
                      <a href="index.php?act=address" class="list-group-item"><i class="bi bi-pin-map me-2"></i>Saved Address</a>
                      <a href="wishlist.html" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Wishlist</a>
                      <?php
                        if($_SESSION['user'] == []){
                          
                        } else if($id==1){
                          echo'<a href="admin/index.php" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Login to admin</a>';
                        }
                      ?>
                      <a href="index.php?act=dangnhap" class="list-group-item"><i class="bi bi-power me-2"></i>Log in</a>
                      <a href="index.php?act=dangxuat" class="list-group-item"><i class="bi bi-power me-2"></i>Logout</a>
                    </div>
                  </div>
                </div>
            </nav>
          </div>