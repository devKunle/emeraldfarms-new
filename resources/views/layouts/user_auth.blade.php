<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 00:27:38 GMT -->
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <div class="loader"></div>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>Login</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="#" class="needs-validation" novalidate="">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                      <div class="invalid-feedback">
                        Please fill in your email
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                        <div class="float-right">
                          <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                          </a>
                        </div>
                      </div>
                      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                      <div class="invalid-feedback">
                        please fill in your password
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                      </button>
                    </div>
                  </form>
                  <div class="text-center mt-4 mb-3">
                    <div class="text-job text-muted">Login With Social</div>
                  </div>
                  <div class="row sm-gutters">
                    <div class="col-6">
                      <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                      </a>
                    </div>
                    <div class="col-6">
                      <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="auth-register.html">Create One</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
  </body>
  <!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 00:27:39 GMT -->
</html>
