<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="csrf-token"
      content="dsBrk6hMOV29KA5Qkf18nqOVLJ5cpjjd1YZ2gIvf"
    />
    <title>AMANO FINANCIALS  | User Login</title>

    <link
      rel="icon"
      href="./storage/logo-no-background.png"
      type="image/png"
    />

    <link
      href="./temp/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons -->
    <link
      href="./temp/css/materialdesignicons.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="./temp/css/line.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Main Css -->
    <link
      href="./temp/css/style.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="./temp/css/colors/default.css"
      rel="stylesheet"
    />
  </head>

  <style>
    * {
      color: blue !important;
    }
  </style>
  <body class="h-100 bg-black">
    <section class="auth">
      <div class="container">
        <div class="pb-3 row justify-content-center">
          <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
            <div class="bg-black shadow card login-page roundedd border-1">
              <div class="card-body">
                <div class="text-center" style="margin-right: 100px;">
                  <a href="/"
                    ><img
                      src="./storage/logo-no-background.png"
                      alt=""
                      class="mb-3 img-fluid auth__logo"
                  /></a>
                </div>
                <h4 class="text-center card-title">User Login</h4>
                <form
                  method="POST"
                  action="./login"
                  class="mt-4 login-form"
                >
                  <input
                    type="hidden"
                    name="_token"
                    value="dsBrk6hMOV29KA5Qkf18nqOVLJ5cpjjd1YZ2gIvf"
                  />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Your Email <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="mail" class="fea icon-sm icons"></i>
                          <input
                            type="text"
                            class="pl-5 form-control"
                            name="email"
                            value=""
                            id="email"
                            placeholder="name@example.com"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Password <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="key" class="fea icon-sm icons"></i>
                          <input
                            type="password"
                            class="pl-5 form-control"
                            name="password"
                            id="password"
                            placeholder="Enter Password"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="d-flex justify-content-between">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheck1"
                              name="remember"
                            />
                            <label
                              class="custom-control-label"
                              for="customCheck1"
                              >Remember me</label
                            >
                          </div>
                        </div>
                        <p class="mb-0 forgot-pass">
                          <a
                            href=""
                            class="text-success font-weight-bold"
                            >Forgot password ?</a
                          >
                        </p>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="mb-0 col-lg-12">
                      <button
                        class="btn btn-primary btn-block pad"
                        type="submit"
                      >
                        Sign in
                      </button>
                    </div>
                    <!--end col-->

                    <div class="mt-4 text-center col-lg-12"></div>
                    <!--end col-->
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-3 mb-0">
                        <small class="mr-2 text-success"
                          >Don't have an account ?</small
                        >
                        <a
                          href="./register.html"
                          class="text-success font-weight-bold"
                          >Sign Up</a
                        >
                      </p>
                    </div>
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-4 mb-0">
                        <small class="mr-2 text-success"
                          >&copy; Copyright 2023 &nbsp; AMANO FINANCIALS &nbsp; All
                          Rights Reserved.</small
                        >
                      </p>
                    </div>
                  </div>
                  <!--end row-->
                </form>
              </div>
            </div>
            <!---->
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->

    <script src="./temp/js/jquery-3.5.1.min.js"></script>
    <script src="./temp/js/bootstrap.bundle.min.js"></script>

    <!-- SLIDER -->
    <script src="./temp/js/owl.carousel.min.js"></script>
    <script src="./temp/js/owl.init.js"></script>
    <!-- Icons -->
    <script src="./temp/js/feather.min.js"></script>
    <script src="./temp/js/bundle.js"></script>

    <script src="./temp/js/app.js"></script>
    <script src="./temp/js/widget.js"></script>
  </body>
</html>
