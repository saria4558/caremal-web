<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - CaremaL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4ff;
        }

        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-container img {
            width: 80px;
        }

        .register-container h2 {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary,
        .btn-secondary {
            border-radius: 30px;
            width: 100%;
            padding: 10px;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .terms {
            font-size: 12px;
            color: #888;
        }

        .terms a {
            text-decoration: none;
            color: #007bff;
        }

        /* Hidden by default */
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <img src="{{ asset('images/logoo.png') }}" alt="CaremaL Logo" style="width: 200px;">
        <h2>Mulai saja di CaremaL!</h2>
        <p>You can connect directly, quickly, and easily.</p>

        <!-- Form kedua untuk username dan password -->
        <form method="POST" action="{{ route('register.complete.post') }}" id="second-form">
            @csrf
            <div class="form-group">
                <input type="text" name="masy_username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="masy_password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="masy_password_confirmation" class="form-control"
                    placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="{{ route('login') }}" class="font-semibold text-cyan-600">Login</a>
        </form>

        <p class="terms">By creating an account, you accept our <a href="#">Terms and Conditions</a> and <a
                href="#">Privacy Policy</a>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
