<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NARAYANI DENTAL & SKIN CENTERE | Reset Password</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../img/svg/logo.png" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../../css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Reset Password</h1>
    <form class="sign-up-form form" action="{{ route('reset.password.post') }}" method="POST">
        @csrf
        <span class="invalid-feedback" role="alert" style="color: white;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <input type="hidden" name="token" value="{{ $token }}">
      <label class="form-label-wrapper">
        <p class="form-label">Name</p>
        <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert" style="color: red;">
                {{ $message }}
            </span>
        @enderror
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert" style="color: red;">
                {{ $message }}
            </span>
        @enderror
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input @error('password') is-invalid @enderror"  id="password" type="password" name="password" autocomplete="new-password" placeholder="Enter your password" required>
        @error('password')
            <span class="invalid-feedback" role="alert" style="color: red;">
                {{ $message }}
            </span>
        @enderror
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Confirm Password</p>
        <input class="form-input" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm your password" placeholder="Confirm your password" required autocomplete="new-password">
      </label>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <span class="form-checkbox-label">Remember me next time</span>
      </label>
      <button class="form-btn primary-default-btn transparent-btn">{{ __('Register') }}</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="../../plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../..plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../..js/script.js"></script>
</body>

</html>