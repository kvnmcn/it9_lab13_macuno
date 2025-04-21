<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Login' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        body {
            background-color: #1a1b26;
            color: #c0caf5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-card {
            background-color: #24283b;
            border-radius: 1rem;
            padding: 3rem 2rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
        }

        .auth-card h1 {
            color: #9ece6a;
            font-weight: bold;
        }

        .form-label {
            color: #7aa2f7;
        }

        .form-control {
            background-color: #1a1b26;
            border: 1px solid #3b4261;
            color: #c0caf5;
        }

        .form-control::placeholder {
            color: #a9b1d6;
            opacity: 0.8;
        }

        .form-control:focus {
            border-color: #f7768e;
            box-shadow: 0 0 0 0.2rem rgba(247, 118, 142, 0.25);
        }

        .btn-accent {
            background-color: #f7768e;
            border: none;
            color: #1a1b26;
        }

        .btn-accent:hover {
            background-color: #d65d7a;
        }

        .link-accent {
            color: #7aa2f7;
            text-decoration: none;
        }

        .link-accent:hover {
            text-decoration: underline;
        }

        .alert-success {
            background-color: #28354a;
            color: #9ece6a;
            border: none;
        }

        .alert-danger {
            background-color: #402934;
            color: #f7768e;
            border: none;
        }

        .form-check-label {
            color: #c0caf5;
        }
    </style>
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
    
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                eyeIcon.classList.toggle('bi-eye');
                eyeIcon.classList.toggle('bi-eye-slash');
            });
        }
    </script>

</body>

</html>