<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Navbar</title>
    <!-- Tambahkan link Bootstrap dan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .navbar {
            background: linear-gradient(45deg, #11cb30 30%, #52e099 90%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: #fff;
        }
        .navbar-brand {
            font-family: 'Comic Sans MS', sans-serif;
            color: #fff;
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .navbar-toggler {
            border: none;
            color: #fff;
        }
        .navbar-toggler-icon {
            color: #fff;
        }
        .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .nav-link:hover {
            color: #ffcc00;
            transform: scale(1.1);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        .dropdown-menu {
            background-color: #2575fc;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: #6a11cb;
        }
        .open-btn {
            color: #fff;
            background-color: #2575fc;
            border: 1px solid #fff;
            border-radius: 5px;
        }
        .navbar .dropdown-menu .dropdown-item {
            color: #fff;
            background-color: #2575fc;
        }
        .navbar .dropdown-menu .dropdown-item:hover {
            color: #ffcc00;
            background-color: #6a11cb;
        }
        .fa-user-circle {
            color: #fff;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <div class="d-flex justify-content-between d-md-none d-block">
                <a class="navbar-brand" href="#">Metode Topsis</a>
                <button class="btn px-1 py-0 open-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex align-items-center gap-1 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='fas fa-user-circle'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('landing.logout') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Tambahkan sisa kode halaman Anda di sini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
