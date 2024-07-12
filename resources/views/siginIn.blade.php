<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Assets/Css/auth.css') }}">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .text-custom {
            color: #28a745;
        }
        .text-custom:hover {
            color: #218838;
        }
        .btn-outline-custom {
            border-color: #28a745;
            color: #28a745;
        }
        .btn-outline-custom:hover {
            background-color: #28a745;
            color: white;
        }
        .login-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center vh-100"> <!-- Full-height Container -->
        <div class="row w-100"> <!-- Full-width Row -->
            <div class="col-md-6 mx-auto"> <!-- Centered Column -->
                <div id="login" class="border rounded p-4 shadow-sm bg-white"> <!-- Added Border, Padding, Shadow, and Background -->
                    <form action="{{ route('signin.auth') }}" method="POST"> <!-- Login Form -->
                        @csrf <!-- CSRF Token -->
                        <h4 class="text-center">Selamat Datang, Teman!</h4>
                        <p class="text-muted text-center"></p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Masukkan Email" required>
                            <label for="floatingInput">Masukkan Email</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Masukkan Password" required>
                            <label for="floatingPassword">Masukkan Password</label>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('password.request') }}" class="text-custom" style="font-size:14px;">Lupa Password?</a>
                        </div>
                        <button type="submit" class="btn btn-custom w-100 mt-3">MASUK</button>
                    </form> <!-- End of Login Form -->

                    <!-- Sign Up Section -->
                    <div class="text-center text-muted mt-3" style="font-size:14px;">
                        Belum punya akun? 
                        <a href="{{ route('signUp') }}" class="text-custom text-decoration-none">Daftar</a>
                    </div> <!-- End of Sign Up Section -->

                    <!-- Other Login Options -->
                    <div class="other-login mt-3"> <!-- Other Login Start -->
                        <a href="{{ route('google.login') }}" class="btn btn-outline-custom w-100 mb-2 d-flex align-items-center justify-content-center">
                            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google-icon" class="login-icon">
                            Masuk dengan Google
                        </a>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
