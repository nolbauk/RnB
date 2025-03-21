<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RNB</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
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
        <form class="p-3 mt-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="fa-solid fa-user"></span>
                <input type="text" class="form-control" name="login" id="login" placeholder="Username or Email" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="text-left">
                 <a href="#" class="forgot-password">Forgot your password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
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
