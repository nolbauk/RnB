<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RNB</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>

<body>
<div class="wrapper">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" rel="icon" type="image/x-icon">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="fa-solid fa-user"></span>
                <input type="text" name="username/email" id="username/email" placeholder="Username/Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div class="text-left">
                 <a href="#" class="forgot-password">Forgot your password?</a>
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            Need an Account? <a href="register">Sign up</a>
        </div>
        <div class="text-center fs-6">
            <a href="/">Back to Home</a>
        </div>
    </div>

  <!-- Bootstrap and JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
