<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts/head-css')
</head>

<body>
  @include('layouts/loader')
  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <a href="#"><img src="../assets/images/logo-dark.svg" alt="img"></a>
        </div>
        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-center mb-4">
              <h3 class="mb-0"><b>Login</b></h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login.post') }}" class="js-validation-material user">
                @csrf   
            <div class="form-group mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="d-flex mt-1 justify-content-between">
              <div class="form-label">
                <a href="{{ route('register') }}" class="link-primary">Don't have an account?</a>
              </div>
              <h5 class="text-secondary f-w-400">Forgot Password?</h5>
            </div>
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
          </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
              <p class="m-0">Copyright © <a href="#">Codedthemes</a></p>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  @include('layouts/footer-js')

  <script>
        $(function() {
            $('.js-validation-material').validate({
                rules: {
                    email: { required: true,email: true},
                    password: { required: true, minlength: 5},
                },
                messages: {
                    email: { required: "Please enter an email address", email: "Please enter a vaild email address" },
                    password: { required: "Please provide a password",  minlength: "Your password must be at least 5 characters long"},
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>
</html>