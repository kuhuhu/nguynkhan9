<section class="product-tab-section section-padding bg-light">
      <div class="container">
        <div class="text-center pb-3">
          <h3 class="mb-0 h3 fw-bold">Latest Products</h3>
          <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
        </div>
        <div class="row">
          <div class="col-auto mx-auto">
            <div class="product-tab-menu table-responsive">
              <ul class="nav nav-pills flex-nowrap" id="pills-tab" role="tablist">
              <?php
              foreach ($danhmuc as $dm) {
                extract($dm);
                $link = "index.php?act=sanpham&iddm=".$id;
              echo '
              <li class="nav-item" role="presentation">
                  <a href="'.$link.'"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#new-arrival" type="button">'.$name.'</button></a>
                </li>';
              }
              ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr>
        <div class="tab-content tabular-product">
          <div class="tab-pane fade show active" id="new-arrival">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

              

            <?php
            foreach ($spmn as $sp) {
              extract($sp);
              $hinh = $avatar_path.$img;
              $link = "index.php?act=chitietsp&id=".$id;
            echo'
            <div class="col">
            <div class="card">
              <div class="position-relative overflow-hidden">
                <div
                  class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                  <a href="javascript:;"><i class="bi bi-heart"></i></a>
                  <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                      class="bi bi-zoom-in"></i></a>
                </div>
                <a href="'.$link.'">
                  <img src="'.$hinh.'" class="card-img-top" alt="...">
                </a>
              </div>
              <div class="card-body">
                <div class="product-info text-center">
                  <h6 class="mb-1 fw-bold product-name">'.$name.'</h6>
                  <div class="ratings mb-1 h6">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mb-0 h6 fw-bold product-price">'.$price.'</p>
                </div>
              </div>
            </div>
          </div>';
            }
            ?>
              





            </div>
          </div>
          <div class="tab-pane fade" id="best-sellar">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/best-sellar/01.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/best-sellar/02.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/best-sellar/03.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="ribban bg-primary">New Fashion</div>
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/best-sellar/04.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/best-sellar/05.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="trending-product">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/trending-product/01.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/trending-product/02.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="ribban bg-warning text-dark">New Season</div>
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="javascript:;">
                      <img src="assets/images/trending-product/03.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/trending-product/04.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/trending-product/05.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="special-offer">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/special-offer/01.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/special-offer/02.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="ribban">50% Discount</div>
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/special-offer/03.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/special-offer/04.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="position-relative overflow-hidden">
                    <div
                      class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                      <a href="javascript:;"><i class="bi bi-heart"></i></a>
                      <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                      <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                          class="bi bi-zoom-in"></i></a>
                    </div>
                    <a href="product-details.html">
                      <img src="assets/images/special-offer/05.webp" class="card-img-top" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="product-info text-center">
                      <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                      <div class="ratings mb-1 h6">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <p class="mb-0 h6 fw-bold product-price">$49</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>