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
        .border-rounded {
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
    <title>Register</title>
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 border-rounded">
                <div id="register">
                    <form action="{{ route('signUp.store') }}" method="POST">
                        @csrf
                        <h4 class="text-center">Create an Account</h4>
                        <p class="text-muted text-center">Please fill in the form to create an account</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Enter Name" required>
                            <label for="floatingName">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Enter Email" required>
                            <label for="floatingInput">Enter Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter Password" required>
                            <label for="floatingPassword">Enter Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPasswordConfirm" name="password_confirmation" placeholder="Confirm Password" required>
                            <label for="floatingPasswordConfirm">Confirm Password</label>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">SIGN UP</button>
                    </form>

                    <!--Sign In-->
                    <div class="text-center text-muted mt-3">
                        Already have an account? <a href="{{ route('signIn') }}" class="text-custom text-decoration-none">Sign In</a>
                    </div>
                    <!--Sign In End-->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
