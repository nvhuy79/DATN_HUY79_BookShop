<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{-- <link rel="shortcut icon" type="image/png" href="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="https://bootstrapdemos.adminmart.com/matdash/dist/assets/css/styles.css" /> --}}
  <title>Haven BookStore Admin</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100 my-5 my-xl-0">
          <div class="col-md-9 d-flex flex-column justify-content-center">
            <div class="card mb-0 bg-body auth-login m-auto w-100">
              <div class="row gx-0">
                <!-- ------------------------------------------------- -->
                <!-- Part 1 -->
                <!-- ------------------------------------------------- -->
                <div class="col-xl-6 border-end">
                  <div class="row justify-content-center py-4">
                    <div class="col-lg-11">
                      <div class="card-body">
                        <a href="#" class="text-nowrap logo-img d-block mb-4 w-100">
                          <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/logos/logo.svg" class="dark-logo" alt="Logo-Dark" />
                        </a>
                        <h2 class="lh-base mb-4">Let's get you signed up</h2>
                        <div class="row">
                          <div class="col-6 mb-2 mb-sm-0">
                            <a class="btn btn-white shadow-sm text-dark link-primary border fw-semibold d-flex align-items-center justify-content-center rounded-1 py-6" href="javascript:void(0)" role="button">
                              <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/svgs/facebook-icon.svg" alt="matdash-img" class="img-fluid me-2" width="18" height="18">
                              <span class="d-none d-xxl-inline-flex "> Sign in with </span>&nbsp; Facebook
                            </a>
                          </div>
                          <div class="col-6">
                            <a class="btn btn-white shadow-sm text-dark link-primary border fw-semibold d-flex align-items-center justify-content-center rounded-1 py-6" href="javascript:void(0)" role="button">
                              <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/svgs/google-icon.svg" alt="matdash-img" class="img-fluid me-2" width="18" height="18">
                              <span class="d-none d-xxl-inline-flex"> Sign in with </span>&nbsp; Google
                            </a>

                          </div>
                        </div>
                        <div class="position-relative text-center my-4">
                          <p class="mb-0 fs-12 px-3 d-inline-block bg-body z-index-5 position-relative">Or sign up with
                            email
                          </p>
                          <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                        </div>
                        <form>
                          <div class="mb-3">
                            <label for="text-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="text-name" placeholder="Enter your name" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <a class="text-primary link-dark fs-2" href="https://bootstrapdemos.adminmart.com/matdash/dist/main/authentication-forgot-password2.html">Forgot
                                Password ?</a>
                            </div>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                              <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                              <label class="form-check-label text-dark" for="flexCheckChecked">
                                Keep me logged in
                              </label>
                            </div>
                          </div>
                          <a href="#" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Sign Up</a>
                          <div class="d-flex align-items-center">
                            <p class="fs-12 mb-0 fw-medium">Already have an Account?</p>
                            <a class="text-primary fw-semibold ms-2" href="https://bootstrapdemos.adminmart.com/matdash/dist/main/authentication-login2.html">Sign in Now</a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- ------------------------------------------------- -->
                <!-- Part 2 -->
                <!-- ------------------------------------------------- -->
                <div class="col-xl-6 d-none d-xl-block">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-lg-9">
                      <div id="auth-login" class="carousel slide auth-carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#auth-login" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#auth-login" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#auth-login" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column gap-9 text-center">
                              <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/backgrounds/login-side.png" alt="login-side-img" width="300" class="img-fluid" />
                              <h4 class="mb-0">Feature Rich 3D Charts</h4>
                              <p class="fs-12 mb-0">Donec justo tortor, malesuada vitae faucibus ac, tristique sit amet
                                massa.
                                Aliquam dignissim nec felis quis imperdiet.</p>
                              <a href="javascript:void(0)" class="btn btn-primary rounded-1">Learn More</a>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column gap-9 text-center">
                              <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/backgrounds/login-side.png" alt="login-side-img" width="300" class="img-fluid" />
                              <h4 class="mb-0">Feature Rich 2D Charts</h4>
                              <p class="fs-12 mb-0">Donec justo tortor, malesuada vitae faucibus ac, tristique sit amet
                                massa.
                                Aliquam dignissim nec felis quis imperdiet.</p>
                              <a href="javascript:void(0)" class="btn btn-primary rounded-1">Learn More</a>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column gap-9 text-center">
                              <img src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/images/backgrounds/login-side.png" alt="login-side-img" width="300" class="img-fluid" />
                              <h4 class="mb-0">Feature Rich 1D Charts</h4>
                              <p class="fs-12 mb-0">Donec justo tortor, malesuada vitae faucibus ac, tristique sit amet
                                massa.
                                Aliquam dignissim nec felis quis imperdiet.</p>
                              <a href="javascript:void(0)" class="btn btn-primary rounded-1">Learn More</a>
                            </div>
                          </div>
                        </div>

                      </div>


                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/js/theme/app.init.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/matdash/dist/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/matdash/dist/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 03:38:53 GMT -->
</html>