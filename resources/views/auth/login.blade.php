<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narayani Dental &amp; Skin Centere | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.png" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Welcome back!</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" method="POST" action="{{ route('login') }}" >
      @csrf
      <label class="form-label-wrapper">
          
        <span class="invalid-feedback" role="alert" style="color: white;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <p class="form-label">Email</p>
        <input class="form-input @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Enter your email" required>
        @error('email')
            <span class="invalid-feedback" role="alert" style="color: red;">
                {{ $message }}
            </span>
        @enderror
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Enter your password" required>
        @error('password')
            <span class="invalid-feedback" role="alert" style="color: red;">
                {{ $message }}
            </span>
        @enderror
      </label>
      @if (Route::has('password.request'))
        <a class="link-info forget-link" >Forgot your password?</a>
      @endif
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <span class="form-checkbox-label">Remember me next time</span>
      </label>
      <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
      <br>
      <label class="form-checkbox-wrapper" style="margin: auto;">
        <span class="form-checkbox-label">Don't have an account yet?</span>
      </label>
      <label class="form-checkbox-wrapper" style="margin: auto;">
        <a class="link-info forget-link" href="{{ route('book-appointment') }}">Create an account</a>
      </label>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>